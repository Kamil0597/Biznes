import org.junit.jupiter.api.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.firefox.FirefoxOptions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.List;
import java.util.Objects;
import java.util.concurrent.ThreadLocalRandom;
import static org.junit.jupiter.api.Assertions.*;

@TestMethodOrder(MethodOrderer.OrderAnnotation.class)
public class ShopTests {

    public static WebDriver driver;
    public static WebDriverWait wait;
    static int animDelay = 100;     //Delay in millis to wait out animations
    static int refreshDelay = 300;  //Delay in millis to accommodate site refresh
    static int dlDelay = 5000;      //Delay in millis to allow start of invoice download
    static int maxItemCount = 4;    //Maximum quantity of items bought
    String firstName = "Test";      //Needed for registration test
    String lastName = "Test";       //Needed for registration test
    String mail = "Test" + System.currentTimeMillis() + "@gmail.com";   //Needed for registration test
    String password = "12345";      //Needed for registration test
    String street = "ul. test";     //Needed for order test
    String city = "TestCity";       //Needed for order test
    String postCode = "12-345";     //Needed for order test
    String login = "jannowak@gmail.com";  //Needed for status and invoice download tests


    @BeforeAll
    public static void setupDriver() {
        FirefoxOptions fOptions = new FirefoxOptions();
        fOptions.setAcceptInsecureCerts(true);

        driver =  new FirefoxDriver(fOptions);
        wait = new WebDriverWait(driver, Duration.ofSeconds(5));
    }

    @BeforeEach
    public void returnToHomePage() {
        driver.get("https://localhost/pl/");
    }

    @AfterAll
    public static void closDriver() {
        driver.quit();
    }

    /*
    Performs sequence of actions to add product at random quantities in range 1-10 to the cart and returns the quantity.
    */
    public static int addProduct(WebDriver driver, WebDriverWait wait) {
        int num = ThreadLocalRandom.current().nextInt(1, maxItemCount);

        WebElement quantity = driver.findElement(By.id("quantity_wanted"));
        quantity.sendKeys(Keys.CONTROL + "a");
        quantity.sendKeys(Keys.BACK_SPACE);
        quantity.sendKeys(String.valueOf(num));

        WebElement addToCartButton = driver.findElement(By.cssSelector(".btn.btn-primary.add-to-cart"));
        wait.until(ExpectedConditions.elementToBeClickable(addToCartButton)).click();

        WebElement contButton = wait.until(ExpectedConditions.presenceOfElementLocated(By
                .xpath("//*[contains(text(),'Kontynuuj zakupy')]")));
        wait.until(ExpectedConditions.elementToBeClickable(contButton)).click();
        return num;
    }

    //Selects a category and product
    public static int selectCatAndProd(WebDriver driver, WebDriverWait wait,
                                       String cat, String product) throws InterruptedException {
        wait.until(ExpectedConditions.invisibilityOfElementLocated(By.id("blockcart-modal")));
        Thread.sleep(animDelay);
        wait.until(ExpectedConditions.elementToBeClickable(By.id(cat))).click();

        WebElement prod = driver.findElement(By.xpath("//*[@data-id-product='" + product + "']"));
        wait.until(ExpectedConditions.elementToBeClickable(prod)).click();

        return addProduct(driver, wait);
    }

    public static int getCartCount(WebDriver driver) {
        WebElement cartCount = driver.findElement(By.cssSelector(".cart-products-count"));
        return Integer.parseInt(cartCount.getText().replaceAll("[^0-9]",""));
    }

    //Selects random option of either delivery or payment
    public static void selectRandomOption(WebDriver driver, String option) {
        List<WebElement> options = driver.findElements(By.cssSelector("[id^='" + option + "']"));
        options.removeIf(e -> !Objects.requireNonNull(e.getAttribute("id")).matches(".*\\d$"));
        WebElement button = options.get(ThreadLocalRandom.current().nextInt(0, options.size()));

        if(!button.isSelected())
            button.click();
    }

    //Checks if at least one option is selected, use on either delivery or payment options
    public static boolean checkIfOneSelected(WebDriver driver, String option) {
        List<WebElement> options = driver.findElements(By.cssSelector("[id^='" + option + "']"));
        options.removeIf(e -> !Objects.requireNonNull(e.getAttribute("id")).matches(".*\\d$"));

        for(WebElement opt : options){
            if(opt.isSelected())
                return true;
        }
        return false;
    }

    /*
    Test includes adding 10 different products with various quantities ranging from 1 to 10,
    then overall count of products in the cart is checked against expected value to determine if test was passed.
    */
    @Test
    @Order(1)
    public void addProductsTest() throws InterruptedException {
        int quantity = selectCatAndProd(driver, wait,"category-4", "22");
        quantity += selectCatAndProd(driver, wait,"category-4", "1");

        quantity += selectCatAndProd(driver, wait,"category-7", "543");
        quantity += selectCatAndProd(driver, wait,"category-7", "463");
        quantity += selectCatAndProd(driver, wait,"category-7", "402");
        quantity += selectCatAndProd(driver, wait,"category-7", "544");
        quantity += selectCatAndProd(driver, wait,"category-7", "464");

        quantity += selectCatAndProd(driver, wait,"category-7", "404");
        quantity += selectCatAndProd(driver, wait,"category-7", "469");
        quantity += selectCatAndProd(driver, wait,"category-7", "405");

        assertEquals(quantity, getCartCount(driver));
    }

