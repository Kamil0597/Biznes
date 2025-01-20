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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig */
class __TwigTemplate_9297cffbdc0876fc91e20de51850914d7465f50c12894634a109cdb698d4a607 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig"));

        // line 25
        echo "
<div class=\"modal fade\" id=\"updateOrderShippingModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_shipping", ["orderId" => $this->getAttribute(        // line 29
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
        // line 30
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit shipping details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">
          ";
        // line 39
        if ( !$this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ORDER_RECALCULATE_SHIPPING")) {
            // line 40
            echo "            <div class=\"alert alert-info\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please note that carrier change will not recalculate your shipping costs, if you want to change this please visit Shop Parameters > Order Settings", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
              </p>
            </div>
          ";
        }
        // line 46
        echo "
          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), "tracking_number", []), "vars", []), "id", []), "html", null, true);
        echo "\">
              ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
        echo "
            </label>

            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), "tracking_number", []), 'widget');
        echo "
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), "new_carrier_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
              ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Global"), "html", null, true);
        echo "
            </label>

            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), "new_carrier_id", []), 'widget');
        echo "
          </div>

          <div class=\"d-none\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), 'rest');
        echo "
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderShippingForm"] ?? $this->getContext($context, "updateOrderShippingForm")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 76,  126 => 72,  120 => 69,  112 => 64,  105 => 60,  99 => 57,  95 => 56,  88 => 52,  82 => 49,  78 => 48,  74 => 46,  67 => 42,  63 => 40,  61 => 39,  53 => 34,  49 => 33,  44 => 30,  42 => 29,  41 => 28,  36 => 25,);
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

<div class=\"modal fade\" id=\"updateOrderShippingModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    {{ form_start(updateOrderShippingForm, {
      'action': path('admin_orders_update_shipping', {'orderId': orderForViewing.id})
    }) }}
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">{{ 'Edit shipping details'|trans({}, 'Admin.Orderscustomers.Feature') }}</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">
          {% if not configuration('PS_ORDER_RECALCULATE_SHIPPING') %}
            <div class=\"alert alert-info\" role=\"alert\">
              <p class=\"alert-text\">
                {{ 'Please note that carrier change will not recalculate your shipping costs, if you want to change this please visit Shop Parameters > Order Settings'|trans({}, 'Admin.Orderscustomers.Notification') }}
              </p>
            </div>
          {% endif %}

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"{{ updateOrderShippingForm.tracking_number.vars.id }}\">
              {{ 'Tracking number'|trans({}, 'Admin.Shipping.Feature') }}
            </label>

            {{ form_widget(updateOrderShippingForm.tracking_number) }}
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"{{ updateOrderShippingForm.new_carrier_id.vars.id }}\">
              {{ 'Carrier'|trans({}, 'Admin.Global') }}
            </label>

            {{ form_widget(updateOrderShippingForm.new_carrier_id) }}
          </div>

          <div class=\"d-none\">
            {{ form_rest(updateOrderShippingForm) }}
          </div>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            {{ 'Cancel'|trans({}, 'Admin.Actions') }}
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            {{ 'Update'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    {{ form_end(updateOrderShippingForm) }}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig");
    }
}
