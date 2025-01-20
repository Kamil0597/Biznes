<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig */
class __TwigTemplate_efc43c7b91083f253e71ffa71ee47947cd7d1ce627ebdc13b9c207552a557e60 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["isColumnLocationDisplayed"] = false;
        // line 27
        $context["isColumnRefundedDisplayed"] = false;
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", []), 0, ($context["paginationNum"] ?? $this->getContext($context, "paginationNum"))));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "  ";
            if ( !twig_test_empty($this->getAttribute($context["product"], "location", []))) {
                // line 30
                echo "    ";
                $context["isColumnLocationDisplayed"] = true;
                // line 31
                echo "  ";
            }
            // line 32
            echo "  ";
            if (($this->getAttribute($context["product"], "quantityRefunded", []) > 0)) {
                // line 33
                echo "    ";
                $context["isColumnRefundedDisplayed"] = true;
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
<div class=\"card\" id=\"orderProductsPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo " (<span id=\"orderProductsPanelCount\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", [])), "html", null, true);
        echo "</span>)
    </h3>
  </div>

  <div class=\"card-body\">
    <div class=\"spinner-order-products-container\" id=\"orderProductsLoading\">
      <div class=\"spinner spinner-primary\"></div>
    </div>
    ";
        // line 48
        $context["formOptions"] = ["attr" => ["data-order-id" => $this->getAttribute(        // line 50
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "data-is-delivered" => $this->getAttribute(        // line 51
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isDelivered", []), "data-is-tax-included" => $this->getAttribute(        // line 52
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isTaxIncluded", []), "data-discounts-amount" => $this->getAttribute($this->getAttribute(        // line 53
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountRaw", []), "data-price-specification" => twig_jsonencode_filter(        // line 54
($context["priceSpecification"] ?? $this->getContext($context, "priceSpecification")))]];
        // line 57
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), 'form_start', ($context["formOptions"] ?? $this->getContext($context, "formOptions")));
        echo "
    <table class=\"table\" id=\"orderProductsTable\" data-currency-precision=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? $this->getContext($context, "orderCurrency")), "precision", []), "html", null, true);
        echo "\">
      <thead>
      <tr>
        <th>
          <p>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th></th>
        <th>
          <p class=\"mb-0\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price per unit", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        <th>
          <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductLocation";
        // line 72
        if ( !($context["isColumnLocationDisplayed"] ?? $this->getContext($context, "isColumnLocationDisplayed"))) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th class=\"cellProductRefunded";
        // line 75
        if ( !($context["isColumnRefundedDisplayed"] ?? $this->getContext($context, "isColumnRefundedDisplayed"))) {
            echo " d-none";
        }
        echo "\">
          <p>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Refunded", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
        <th ";
        // line 78
        if ( !($context["isAvailableQuantityDisplayed"] ?? $this->getContext($context, "isAvailableQuantityDisplayed"))) {
            echo "class=\"d-none\"";
        }
        echo ">
          <p>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available", [], "Admin.Global"), "html", null, true);
        echo "</p>
        </th>
        <th>
          <p class=\"mb-0\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</p>
          <small class=\"text-muted\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", []), "html", null, true);
        echo "</small>
        </th>
        ";
        // line 85
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [], "method")) {
            // line 86
            echo "          <th>
            <p>";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 90
        echo "        ";
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "delivered", [])) {
            // line 91
            echo "          <th class=\"text-right product_actions d-print-none\">
            <p>";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</p>
          </th>
        ";
        }
        // line 95
        echo "        <th class=\"text-center cancel-product-element\">
          <p>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partial refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</p>
        </th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 101
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product_list.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 101)->display($context);
        // line 102
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 102)->display($context);
        // line 103
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 103)->display($context);
        // line 104
        echo "      </tbody>
    </table>

    <div class=\"row mb-3\">
      <div class=\"col-md-6 text-left d-print-none order-product-pagination\">
        <div class=\"form-group row\">
          <label for=\"paginator_select_page_limit\" class=\"col-form-label ml-3\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          <div class=\"col\">
            <select id=\"orderProductsTablePaginationNumberSelector\" class=\"pagination-link custom-select\">
              ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationNumOptions"] ?? $this->getContext($context, "paginationNumOptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["numPageOption"]) {
            // line 114
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "\"";
            if (($context["numPageOption"] == ($context["paginationNum"] ?? $this->getContext($context, "paginationNum")))) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["numPageOption"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPageOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "            </select>
          </div>
        </div>
        ";
        // line 119
        $context["numPages"] = twig_round(max((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", [])) / ($context["paginationNum"] ?? $this->getContext($context, "paginationNum"))), 1), 0, "ceil");
        // line 120
        echo "        <nav aria-label=\"Products Navigation\"";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "products", []), "products", [])) <= ($context["paginationNum"] ?? $this->getContext($context, "paginationNum")))) {
            echo " class=\"d-none\"";
        }
        echo " id=\"orderProductsNavPagination\">
          <ul class=\"pagination\" id=\"orderProductsTablePagination\" data-num-per-page=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["paginationNum"] ?? $this->getContext($context, "paginationNum")), "html", null, true);
        echo "\" data-num-pages=\"";
        echo twig_escape_filter($this->env, ($context["numPages"] ?? $this->getContext($context, "numPages")), "html", null, true);
        echo "\">
            <li class=\"page-item disabled\" id=\"orderProductsTablePaginationPrev\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
              </a>
            </li>
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["numPages"] ?? $this->getContext($context, "numPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["numPage"]) {
            // line 129
            echo "              <li class=\"page-item";
            if (($context["numPage"] == 1)) {
                echo " active";
            }
            echo "\"><span class=\"page-link\" data-order-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
            echo "\" data-page=\"";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["numPage"], "html", null, true);
            echo "</span></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['numPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "            <li class=\"page-item d-none\"><span class=\"page-link\" data-order-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
        echo "\" data-page=\"\"></span></li>
            <li class=\"page-item\" id=\"orderProductsTablePaginationNext\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class=\"col-md-6 text-right discount-action\">
        ";
        // line 142
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "delivered", [])) {
            // line 143
            echo "          <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn mr-3\" id=\"addProductBtn\">
            <i class=\"material-icons\">add_circle_outline</i>
            ";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </button>
        ";
        }
        // line 148
        echo "        <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn\" data-toggle=\"modal\" data-target=\"#addOrderDiscountModal\">
          <i class=\"material-icons\">confirmation_number</i>
          ";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a discount", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </button>
      </div>

      ";
        // line 154
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", 154)->display(twig_array_merge($context, ["discounts" => $this->getAttribute($this->getAttribute(        // line 155
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "discounts", []), "discounts", []), "orderId" => $this->getAttribute(        // line 156
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]));
        // line 158
        echo "
      <div class=\"col-md-12\">
        <div class=\"col-md-12\">
          <div class=\"info-block\">
            <div class=\"row\">
              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
                <strong id=\"orderProductsTotal\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "productsPriceFormatted", []), "html", null, true);
        echo "</strong>
              </div>

              <div id=\"order-discounts-total-container\" class=\"col-sm text-center";
        // line 168
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " d-none";
        }
        echo "\">
                <p class=\"text-muted mb-0\"><strong>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discounts", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
                <strong id=\"orderDiscountsTotal\">-";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountFormatted", []), "html", null, true);
        echo "</strong>
              </div>

              ";
        // line 173
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "wrappingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            // line 174
            echo "                <div class=\"col-sm text-center\">
                  <p class=\"text-muted mb-0\"><strong>";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wrapping", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong></p>
                  <strong id=\"orderWrappingTotal\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "wrappingPriceFormatted", []), "html", null, true);
            echo "</strong>
                </div>
              ";
        }
        // line 179
        echo "
              <div id=\"order-shipping-total-container\" class=\"col-sm text-center";
        // line 180
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingPriceRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " d-none";
        }
        echo "\">
                <p class=\"text-muted mb-0\"><strong>";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</strong></p>
                <div class=\"shipping-price\">
                  <strong id=\"orderShippingTotal\">";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingPriceFormatted", []), "html", null, true);
        echo "</strong>
                  <div class=\"cancel-product-element shipping-refund-amount";
        // line 184
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
                    <div class=\"input-group\">
                      ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "shipping_amount", []), 'widget');
        echo "
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? $this->getContext($context, "orderCurrency")), "symbol", []), "html", null, true);
        echo "</div>
                      </div>
                    </div>
                    <p class=\"text-center\">(max ";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
        echo " tax included)</p>
                  </div>
                </div>
              </div>

              ";
        // line 196
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxIncluded", [])) {
            // line 197
            echo "                <div class=\"col-sm text-center\">
                  <p class=\"text-muted mb-0\"><strong>";
            // line 198
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taxes", [], "Admin.Global"), "html", null, true);
            echo "</strong></p>
                  <strong id=\"orderTaxesTotal\">";
            // line 199
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "taxesAmountFormatted", []), "html", null, true);
            echo "</strong>
                </div>
              ";
        }
        // line 202
        echo "
              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong></p>
                <span class=\"badge rounded badge-dark font-size-100\" id=\"orderTotal\">";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "</span>
              </div>

            </div>
          </div>
        </div>

        <div class=\"col-md-12\">
          <p class=\"mb-0 mt-1 text-center text-muted\">
            <small>
              ";
        // line 215
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("For this customer group, prices are displayed as: [1]%tax_method%[/1]", ["%tax_method%" => $this->getAttribute(        // line 216
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "taxMethod", []), "[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Orderscustomers.Notification");
        // line 219
        echo ".

              ";
        // line 221
        if ( !$this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ORDER_RETURN")) {
            // line 222
            echo "                <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns are disabled", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</strong>
              ";
        }
        // line 224
        echo "            </small>
          </p>
          <div class=\"cancel-product-element refund-checkboxes-container\">
            <div class=\"cancel-product-element form-group restock-products\">
              ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "restock", []), 'widget');
        echo "
            </div>
            <div class=\"cancel-product-element form-group refund-credit-slip\">
              ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "credit_slip", []), 'widget');
        echo "
            </div>
            <div class=\"cancel-product-element form-group refund-voucher\">
              ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "voucher", []), 'widget');
        echo "
            </div>
            <div class=\"cancel-product-element shipping-refund";
        // line 236
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
              <div class=\"form-group\">
                ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "shipping", []), 'widget');
        echo "
                <small class=\"shipping-refund-amount\">(";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "shippingRefundableAmountFormatted", []), "html", null, true);
        echo ")</small>
              </div>
            </div>
            <div class=\"cancel-product-element form-group voucher-refund-type";
        // line 242
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "discountsAmountRaw", []), "lowerOrEqualThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
            echo " hidden";
        }
        echo "\">
              ";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This order has been partially paid by voucher. Choose the amount you want to refund:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
              ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "voucher_refund_type", []), 'widget');
        echo "
              <div class=\"voucher-refund-type-negative-error\">
                ";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error. You cannot refund a negative amount.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"cancel-product-element form-submit text-right\">
          ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "cancel", []), 'widget');
        echo "
          ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), "save", []), 'widget');
        echo "
        </div>
      </div>
    </div>
    ";
        // line 257
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["cancelProductForm"] ?? $this->getContext($context, "cancelProductForm")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 257,  548 => 253,  544 => 252,  535 => 246,  530 => 244,  526 => 243,  520 => 242,  514 => 239,  510 => 238,  503 => 236,  498 => 234,  492 => 231,  486 => 228,  480 => 224,  474 => 222,  472 => 221,  468 => 219,  466 => 216,  465 => 215,  452 => 205,  448 => 204,  444 => 202,  438 => 199,  434 => 198,  431 => 197,  429 => 196,  421 => 191,  415 => 188,  410 => 186,  403 => 184,  399 => 183,  394 => 181,  388 => 180,  385 => 179,  379 => 176,  375 => 175,  372 => 174,  370 => 173,  364 => 170,  360 => 169,  354 => 168,  348 => 165,  344 => 164,  336 => 158,  334 => 156,  333 => 155,  332 => 154,  325 => 150,  321 => 148,  315 => 145,  311 => 143,  309 => 142,  294 => 131,  277 => 129,  273 => 128,  261 => 121,  254 => 120,  252 => 119,  247 => 116,  232 => 114,  228 => 113,  222 => 110,  214 => 104,  211 => 103,  208 => 102,  206 => 101,  198 => 96,  195 => 95,  189 => 92,  186 => 91,  183 => 90,  177 => 87,  174 => 86,  172 => 85,  167 => 83,  163 => 82,  157 => 79,  151 => 78,  146 => 76,  140 => 75,  135 => 73,  129 => 72,  124 => 70,  118 => 67,  114 => 66,  107 => 62,  100 => 58,  95 => 57,  93 => 54,  92 => 53,  91 => 52,  90 => 51,  89 => 50,  88 => 48,  75 => 40,  69 => 36,  62 => 34,  59 => 33,  56 => 32,  53 => 31,  50 => 30,  47 => 29,  43 => 28,  41 => 27,  39 => 26,  36 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% set isColumnLocationDisplayed = false %}
{% set isColumnRefundedDisplayed = false %}
{% for product in orderForViewing.products.products|slice(0, paginationNum) %}
  {% if product.location is not empty %}
    {% set isColumnLocationDisplayed = true %}
  {% endif %}
  {% if product.quantityRefunded > 0 %}
    {% set isColumnRefundedDisplayed = true %}
  {% endif %}
{% endfor %}

