import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.firefox.FirefoxOptions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;

import java.time.Duration;
import java.util.List;
import java.util.Objects;
import java.util.concurrent.ThreadLocalRandom;

public class Main {
    public static void main(String[] args) {
        long startTime = System.currentTimeMillis();
        WebDriver driver = setupDriver();
        WebDriverWait wait = new WebDriverWait(driver, Duration.ofSeconds(5));
        driver.get("https://localhost/pl/");
        try {
            runTest1(driver, wait);
            Thread.sleep(100);

            runTest2(driver, wait);
            Thread.sleep(100);

            runTest3(driver, wait);
            Thread.sleep(100);

            runTest4(driver);
            Thread.sleep(100);

            runTests5_6_7_8(driver);
            Thread.sleep(100);

            runTest9(driver);
            driver.quit();
        } catch (InterruptedException e) {
            System.out.println("test was interrupted");
        }
        long endTime = System.currentTimeMillis();
        long duration = (endTime - startTime)/1000; // duration in seconds
        long minutes = duration/60;
        long seconds = duration%60;
        System.out.println("Tests took " + minutes + " minutes and " + seconds + " seconds");
    }

    public static WebDriver setupDriver() {
        FirefoxOptions fOptions = new FirefoxOptions();
        fOptions.setAcceptInsecureCerts(true);

        return new FirefoxDriver(fOptions);
    }