    /*
    Test includes searching for an item by its name using searchbar,
    then out of found items random one is added to the cart
    */
    @Test
    @Order(2)
    public void searchItemTest() throws InterruptedException {
        int initValue = getCartCount(driver);

        WebElement searchBar = driver.findElement(By.cssSelector(".ui-autocomplete-input"));
        searchBar.sendKeys("Druty");
        searchBar.sendKeys(Keys.ENTER);

        Thread.sleep(refreshDelay);

        wait.until(ExpectedConditions.presenceOfElementLocated(By.cssSelector("[data-id-product]")));
        List<WebElement> products = driver.findElements(By.cssSelector("[data-id-product]"));
        WebElement product = products.get(ThreadLocalRandom.current().nextInt(0, products.size()));
        wait.until(ExpectedConditions.visibilityOf(product));
        product.click();

        int expected = addProduct(driver, wait) + initValue;
        assertEquals(expected, getCartCount(driver));
    }

    /*
    Test includes removing 3 products form the cart
    */
    @Test
    @Order(3)
    public void removeItemsTest() {
        wait.until(ExpectedConditions.elementToBeClickable(By.xpath("//*[contains(text(),'Koszyk')]")))
                .click();
        int expected = driver.findElements(By.cssSelector(".remove-from-cart")).size() - 3;

        for (int i = 0; i < 3; i++) {
            List<WebElement> cartList = driver.findElements(By.cssSelector(".remove-from-cart"));
            WebElement tmp = cartList.get(ThreadLocalRandom.current().nextInt(0,cartList.size()));
            wait.until(ExpectedConditions.elementToBeClickable(tmp)).click();

            driver.navigate().refresh();
        }

        assertEquals(expected, driver.findElements(By.cssSelector(".remove-from-cart")).size());
    }

    /*
    Test includes registering a new user, then checking if after registration proper first and last names are displayed.
    */
    @Test
    @Order(4)
    public void userRegistrationTest() {
        String expected = firstName + " " + lastName;

        driver.findElement(By.className("user-info")).click();
        driver.findElement(By.className("no-account")).click();

        driver.findElement(By.id("field-id_gender-1")).click();
        driver.findElement(By.id("field-firstname")).sendKeys(firstName);
        driver.findElement(By.id("field-lastname")).sendKeys(lastName);
        driver.findElement(By.id("field-email")).sendKeys(mail);
        driver.findElement(By.id("field-password")).sendKeys(password);
        driver.findElement(By.cssSelector("input[name='customer_privacy']")).click();
        driver.findElement(By.cssSelector("input[name='psgdpr']")).click();
        driver.findElement(By.xpath("//*[contains(text(),'Zapisz')]")).click();

        try{
            assertEquals(expected, wait.until(ExpectedConditions
                    .presenceOfElementLocated(By.className("account"))).getText());
        } catch (Exception e){
            fail("Could not find User name and lastname.\n" + e.getMessage());
        }
    }

    /*
    Tests that include starting ordering process, filling order forms and placing order.
    */
    @Test
    @Order(5)
    public void orderTest() throws InterruptedException {
        driver.findElement(By.xpath("//*[contains(text(),'Koszyk')]")).click();
        driver.findElement(By.xpath("//*[contains(text(),'Przejdź do realizacji zamówienia')]")).click();

        driver.findElement(By.id("field-address1")).sendKeys(street);
        driver.findElement(By.id("field-postcode")).sendKeys(postCode);
        driver.findElement(By.id("field-city")).sendKeys(city);
        driver.findElement(By.name("confirm-addresses")).click();
        Thread.sleep(animDelay);

        selectRandomOption(driver,"delivery_option_");
        assertTrue(checkIfOneSelected(driver, "delivery_option_"));

        driver.findElement(By.name("confirmDeliveryOption")).click(); //need find better selector
        Thread.sleep(animDelay);

        selectRandomOption(driver, "payment-option-");
        assertTrue(checkIfOneSelected(driver, "payment-option-"));

        driver.findElement(By.id("conditions_to_approve[terms-and-conditions]")).click();
        driver.findElement(By.xpath("//*[contains(text(),'Złóż zamówienie')]")).click();

        try{
            assertFalse(wait.until(ExpectedConditions
                    .presenceOfElementLocated(By.id("order-reference-value"))).getText().isEmpty());
        } catch (Exception e){
            fail("Could not find order number.\n" + e.getMessage());
        }
    }

    /*
    Test that includes checking the status of the placed order, it is considered passed when there is an order present
    with status text, otherwise it is marked as failed.
    */
    @Test
    @Order(6)
    public void checkOrderStatusTest() {
        driver.findElement(By.className("account")).click();
        driver.findElement(By.id("history-link")).click();
        try{
            driver.findElement(By.cssSelector(".label.label-pill.bright"));
        }catch (NoSuchElementException e){
            fail("Could not find any order status.\n" + e.getMessage());
        }
    }

    /*
    Test involves checking if invoice for a placed order is downloadable. It is considered passed if dedicated icon
    exists and is clickable, otherwise the test is marked as failed.
     */
    @Test
    @Order(7)
    public void invoiceDownloadTest() {
        driver.findElement(By.className("logout")).click();
        wait.until(ExpectedConditions.elementToBeClickable(By.className("user-info"))).click();

        driver.findElement(By.id("field-email")).sendKeys(login);
        driver.findElement(By.id("field-password")).sendKeys(password);
        driver.findElement(By.id("submit-login")).click();

        driver.findElement(By.className("account")).click();
        driver.findElement(By.id("history-link")).click();
        try {
            driver.findElement(By.cssSelector(".test-sm-center.hidden-md-down>a")).click();
            Thread.sleep(dlDelay);
        } catch (Exception e) {
            fail("Could not download invoice:\n" + e.getMessage());
        }
    }
}
