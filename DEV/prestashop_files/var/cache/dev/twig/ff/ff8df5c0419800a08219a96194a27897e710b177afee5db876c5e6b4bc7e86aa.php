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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig */
class __TwigTemplate_d44893601ee64793c155ba863c16ee21166992b78c4cd804addda26bb12217be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig"));

        // line 25
        echo "<div class=\"col-md-12\">
  <table class=\"table discountList";
        // line 26
        if (twig_test_empty(($context["discounts"] ?? $this->getContext($context, "discounts")))) {
            echo " d-none";
        }
        echo "\">
    <thead>
    <tr>
      <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
      <th class=\"text-right d-print-none\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? $this->getContext($context, "discounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
            // line 36
            echo "      <tr>
        <td class=\"discountList-name\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "name", []), "html", null, true);
            echo "</td>
        <td>
          ";
            // line 39
            if ($this->getAttribute($this->getAttribute($context["discount"], "amountRaw", []), "greaterThan", [0 => $this->env->getExtension('PrestaShopBundle\Twig\Extension\NumberExtension')->createNumber(0)], "method")) {
                echo "-";
            }
            // line 40
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["discount"], "amountFormatted", []), "html", null, true);
            echo "
        </td>
        <td class=\"text-right d-print-none\">
          <a class=\"delete-cart-rule btn btn-text\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_remove_cart_rule", ["orderId" => ($context["orderId"] ?? $this->getContext($context, "orderId")), "orderCartRuleId" => $this->getAttribute($context["discount"], "orderCartRuleId", [])]), "html", null, true);
            echo "\">
            <i class=\"material-icons\">delete</i>
          </a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </tbody>
  </table>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 49,  85 => 43,  78 => 40,  74 => 39,  69 => 37,  66 => 36,  62 => 35,  55 => 31,  51 => 30,  47 => 29,  39 => 26,  36 => 25,);
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
<div class=\"col-md-12\">
  <table class=\"table discountList{% if discounts is empty %} d-none{% endif %}\">
    <thead>
    <tr>
      <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
      <th>{{ 'Value'|trans({}, 'Admin.Global') }}</th>
      <th class=\"text-right d-print-none\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
    </tr>
    </thead>
    <tbody>
    {% for discount in discounts %}
      <tr>
        <td class=\"discountList-name\">{{ discount.name }}</td>
        <td>
          {% if discount.amountRaw.greaterThan(number(0)) %}-{% endif %}
          {{ discount.amountFormatted }}
        </td>
        <td class=\"text-right d-print-none\">
          <a class=\"delete-cart-rule btn btn-text\" href=\"{{ path('admin_orders_remove_cart_rule', {'orderId': orderId, 'orderCartRuleId': discount.orderCartRuleId}) }}\">
            <i class=\"material-icons\">delete</i>
          </a>
        </td>
      </tr>
    {% endfor %}
    </tbody>
  </table>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/discount_list.html.twig");
    }
}
