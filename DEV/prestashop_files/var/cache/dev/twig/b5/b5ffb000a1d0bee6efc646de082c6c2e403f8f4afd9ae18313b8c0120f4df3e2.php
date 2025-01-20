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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig */
class __TwigTemplate_b1657ac1d84f5b44abe796502dfabe31072ebb01caabc1c80b9c1f07cb4893b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig"));

        // line 25
        echo "
  ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusActionBarForm"] ?? $this->getContext($context, "updateOrderStatusActionBarForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_status", ["orderId" => $this->getAttribute(        // line 27
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]), "attr" => ["id" => "update_order_status_action_form"]]);
        // line 31
        echo "

  <div class=\"input-group\">
    ";
        // line 34
        $context["backgroundColor"] = "#ffffff";
        // line 35
        echo "    ";
        $context["isBright"] = true;
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["updateOrderStatusActionBarForm"] ?? $this->getContext($context, "updateOrderStatusActionBarForm")), "new_order_status_id", []), "vars", []), "choices", []));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 37
            echo "      ";
            if (($this->getAttribute($context["choice"], "value", []) == $this->getAttribute($this->getAttribute($this->getAttribute(($context["updateOrderStatusActionBarForm"] ?? $this->getContext($context, "updateOrderStatusActionBarForm")), "new_order_status_id", []), "vars", []), "data", []))) {
                // line 38
                echo "        ";
                $context["backgroundColor"] = $this->getAttribute($this->getAttribute($context["choice"], "attr", []), "data-background-color", [], "array");
                // line 39
                echo "        ";
                $context["isBright"] = $this->getAttribute($this->getAttribute($context["choice"], "attr", []), "data-is-bright", [], "array");
                // line 40
                echo "      ";
            }
            // line 41
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    <div class=\"select-status";
        if (($context["isBright"] ?? $this->getContext($context, "isBright"))) {
            echo " is-bright";
        }
        echo "\" id=\"update_order_status_action_input_wrapper\" style=\"background-color:";
        echo twig_escape_filter($this->env, ($context["backgroundColor"] ?? $this->getContext($context, "backgroundColor")), "html", null, true);
        echo ";\">
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["updateOrderStatusActionBarForm"] ?? $this->getContext($context, "updateOrderStatusActionBarForm")), "new_order_status_id", []), 'widget', ["attr" => ["class" => "select-status-colored"], "id" => "update_order_status_action_input"]);
        // line 48
        echo "
    </div>

    <button class=\"btn btn-action ml-2\"
            id=\"update_order_status_action_btn\"
            disabled
            data-order-status-id=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "history", []), "currentOrderStatusId", []), "html", null, true);
        echo "\"
    >
      ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </button>
  </div>

  <div class=\"d-none\">
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["updateOrderStatusActionBarForm"] ?? $this->getContext($context, "updateOrderStatusActionBarForm")), 'rest');
        echo "
  </div>
  ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusActionBarForm"] ?? $this->getContext($context, "updateOrderStatusActionBarForm")), 'form_end');
        echo "

  ";
        // line 65
        if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "canGenerateInvoice", [])) {
            // line 66
            echo "    <form class=\"order-actions-invoice\">
      <div class=\"input-group\">
        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_invoice_pdf", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]), "html", null, true);
            echo "\"
           class=\"btn btn-action\">
          <i class=\"material-icons\">receipt</i>
          ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View invoice", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </a>
      </div>
    </form>
  ";
        }
        // line 76
        echo "
  <form class=\"order-actions-print\">
    <div class=\"input-group\">
      <button type=\"button\" class=\"btn btn-action js-print-order-view-page\">
        <i class=\"material-icons\" aria-hidden=\"true\">print</i>
        ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Print order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </form>

  ";
        // line 86
        if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "canGenerateDeliverySlip", [])) {
            // line 87
            echo "    <form class=\"order-actions-delivery\">
      <div class=\"input-group\">
        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_delivery_slip_pdf", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]), "html", null, true);
            echo "\"
           class=\"btn btn-action\">
          <i class=\"material-icons\">local_shipping</i>
          ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View delivery slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </a>
      </div>
    </form>
  ";
        }
        // line 97
        echo "
  ";
        // line 98
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", 98)->display($context);
        // line 99
        echo "
  ";
        // line 100
        if (($context["merchandiseReturnEnabled"] ?? $this->getContext($context, "merchandiseReturnEnabled"))) {
            // line 101
            echo "    ";
            if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isDelivered", [], "method")) {
                // line 102
                echo "      <button class=\"btn btn-action return-product-display\" type=\"button\"";
                if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isRefundable", [], "method")) {
                    echo " disabled";
                }
                echo ">
        <i class=\"material-icons\">swap_horiz</i>
        ";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Return products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
      </button>
    ";
            } elseif (($this->getAttribute(            // line 106
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasBeenPaid", [], "method") || $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasPayments", [], "method"))) {
                // line 107
                echo "      <button class=\"btn btn-action standard-refund-display\" type=\"button\"";
                if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isRefundable", [], "method")) {
                    echo " disabled";
                }
                echo ">
        <i class=\"material-icons\">swap_horiz</i>
        ";
                // line 109
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Standard refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
      </button>
    ";
            } else {
                // line 112
                echo "      <button class=\"btn btn-action cancel-product-display\" type=\"button\">
        ";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
      </button>
    ";
            }
            // line 116
            echo "  ";
        }
        // line 117
        echo "
  ";
        // line 118
        if (($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasBeenPaid", [], "method") || $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasPayments", [], "method"))) {
            // line 119
            echo "      <button class=\"btn btn-action partial-refund-display\" type=\"button\"";
            if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "isRefundable", [], "method")) {
                echo " disabled";
            }
            echo ">
        <i class=\"material-icons\">swap_horiz</i>
        ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Partial refund", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </button>
  ";
        }
        // line 124
        echo "
  ";
        // line 125
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", 125)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 125,  245 => 124,  239 => 121,  231 => 119,  229 => 118,  226 => 117,  223 => 116,  217 => 113,  214 => 112,  208 => 109,  200 => 107,  198 => 106,  193 => 104,  185 => 102,  182 => 101,  180 => 100,  177 => 99,  175 => 98,  172 => 97,  164 => 92,  158 => 89,  154 => 87,  152 => 86,  144 => 81,  137 => 76,  129 => 71,  123 => 68,  119 => 66,  117 => 65,  112 => 63,  107 => 61,  99 => 56,  94 => 54,  86 => 48,  84 => 43,  75 => 42,  69 => 41,  66 => 40,  63 => 39,  60 => 38,  57 => 37,  52 => 36,  49 => 35,  47 => 34,  42 => 31,  40 => 27,  39 => 26,  36 => 25,);
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

  {{ form_start(updateOrderStatusActionBarForm, {
    'action': path('admin_orders_update_status', {'orderId': orderForViewing.id}),
    'attr': {
      'id': 'update_order_status_action_form'
    }
  }) }}

  <div class=\"input-group\">
    {% set backgroundColor = '#ffffff' %}
    {% set isBright = true %}
    {% for choice in updateOrderStatusActionBarForm.new_order_status_id.vars.choices %}
      {% if choice.value == updateOrderStatusActionBarForm.new_order_status_id.vars.data %}
        {% set backgroundColor = choice.attr['data-background-color'] %}
        {% set isBright = choice.attr['data-is-bright'] %}
      {% endif %}
    {% endfor %}
    <div class=\"select-status{% if isBright %} is-bright{% endif %}\" id=\"update_order_status_action_input_wrapper\" style=\"background-color:{{ backgroundColor }};\">
        {{ form_widget(updateOrderStatusActionBarForm.new_order_status_id, {
          'attr': {
            'class': 'select-status-colored',
          },
          'id': 'update_order_status_action_input',
        }) }}
    </div>

    <button class=\"btn btn-action ml-2\"
            id=\"update_order_status_action_btn\"
            disabled
            data-order-status-id=\"{{ orderForViewing.history.currentOrderStatusId }}\"
    >
      {{ 'Update status'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </button>
  </div>

  <div class=\"d-none\">
    {{ form_rest(updateOrderStatusActionBarForm) }}
  </div>
  {{ form_end(updateOrderStatusActionBarForm) }}

  {% if orderForViewing.documents.canGenerateInvoice %}
    <form class=\"order-actions-invoice\">
      <div class=\"input-group\">
        <a href=\"{{ path('admin_orders_generate_invoice_pdf', {'orderId': orderForViewing.id}) }}\"
           class=\"btn btn-action\">
          <i class=\"material-icons\">receipt</i>
          {{ 'View invoice'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      </div>
    </form>
  {% endif %}

  <form class=\"order-actions-print\">
    <div class=\"input-group\">
      <button type=\"button\" class=\"btn btn-action js-print-order-view-page\">
        <i class=\"material-icons\" aria-hidden=\"true\">print</i>
        {{ 'Print order'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
    </div>
  </form>

  {% if orderForViewing.documents.canGenerateDeliverySlip %}
    <form class=\"order-actions-delivery\">
      <div class=\"input-group\">
        <a href=\"{{ path('admin_orders_generate_delivery_slip_pdf', {'orderId': orderForViewing.id}) }}\"
           class=\"btn btn-action\">
          <i class=\"material-icons\">local_shipping</i>
          {{ 'View delivery slip'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      </div>
    </form>
  {% endif %}

  {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig' %}

  {% if merchandiseReturnEnabled %}
    {% if orderForViewing.isDelivered() %}
      <button class=\"btn btn-action return-product-display\" type=\"button\"{% if not orderForViewing.isRefundable() %} disabled{% endif %}>
        <i class=\"material-icons\">swap_horiz</i>
        {{ 'Return products'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
    {% elseif orderForViewing.hasBeenPaid() or orderForViewing.hasPayments() %}
      <button class=\"btn btn-action standard-refund-display\" type=\"button\"{% if not orderForViewing.isRefundable() %} disabled{% endif %}>
        <i class=\"material-icons\">swap_horiz</i>
        {{ 'Standard refund'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
    {% else %}
      <button class=\"btn btn-action cancel-product-display\" type=\"button\">
        {{ 'Cancel products'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
    {% endif %}
  {% endif %}

  {% if orderForViewing.hasBeenPaid() or orderForViewing.hasPayments() %}
      <button class=\"btn btn-action partial-refund-display\" type=\"button\"{% if not orderForViewing.isRefundable() %} disabled{% endif %}>
        <i class=\"material-icons\">swap_horiz</i>
        {{ 'Partial refund'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </button>
  {% endif %}

  {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_navigation.html.twig' %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig");
    }
}