<div class=\"card\" id=\"orderProductsPanel\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Products'|trans({}, 'Admin.Global') }} (<span id=\"orderProductsPanelCount\">{{ orderForViewing.products.products|length }}</span>)
    </h3>
  </div>

  <div class=\"card-body\">
    <div class=\"spinner-order-products-container\" id=\"orderProductsLoading\">
      <div class=\"spinner spinner-primary\"></div>
    </div>
    {% set formOptions = {
      'attr': {
        'data-order-id': orderForViewing.id,
        'data-is-delivered': orderForViewing.isDelivered,
        'data-is-tax-included': orderForViewing.isTaxIncluded,
        'data-discounts-amount': orderForViewing.prices.discountsAmountRaw,
        'data-price-specification': priceSpecification|json_encode
      }
    } %}
    {{ form_start(cancelProductForm, formOptions) }}
    <table class=\"table\" id=\"orderProductsTable\" data-currency-precision=\"{{ orderCurrency.precision }}\">
      <thead>
      <tr>
        <th>
          <p>{{ 'Product'|trans({}, 'Admin.Global') }}</p>
        </th>
        <th></th>
        <th>
          <p class=\"mb-0\">{{ 'Price per unit'|trans({}, 'Admin.Advparameters.Feature') }}</p>
          <small class=\"text-muted\">{{ orderForViewing.taxMethod }}</small>
        </th>
        <th>
          <p>{{ 'Quantity'|trans({}, 'Admin.Global') }}</p>
        </th>
        <th class=\"cellProductLocation{% if not isColumnLocationDisplayed %} d-none{% endif %}\">
          <p>{{ 'Stock location'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        </th>
        <th class=\"cellProductRefunded{% if not isColumnRefundedDisplayed %} d-none{% endif %}\">
          <p>{{ 'Refunded'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        </th>
        <th {% if not isAvailableQuantityDisplayed %}class=\"d-none\"{% endif %}>
          <p>{{ 'Available'|trans({}, 'Admin.Global') }}</p>
        </th>
        <th>
          <p class=\"mb-0\">{{ 'Total'|trans({}, 'Admin.Global') }}</p>
          <small class=\"text-muted\">{{ orderForViewing.taxMethod }}</small>
        </th>
        {% if orderForViewing.hasInvoice() %}
          <th>
            <p>{{ 'Invoice'|trans({}, 'Admin.Global') }}</p>
          </th>
        {% endif %}
        {% if not orderForViewing.delivered %}
          <th class=\"text-right product_actions d-print-none\">
            <p>{{ 'Actions'|trans({}, 'Admin.Global') }}</p>
          </th>
        {% endif %}
        <th class=\"text-center cancel-product-element\">
          <p>{{ 'Partial refund'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        </th>
      </tr>
      </thead>
      <tbody>
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/product_list.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig' %}
      </tbody>
    </table>

    <div class=\"row mb-3\">
      <div class=\"col-md-6 text-left d-print-none order-product-pagination\">
        <div class=\"form-group row\">
          <label for=\"paginator_select_page_limit\" class=\"col-form-label ml-3\">{{ \"Items per page:\"|trans({}, 'Admin.Catalog.Feature') }}</label>
          <div class=\"col\">
            <select id=\"orderProductsTablePaginationNumberSelector\" class=\"pagination-link custom-select\">
              {% for numPageOption in paginationNumOptions %}
                <option value=\"{{ numPageOption }}\"{% if numPageOption == paginationNum %} selected{% endif %}>{{ numPageOption }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        {% set numPages = max(orderForViewing.products.products|length / paginationNum, 1)|round(0, 'ceil') %}
        <nav aria-label=\"Products Navigation\"{% if orderForViewing.products.products|length <= paginationNum %} class=\"d-none\"{% endif %} id=\"orderProductsNavPagination\">
          <ul class=\"pagination\" id=\"orderProductsTablePagination\" data-num-per-page=\"{{ paginationNum }}\" data-num-pages=\"{{ numPages }}\">
            <li class=\"page-item disabled\" id=\"orderProductsTablePaginationPrev\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
              </a>
            </li>
            {% for numPage in 1..numPages %}
              <li class=\"page-item{% if numPage==1 %} active{% endif %}\"><span class=\"page-link\" data-order-id=\"{{ orderForViewing.id }}\" data-page=\"{{ numPage }}\">{{ numPage }}</span></li>
            {% endfor %}
            <li class=\"page-item d-none\"><span class=\"page-link\" data-order-id=\"{{ orderForViewing.id }}\" data-page=\"\"></span></li>
            <li class=\"page-item\" id=\"orderProductsTablePaginationNext\">
              <a class=\"page-link\" href=\"javascript:void(0);\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class=\"col-md-6 text-right discount-action\">
        {% if not orderForViewing.delivered %}
          <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn mr-3\" id=\"addProductBtn\">
            <i class=\"material-icons\">add_circle_outline</i>
            {{ 'Add a product'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </button>
        {% endif %}
        <button type=\"button\" class=\"btn btn-outline-secondary js-product-action-btn\" data-toggle=\"modal\" data-target=\"#addOrderDiscountModal\">
          <i class=\"material-icons\">confirmation_number</i>
          {{ 'Add a discount'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </button>
      </div>

      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig' with {
        'discounts': orderForViewing.discounts.discounts,
        'orderId': orderForViewing.id
      } %}

      <div class=\"col-md-12\">
        <div class=\"col-md-12\">
          <div class=\"info-block\">
            <div class=\"row\">
              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Products'|trans({}, 'Admin.Global') }}</strong></p>
                <strong id=\"orderProductsTotal\">{{ orderForViewing.prices.productsPriceFormatted }}</strong>
              </div>

              <div id=\"order-discounts-total-container\" class=\"col-sm text-center{% if not orderForViewing.prices.discountsAmountRaw.greaterThan((number(0))) %} d-none{% endif %}\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Discounts'|trans({}, 'Admin.Global') }}</strong></p>
                <strong id=\"orderDiscountsTotal\">-{{ orderForViewing.prices.discountsAmountFormatted }}</strong>
              </div>

              {% if orderForViewing.prices.wrappingPriceRaw.greaterThan(number(0)) %}
                <div class=\"col-sm text-center\">
                  <p class=\"text-muted mb-0\"><strong>{{ 'Wrapping'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong></p>
                  <strong id=\"orderWrappingTotal\">{{ orderForViewing.prices.wrappingPriceFormatted }}</strong>
                </div>
              {% endif %}

              <div id=\"order-shipping-total-container\" class=\"col-sm text-center{% if not orderForViewing.prices.shippingPriceRaw.greaterThan((number(0))) %} d-none{% endif %}\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Shipping'|trans({}, 'Admin.Catalog.Feature') }}</strong></p>
                <div class=\"shipping-price\">
                  <strong id=\"orderShippingTotal\">{{ orderForViewing.prices.shippingPriceFormatted }}</strong>
                  <div class=\"cancel-product-element shipping-refund-amount{% if orderForViewing.prices.shippingRefundableAmountRaw.lowerOrEqualThan(number(0)) %} hidden{% endif %}\">
                    <div class=\"input-group\">
                      {{ form_widget(cancelProductForm.shipping_amount) }}
                      <div class=\"input-group-append\">
                        <div class=\"input-group-text\">{{ orderCurrency.symbol }}</div>
                      </div>
                    </div>
                    <p class=\"text-center\">(max {{ orderForViewing.prices.shippingRefundableAmountFormatted }} tax included)</p>
                  </div>
                </div>
              </div>

              {% if not orderForViewing.taxIncluded %}
                <div class=\"col-sm text-center\">
                  <p class=\"text-muted mb-0\"><strong>{{ 'Taxes'|trans({}, 'Admin.Global') }}</strong></p>
                  <strong id=\"orderTaxesTotal\">{{ orderForViewing.prices.taxesAmountFormatted }}</strong>
                </div>
              {% endif %}

              <div class=\"col-sm text-center\">
                <p class=\"text-muted mb-0\"><strong>{{ 'Total'|trans({}, 'Admin.Global') }}</strong></p>
                <span class=\"badge rounded badge-dark font-size-100\" id=\"orderTotal\">{{ orderForViewing.prices.totalAmountFormatted }}</span>
              </div>

            </div>
          </div>
        </div>

        <div class=\"col-md-12\">
          <p class=\"mb-0 mt-1 text-center text-muted\">
            <small>
              {{ 'For this customer group, prices are displayed as: [1]%tax_method%[/1]'|trans({
                '%tax_method%': orderForViewing.taxMethod,
                '[1]': '<strong>',
                '[/1]': '</strong>'
              }, 'Admin.Orderscustomers.Notification')|raw }}.

              {% if not configuration('PS_ORDER_RETURN') %}
                <strong>{{ 'Merchandise returns are disabled'|trans({}, 'Admin.Orderscustomers.Notification') }}</strong>
              {% endif %}
            </small>
          </p>
          <div class=\"cancel-product-element refund-checkboxes-container\">
            <div class=\"cancel-product-element form-group restock-products\">
              {{ form_widget(cancelProductForm.restock) }}
            </div>
            <div class=\"cancel-product-element form-group refund-credit-slip\">
              {{ form_widget(cancelProductForm.credit_slip) }}
            </div>
            <div class=\"cancel-product-element form-group refund-voucher\">
              {{ form_widget(cancelProductForm.voucher) }}
            </div>
            <div class=\"cancel-product-element shipping-refund{% if orderForViewing.prices.shippingRefundableAmountRaw.lowerOrEqualThan(number(0)) %} hidden{% endif %}\">
              <div class=\"form-group\">
                {{ form_widget(cancelProductForm.shipping) }}
                <small class=\"shipping-refund-amount\">({{ orderForViewing.prices.shippingRefundableAmountFormatted }})</small>
              </div>
            </div>
            <div class=\"cancel-product-element form-group voucher-refund-type{% if orderForViewing.prices.discountsAmountRaw.lowerOrEqualThan(number(0)) %} hidden{% endif %}\">
              {{ 'This order has been partially paid by voucher. Choose the amount you want to refund:'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {{ form_widget(cancelProductForm.voucher_refund_type) }}
              <div class=\"voucher-refund-type-negative-error\">
                {{ 'Error. You cannot refund a negative amount.'|trans({}, 'Admin.Orderscustomers.Notification') }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"cancel-product-element form-submit text-right\">
          {{ form_widget(cancelProductForm.cancel) }}
          {{ form_widget(cancelProductForm.save) }}
        </div>
      </div>
    </div>
    {{ form_end(cancelProductForm) }}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/products.html.twig");
    }
}
