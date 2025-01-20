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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig */
class __TwigTemplate_8bbce42630bbef931dce897f701030d0769818ed5fbd938cdeed083b80566314 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig"));

        // line 25
        echo "
<tr id=\"editProductTableRowTemplate\" class=\"d-none editProductRow\">
  <td class=\"cellProductImg\"></td>
  <td class=\"cellProductName\"></td>
  <td class=\"cellProductTaxes pr-5\">
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? $this->getContext($context, "editProductRowForm")), "price_tax_excluded", []), 'row', ["attr" => ["data-modal-edit-price-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the price", [], "Admin.Orderscustomers.Feature"), "data-modal-edit-price-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "data-modal-edit-price-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-edit-price-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to edit this product price? It will be applied to all identical products in this order.", [], "Admin.Orderscustomers.Notification")]]);
        // line 37
        echo "
    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? $this->getContext($context, "editProductRowForm")), "price_tax_included", []), 'row');
        echo "
  </td>
  <td class=\"cellProductQuantity pr-5\">
    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? $this->getContext($context, "editProductRowForm")), "quantity", []), 'row', ["type" => "number"]);
        echo "
  </td>
  <td class=\"editProductLocation cellProductLocation\"></td>
  <td class=\"editProductRefunded cellProductRefunded\"></td>
  <td class=\"editProductAvailable";
        // line 45
        if ( !($context["isAvailableQuantityDisplayed"] ?? $this->getContext($context, "isAvailableQuantityDisplayed"))) {
            echo " d-none";
        }
        echo "\"></td>
  <td class=\"editProductTotalPrice\"></td>
  ";
        // line 47
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [], "method")) {
            // line 48
            echo "    <td class=\"cellProductInvoice\">
      ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? $this->getContext($context, "editProductRowForm")), "invoice", []), 'row', ["attr" => ["data-modal-edit-price-title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit the price", [], "Admin.Orderscustomers.Feature"), "data-modal-edit-price-apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "data-modal-edit-price-cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "data-modal-edit-price-body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to edit this product price? It will be applied to all invoices of this order.", [], "Admin.Orderscustomers.Notification")]]);
            // line 56
            echo "
    </td>
  ";
        }
        // line 59
        echo "  <td class=\"editProductActions text-right\">
    <div class=\"editProductActions-container btn-group\">
      ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? $this->getContext($context, "editProductRowForm")), "cancel", []), 'row');
        echo "
      ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["editProductRowForm"] ?? $this->getContext($context, "editProductRowForm")), "save", []), 'row');
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
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 62,  84 => 61,  80 => 59,  75 => 56,  73 => 49,  70 => 48,  68 => 47,  61 => 45,  54 => 41,  48 => 38,  45 => 37,  43 => 30,  36 => 25,);
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

<tr id=\"editProductTableRowTemplate\" class=\"d-none editProductRow\">
  <td class=\"cellProductImg\"></td>
  <td class=\"cellProductName\"></td>
  <td class=\"cellProductTaxes pr-5\">
    {{ form_row(editProductRowForm.price_tax_excluded, {
      'attr': {
        'data-modal-edit-price-title': 'Edit the price'|trans({}, 'Admin.Orderscustomers.Feature'),
        'data-modal-edit-price-apply': 'Edit'|trans({}, 'Admin.Actions'),
        'data-modal-edit-price-cancel': 'Cancel'|trans({}, 'Admin.Actions'),
        'data-modal-edit-price-body': 'Are you sure you want to edit this product price? It will be applied to all identical products in this order.'|trans({}, 'Admin.Orderscustomers.Notification'),
      }})
    }}
    {{ form_row(editProductRowForm.price_tax_included) }}
  </td>
  <td class=\"cellProductQuantity pr-5\">
    {{ form_row(editProductRowForm.quantity, {'type':'number'}) }}
  </td>
  <td class=\"editProductLocation cellProductLocation\"></td>
  <td class=\"editProductRefunded cellProductRefunded\"></td>
  <td class=\"editProductAvailable{% if not isAvailableQuantityDisplayed %} d-none{% endif %}\"></td>
  <td class=\"editProductTotalPrice\"></td>
  {% if orderForViewing.hasInvoice() %}
    <td class=\"cellProductInvoice\">
      {{ form_row(editProductRowForm.invoice, {
        'attr': {
          'data-modal-edit-price-title': 'Edit the price'|trans({}, 'Admin.Orderscustomers.Feature'),
          'data-modal-edit-price-apply': 'Edit'|trans({}, 'Admin.Actions'),
          'data-modal-edit-price-cancel': 'Cancel'|trans({}, 'Admin.Actions'),
          'data-modal-edit-price-body': 'Are you sure you want to edit this product price? It will be applied to all invoices of this order.'|trans({}, 'Admin.Orderscustomers.Notification'),
        }})
      }}
    </td>
  {% endif %}
  <td class=\"editProductActions text-right\">
    <div class=\"editProductActions-container btn-group\">
      {{ form_row(editProductRowForm.cancel) }}
      {{ form_row(editProductRowForm.save) }}
    </div>
  </td>
</tr>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/edit_product_row.html.twig");
    }
}
