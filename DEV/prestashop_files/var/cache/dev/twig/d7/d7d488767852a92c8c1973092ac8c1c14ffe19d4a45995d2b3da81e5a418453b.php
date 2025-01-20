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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig */
class __TwigTemplate_a0c95a938e91c09db8ad9039289e9dbae433f4e9d3cf235f0945e117069e00bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig"));

        // line 25
        echo "
<tr id=\"addProductTableRow\" class=\"add-product d-none\" data-is-order-tax-included=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isTaxIncluded", []), "html", null, true);
        echo "\">
  <td colspan=\"2\" class=\"pr-2\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "product_id", []), 'row');
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "tax_rate", []), 'row');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "search", []), 'label');
        echo "
    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "search", []), 'widget');
        echo "
    <div class=\"dropdown\">
      <div class=\"dropdown-menu\"></div>
    </div>
    <div class=\"input-group mt-2 d-none\" id=\"addProductCombinations\">
      <div class=\"input-group-prepend\">
        <div class=\"input-group-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Combinations", [], "Admin.Global"), "html", null, true);
        echo "</div>
      </div>
      <select id=\"addProductCombinationId\" class=\"custom-select\"></select>
    </div>
  </td>
  <td class=\"pr-2\">
   <div class=\"row add-product-inputs\">
     <div class=\"col-sm-6\">
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "price_tax_excluded", []), 'widget');
        echo "
     </div>

     <div class=\"col-sm-6\">
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "price_tax_included", []), 'widget');
        echo "
     </div>
   </div>
  </td>
  <td class=\"pr-2 add-product-quantity\">
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "quantity", []), 'row', ["type" => "number"]);
        echo "
  </td>
  <td id=\"addProductLocation\" class=\"cellProductLocation\"></td>
  <td id=\"addProductRefunded\" class=\"cellProductRefunded\"></td>
  <td id=\"addProductAvailable\"";
        // line 58
        if ( !($context["isAvailableQuantityDisplayed"] ?? $this->getContext($context, "isAvailableQuantityDisplayed"))) {
            echo " class=\"d-none\"";
        }
        echo "></td>
  <td id=\"addProductTotalPrice\"></td>
  ";
        // line 60
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [], "method")) {
            // line 61
            echo "    <td class=\"addProductInvoice pr-2\">
      ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "invoice", []), 'row', ["attr" => ["data-modal-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create a new invoice", [], "Admin.Orderscustomers.Feature"), "data-modal-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Create", [], "Admin.Actions"), "data-modal-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to create a new invoice?", [], "Admin.Orderscustomers.Notification"), "data-modal-edit-price-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the price", [], "Admin.Orderscustomers.Feature"), "data-modal-edit-price-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "Admin.Actions"), "data-modal-edit-price-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-edit-price-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to edit this product price? It will be applied to all invoices of this order.", [], "Admin.Orderscustomers.Notification")]]);
            // line 73
            echo "
    </td>
  ";
        }
        // line 76
        echo "  <td class=\"text-right add-product-buttons\">
    <div class=\"btn-group\">
      ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "cancel", []), 'row');
        echo "
      ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "add", []), 'row');
        echo "
    </div>
  </td>
</tr>
<tr id=\"addProductNewInvoiceInfo\" class=\"d-none\">
  <td colspan=\"12\">
    <div>
      <h4>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New invoice information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h4>
      <p><b>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
        echo " :</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "carrierName", []), "html", null, true);
        echo "</p>
      ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addProductRowForm"] ?? $this->getContext($context, "addProductRowForm")), "free_shipping", []), 'row');
        echo "
    </div>
  </td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 88,  139 => 87,  135 => 86,  125 => 79,  121 => 78,  117 => 76,  112 => 73,  110 => 62,  107 => 61,  105 => 60,  98 => 58,  91 => 54,  83 => 49,  76 => 45,  65 => 37,  56 => 31,  52 => 30,  48 => 29,  44 => 28,  39 => 26,  36 => 25,);
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

<tr id=\"addProductTableRow\" class=\"add-product d-none\" data-is-order-tax-included=\"{{ orderForViewing.isTaxIncluded }}\">
  <td colspan=\"2\" class=\"pr-2\">
    {{ form_row(addProductRowForm.product_id) }}
    {{ form_row(addProductRowForm.tax_rate) }}
    {{ form_label(addProductRowForm.search) }}
    {{ form_widget(addProductRowForm.search) }}
    <div class=\"dropdown\">
      <div class=\"dropdown-menu\"></div>
    </div>
    <div class=\"input-group mt-2 d-none\" id=\"addProductCombinations\">
      <div class=\"input-group-prepend\">
        <div class=\"input-group-text\">{{ 'Combinations'|trans({}, 'Admin.Global') }}</div>
      </div>
      <select id=\"addProductCombinationId\" class=\"custom-select\"></select>
    </div>
  </td>
  <td class=\"pr-2\">
   <div class=\"row add-product-inputs\">
     <div class=\"col-sm-6\">
      {{ form_widget(addProductRowForm.price_tax_excluded) }}
     </div>

     <div class=\"col-sm-6\">
      {{ form_widget(addProductRowForm.price_tax_included) }}
     </div>
   </div>
  </td>
  <td class=\"pr-2 add-product-quantity\">
    {{ form_row(addProductRowForm.quantity, {'type':'number'}) }}
  </td>
  <td id=\"addProductLocation\" class=\"cellProductLocation\"></td>
  <td id=\"addProductRefunded\" class=\"cellProductRefunded\"></td>
  <td id=\"addProductAvailable\"{% if not isAvailableQuantityDisplayed %} class=\"d-none\"{% endif %}></td>
  <td id=\"addProductTotalPrice\"></td>
  {% if orderForViewing.hasInvoice() %}
    <td class=\"addProductInvoice pr-2\">
      {{ form_row(addProductRowForm.invoice, {
        'attr': {
          'data-modal-title': 'Create a new invoice'|trans({}, 'Admin.Orderscustomers.Feature'),
          'data-modal-apply': 'Create'|trans({}, 'Admin.Actions'),
          'data-modal-cancel': 'Cancel'|trans({}, 'Admin.Actions'),
          'data-modal-body': 'Are you sure you want to create a new invoice?'|trans({}, 'Admin.Orderscustomers.Notification'),
          'data-modal-edit-price-title': 'Edit the price'|trans({}, 'Admin.Orderscustomers.Feature'),
          'data-modal-edit-price-apply': 'Update'|trans({}, 'Admin.Actions'),
          'data-modal-edit-price-cancel': 'Cancel'|trans({}, 'Admin.Actions'),
          'data-modal-edit-price-body': 'Are you sure you want to edit this product price? It will be applied to all invoices of this order.'|trans({}, 'Admin.Orderscustomers.Notification'),
        }})
      }}
    </td>
  {% endif %}
  <td class=\"text-right add-product-buttons\">
    <div class=\"btn-group\">
      {{ form_row(addProductRowForm.cancel) }}
      {{ form_row(addProductRowForm.add) }}
    </div>
  </td>
</tr>
<tr id=\"addProductNewInvoiceInfo\" class=\"d-none\">
  <td colspan=\"12\">
    <div>
      <h4>{{ 'New invoice information'|trans({}, 'Admin.Orderscustomers.Feature') }}</h4>
      <p><b>{{ 'Carrier'|trans({}, 'Admin.Shipping.Feature') }} :</b> {{ orderForViewing.carrierName }}</p>
      {{ form_row(addProductRowForm.free_shipping) }}
    </div>
  </td>
</tr>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/add_product_row.html.twig");
    }
}
