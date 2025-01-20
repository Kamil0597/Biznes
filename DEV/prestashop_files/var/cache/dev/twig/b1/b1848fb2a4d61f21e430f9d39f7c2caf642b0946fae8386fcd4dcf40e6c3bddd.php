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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig */
class __TwigTemplate_2adb2d1f91bc700d82ef0dbfe98b12810575b85f63fc3f55ff826bd666e16a34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "virtual", [])) {
            // line 27
            echo "  ";
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "returns", []), "orderReturns", []))) {
                // line 28
                echo "    <table class=\"table\">
      <thead>
      <tr>
        <th>";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
                echo "</th>
        <th>";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
                echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "returns", []), "orderReturns", []));
                foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                    // line 39
                    echo "        <tr>
          <td>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["return"], "date", [])), "html", null, true);
                    echo "</td>
          <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "type", []), "html", null, true);
                    echo "</td>
          <td>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "stateName", []), "html", null, true);
                    echo "</td>
          <td class=\"text-right\">
            ";
                    // line 44
                    if (($this->getAttribute($context["return"], "trackingNumber", []) && $this->getAttribute($context["return"], "trackingUrl", []))) {
                        // line 45
                        echo "              <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "trackingUrl", []), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "trackingNumber", []), "html", null, true);
                        echo "</a>
            ";
                    } elseif ($this->getAttribute(                    // line 46
$context["return"], "trackingNumber", [])) {
                        // line 47
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["return"], "trackingNumber", []), "html", null, true);
                        echo "
            ";
                    }
                    // line 49
                    echo "          </td>
        </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "      </tbody>
    </table>
  ";
            } else {
                // line 55
                echo "    <p class=\"text-center mb-0\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No merchandise returned yet", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
  ";
            }
            // line 57
            echo "
  ";
            // line 58
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "carrierModuleInfo", [])) {
                // line 59
                echo "    ";
                echo $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "carrierModuleInfo", []);
                echo "
  ";
            }
        } else {
            // line 62
            echo "  <p class=\"text-center mb-0\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Merchandise returns are not applicable for virtual orders", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 62,  129 => 59,  127 => 58,  124 => 57,  118 => 55,  113 => 52,  105 => 49,  99 => 47,  97 => 46,  90 => 45,  88 => 44,  83 => 42,  79 => 41,  75 => 40,  72 => 39,  68 => 38,  61 => 34,  57 => 33,  53 => 32,  49 => 31,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

{% if not orderForViewing.virtual %}
  {% if orderForViewing.returns.orderReturns is not empty %}
    <table class=\"table\">
      <thead>
      <tr>
        <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Type'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Carrier'|trans({}, 'Admin.Shipping.Feature') }}</th>
        <th>{{ 'Tracking number'|trans({}, 'Admin.Shipping.Feature') }}</th>
      </tr>
      </thead>
      <tbody>
      {% for return in orderForViewing.returns.orderReturns %}
        <tr>
          <td>{{ return.date|date_format_full }}</td>
          <td>{{ return.type }}</td>
          <td>{{ return.stateName }}</td>
          <td class=\"text-right\">
            {% if return.trackingNumber and return.trackingUrl %}
              <a href=\"{{ return.trackingUrl }}\">{{ return.trackingNumber }}</a>
            {% elseif return.trackingNumber %}
              {{ return.trackingNumber }}
            {% endif %}
          </td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  {% else %}
    <p class=\"text-center mb-0\">{{ 'No merchandise returned yet'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
  {% endif %}

  {% if orderForViewing.shipping.carrierModuleInfo %}
    {{ orderForViewing.shipping.carrierModuleInfo|raw }}
  {% endif %}
{% else %}
  <p class=\"text-center mb-0\">{{ 'Merchandise returns are not applicable for virtual orders'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig");
    }
}