    /*
    Performs sequence of actions to add product at random quantities in range 1-10 to the cart and returns the quantity.
     */
    public static int addProduct(WebDriver driver, WebDriverWait wait) {
        int num = ThreadLocalRandom.current().nextInt(1,10);

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

    public static int selectCatAndProd(WebDriver driver, WebDriverWait wait,
                                       String cat, String product) throws InterruptedException {
        wait.until(ExpectedConditions.invisibilityOfElementLocated(By.id("blockcart-modal")));
        Thread.sleep(100);
        wait.until(ExpectedConditions.elementToBeClickable(By.id(cat))).click();

        WebElement prod = driver.findElement(By.xpath("//*[@data-id-product='" + product + "']"));
        wait.until(ExpectedConditions.elementToBeClickable(prod)).click();

        return addProduct(driver, wait);
    }

    public static int getCartCount(WebDriver driver) {
        WebElement cartCount = driver.findElement(By.cssSelector(".cart-products-count"));
        return Integer.parseInt(cartCount.getText().replaceAll("[^0-9]",""));
    }

    public static void selectRandomOption(WebDriver driver, String option) {
        List<WebElement> options = driver.findElements(By.cssSelector("[id^='" + option + "']"));
        options.removeIf(e -> !Objects.requireNonNull(e.getAttribute("id")).matches(".*\\d$"));
        WebElement button = options.get(ThreadLocalRandom.current().nextInt(0, options.size()));

        if(!button.isSelected())
            button.click();
    }

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
    public static void runTest1(WebDriver driver, WebDriverWait wait) throws InterruptedException {
        int quantity = selectCatAndProd(driver, wait,"category-3", "1");
        quantity += selectCatAndProd(driver, wait,"category-3", "2");

        quantity += selectCatAndProd(driver, wait,"category-6", "6");
        quantity += selectCatAndProd(driver, wait,"category-6", "7");
        quantity += selectCatAndProd(driver, wait,"category-6", "10");
        quantity += selectCatAndProd(driver, wait,"category-6", "11");
        quantity += selectCatAndProd(driver, wait,"category-6", "18");

        quantity += selectCatAndProd(driver, wait,"category-9", "12");
        quantity += selectCatAndProd(driver, wait,"category-9", "13");
        quantity += selectCatAndProd(driver, wait,"category-9", "14");

        int value = getCartCount(driver);
        System.out.println("test 1 expected: " + quantity + ", current value: " +
                value + ", passed: " + (value == quantity));
    }

    /*
    Test includes searching for an item by its name using searchbar,
    then out of found items random one is added to the cart
     */
    public static void runTest2(WebDriver driver, WebDriverWait wait) throws InterruptedException {
        int initValue = getCartCount(driver);

        WebElement searchBar = driver.findElement(By.cssSelector(".ui-autocomplete-input"));
        searchBar.sendKeys("humm");
        searchBar.sendKeys(Keys.ENTER);

        Thread.sleep(300);

        wait.until(ExpectedConditions.presenceOfElementLocated(By.cssSelector("[data-id-product]")));
        List<WebElement> products = driver.findElements(By.cssSelector("[data-id-product]"));
        WebElement product = products.get(ThreadLocalRandom.current().nextInt(0, products.size()));
        wait.until(ExpectedConditions.visibilityOf(product));
        product.click();

        int expected = addProduct(driver, wait) + initValue;
        int result = getCartCount(driver);
        System.out.println("test 2 expected: " + expected + ", current value: " +
                result + ", passed: " + (result == expected));
    }

    /*
    Test includes removing 3 products form the cart
     */
    public static void runTest3(WebDriver driver, WebDriverWait wait) throws InterruptedException {
        wait.until(ExpectedConditions.elementToBeClickable(By.xpath("//*[contains(text(),'Koszyk')]")))
                .click();
        int expected = driver.findElements(By.cssSelector(".remove-from-cart")).size() - 3;

        for (int i = 0; i < 3; i++) {
            List<WebElement> cartList = driver.findElements(By.cssSelector(".remove-from-cart"));
            WebElement tmp = cartList.get(ThreadLocalRandom.current().nextInt(0,cartList.size()));
            wait.until(ExpectedConditions.elementToBeClickable(tmp)).click();

            driver.navigate().refresh();
        }

        int result = driver.findElements(By.cssSelector(".remove-from-cart")).size();
        System.out.println("test 3 expected: " + expected + ", current value: " +
                result + ", passed: " + (result == expected));
    }

    /*
    Test includes registering a new user, then checking if after registration proper first and last names are displayed.
     */
    public static void runTest4(WebDriver driver) throws InterruptedException {
        String firstName = "Test";
        String lastName = "Test";
        String mail = "Test" + System.currentTimeMillis() + "@gmail.com";
        String password = "12345";
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

        String result = driver.findElement(By.className("account")).getText();
        System.out.println("test 4 expected: " + expected + ", current value: " +
                result + ", passed: " + (expected.compareTo(result) == 0));
    }

    /*
    Tests that include starting ordering process, filling order forms and placing order.
     */
    public static void runTests5_6_7_8(WebDriver driver) throws InterruptedException {
        String street = "ul. test";
        String city = "TestCity";
        String postCode = "12-345";

        driver.findElement(By.xpath("//*[contains(text(),'Koszyk')]")).click();
        driver.findElement(By.xpath("//*[contains(text(),'Przejdź do realizacji zamówienia')]")).click();

        driver.findElement(By.id("field-address1")).sendKeys(street);
        driver.findElement(By.id("field-postcode")).sendKeys(postCode);
        driver.findElement(By.id("field-city")).sendKeys(city);
        driver.findElement(By.name("confirm-addresses")).click();
        Thread.sleep(100);

        selectRandomOption(driver,"delivery_option_");
        boolean deliverySelected = checkIfOneSelected(driver, "delivery_option_");
        System.out.println("test 6 expected: true" + ", current value: " + deliverySelected + ", passed: "
                + deliverySelected);

        driver.findElement(By.name("confirmDeliveryOption")).click(); //need find better selector
        Thread.sleep(100);

        selectRandomOption(driver, "payment-option-");
        boolean paySelected = checkIfOneSelected(driver, "payment-option-");
        System.out.println("test 7 expected: true" + ", current value: " + paySelected + ", passed: " + paySelected);

        driver.findElement(By.id("conditions_to_approve[terms-and-conditions]")).click();
        driver.findElement(By.xpath("//*[contains(text(),'Złóż zamówienie')]")).click();

        String orderNo = driver.findElement(By.id("order-reference-value")).getText();
        System.out.println("test 8 expected: any string" + ", current value: " +
                orderNo + ", passed: " + !orderNo.isEmpty());
    }

    /*
    Test that includes checking the status of the placed order, it is considered passed when there is an order present
    with status text, otherwise it is marked as failed.
     */
    public static void runTest9(WebDriver driver) throws InterruptedException {
        driver.findElement(By.className("account")).click();
        driver.findElement(By.id("history-link")).click();
        try{
            String result = driver.findElement(By.cssSelector(".label.label-pill.bright")).getText();
            System.out.println("test 9 expected: any string, result: " + result + " passed: true");
        }catch (NoSuchElementException e){
            System.out.println("Test 9 failed, reason: no orders");
        }
    }

    public void runTest10(WebDriver driver) throws InterruptedException {
        driver.get("https://localhost/pl/");
        driver.findElement(By.className("account")).click();
        driver.findElement(By.id("history-link")).click();
    }
}
