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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig */
class __TwigTemplate_c7014973be30c53306e9c3f1531174351e71ddb77c02f771022d47ea12ee2e14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig"));

        // line 25
        echo "
<table class=\"table\">
  <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "history", []), "statuses", []));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 29
            echo "    <tr>
      <td>
        <span class=\"badge rounded badge-print-light\"
              style=\"background-color: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "color", []), "html", null, true);
            echo "; color: ";
            echo ((call_user_func_array($this->env->getFunction('is_color_bright')->getCallable(), [$this->getAttribute($context["status"], "color", [])])) ? ("black") : ("white"));
            echo ";\"
        >
          ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "name", []), "html", null, true);
            echo "
        </span>
      </td>
      <td class=\"text-right\">
        ";
            // line 38
            if ( !twig_test_empty($this->getAttribute($context["status"], "employeeLastName", []))) {
                // line 39
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["status"], "employeeFirstName", []) . " ") . $this->getAttribute($context["status"], "employeeLastName", [])), "html", null, true);
                echo "
        ";
            }
            // line 41
            echo "      </td>
      <td class=\"text-right\">
        ";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["status"], "createdAt", [])), "html", null, true);
            echo "
      </td>
      <td class=\"text-right\">
        ";
            // line 46
            if ($this->getAttribute($context["status"], "withEmail", [])) {
                // line 47
                echo "          <form method=\"post\" action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_resend_email", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "orderHistoryId" => $this->getAttribute($context["status"], "orderHistoryId", []), "orderStatusId" => $this->getAttribute($context["status"], "orderStatusId", [])]), "html", null, true);
                echo "\">
            <button class=\"btn btn-link pt-0 pb-0\">
              ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Resend email", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
            </button>
          </form>
        ";
            }
            // line 53
            echo "      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </tbody>
</table>

<div class=\"row\">
  <div class=\"col-sm-6 offset-sm-6\">
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusForm"] ?? $this->getContext($context, "updateOrderStatusForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_status", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]), "attr" => ["class" => "card-details-form"]]);
        echo "
      <div class=\"form-group card-details-actions\">
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["updateOrderStatusForm"] ?? $this->getContext($context, "updateOrderStatusForm")), "new_order_status_id", []), 'widget');
        echo "

        <button class=\"btn btn-primary update-status ml-3\">
          ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </button>
      </div>

      <div class=\"d-none\">
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["updateOrderStatusForm"] ?? $this->getContext($context, "updateOrderStatusForm")), 'rest');
        echo "
      </div>
    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["updateOrderStatusForm"] ?? $this->getContext($context, "updateOrderStatusForm")), 'form_end');
        echo "
  </div>
</div>

";
        // line 77
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig", 77)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 77,  136 => 73,  131 => 71,  123 => 66,  117 => 63,  112 => 61,  105 => 56,  97 => 53,  90 => 49,  84 => 47,  82 => 46,  76 => 43,  72 => 41,  66 => 39,  64 => 38,  57 => 34,  50 => 32,  45 => 29,  41 => 28,  36 => 25,);
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

<table class=\"table\">
  <tbody>
    {% for status in orderForViewing.history.statuses %}
    <tr>
      <td>
        <span class=\"badge rounded badge-print-light\"
              style=\"background-color: {{ status.color }}; color: {{ is_color_bright(status.color) ? 'black' : 'white' }};\"
        >
          {{ status.name }}
        </span>
      </td>
      <td class=\"text-right\">
        {% if status.employeeLastName is not empty %}
          {{ status.employeeFirstName ~ ' ' ~ status.employeeLastName }}
        {% endif %}
      </td>
      <td class=\"text-right\">
        {{ status.createdAt|date_format_full }}
      </td>
      <td class=\"text-right\">
        {% if status.withEmail %}
          <form method=\"post\" action=\"{{ path('admin_orders_resend_email', {'orderId': orderForViewing.id, 'orderHistoryId': status.orderHistoryId, 'orderStatusId': status.orderStatusId}) }}\">
            <button class=\"btn btn-link pt-0 pb-0\">
              {{ 'Resend email'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </button>
          </form>
        {% endif %}
      </td>
    </tr>
    {% endfor %}
  </tbody>
</table>

<div class=\"row\">
  <div class=\"col-sm-6 offset-sm-6\">
    {{ form_start(updateOrderStatusForm, {'action': path('admin_orders_update_status',  {'orderId': orderForViewing.id}), 'attr': {'class': 'card-details-form'}, }) }}
      <div class=\"form-group card-details-actions\">
        {{ form_widget(updateOrderStatusForm.new_order_status_id) }}

        <button class=\"btn btn-primary update-status ml-3\">
          {{ 'Update status'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </button>
      </div>

      <div class=\"d-none\">
        {{ form_rest(updateOrderStatusForm) }}
      </div>
    {{ form_end(updateOrderStatusForm) }}
  </div>
</div>

{% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/internal_note.html.twig' %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/history.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/history.html.twig");
    }
}
