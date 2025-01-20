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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig */
class __TwigTemplate_3ae791af66bbbd50851f2dcd6b84123eb2dfaaaf01168a1fb65af79d5812cb50 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "virtual", [])) {
            // line 27
            echo "
    ";
            // line 28
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "giftMessage", [])) {
                // line 29
                echo "      <div class=\"row col-lg-12\">
        <label>
          ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gift message:", [], "Admin.Global"), "html", null, true);
                echo "
        </label>
        <div id=\"gift-message\" class=\"col-lg-9\">
           ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "giftMessage", []), "html", null, true);
                echo "
        </div>
      </div>
    ";
            }
            // line 38
            echo "
    <table class=\"table\">
    <thead>
      <tr>
        <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
        <th>&nbsp;</th>
        <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</th>
        <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Weight", [], "Admin.Global"), "html", null, true);
            echo "</th>
        <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping cost", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</th>
        <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
            echo "</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "carriers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["carrier"]) {
                // line 53
                echo "        <tr>
          <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute($context["carrier"], "date", [])), "html", null, true);
                echo "</td>
          <td>&nbsp;</td>
          <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "name", []), "html", null, true);
                echo "</td>
          <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "weight", []), "html", null, true);
                echo "</td>
          <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "price", []), "html", null, true);
                echo "</td>
          <td>
            ";
                // line 60
                if ($this->getAttribute($context["carrier"], "trackingNumber", [])) {
                    // line 61
                    echo "              ";
                    if ($this->getAttribute($context["carrier"], "trackingUrl", [])) {
                        // line 62
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingUrl", []), "html", null, true);
                        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingNumber", []), "html", null, true);
                        echo "</a>
              ";
                    } else {
                        // line 64
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingNumber", []), "html", null, true);
                        echo "
              ";
                    }
                    // line 66
                    echo "            ";
                }
                // line 67
                echo "          </td>
          <td class=\"text-right\">
            ";
                // line 69
                if ($this->getAttribute($context["carrier"], "canEdit", [])) {
                    // line 70
                    echo "              <a href=\"#\"
                 class=\"js-update-shipping-btn d-print-none\"
                 data-toggle=\"modal\"
                 data-target=\"#updateOrderShippingModal\"
                 data-order-carrier-id=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "orderCarrierId", []), "html", null, true);
                    echo "\"
                 data-order-tracking-number=\"";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["carrier"], "trackingNumber", []), "html", null, true);
                    echo "\"
              >
                ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
              </a>
            ";
                }
                // line 80
                echo "          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carrier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "    </tbody>
  </table>

  ";
            // line 86
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "carrierModuleInfo", [])) {
                // line 87
                echo "    ";
                echo $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shipping", []), "carrierModuleInfo", []);
                echo "
  ";
            }
        } else {
            // line 90
            echo "  <p class=\"text-center mb-0\">
    ";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping does not apply to virtual orders", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
  </p>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 91,  190 => 90,  183 => 87,  181 => 86,  176 => 83,  168 => 80,  162 => 77,  157 => 75,  153 => 74,  147 => 70,  145 => 69,  141 => 67,  138 => 66,  132 => 64,  124 => 62,  121 => 61,  119 => 60,  114 => 58,  110 => 57,  106 => 56,  101 => 54,  98 => 53,  94 => 52,  86 => 47,  82 => 46,  78 => 45,  74 => 44,  69 => 42,  63 => 38,  56 => 34,  50 => 31,  46 => 29,  44 => 28,  41 => 27,  39 => 26,  36 => 25,);
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

    {% if orderForViewing.shipping.giftMessage %}
      <div class=\"row col-lg-12\">
        <label>
          {{ 'Gift message:'|trans({}, 'Admin.Global') }}
        </label>
        <div id=\"gift-message\" class=\"col-lg-9\">
           {{ orderForViewing.shipping.giftMessage }}
        </div>
      </div>
    {% endif %}

    <table class=\"table\">
    <thead>
      <tr>
        <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
        <th>&nbsp;</th>
        <th>{{ 'Carrier'|trans({}, 'Admin.Shipping.Feature') }}</th>
        <th>{{ 'Weight'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Shipping cost'|trans({}, 'Admin.Shipping.Feature') }}</th>
        <th>{{ 'Tracking number'|trans({}, 'Admin.Shipping.Feature') }}</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      {% for carrier in orderForViewing.shipping.carriers %}
        <tr>
          <td>{{ carrier.date|date_format_lite }}</td>
          <td>&nbsp;</td>
          <td>{{ carrier.name }}</td>
          <td>{{ carrier.weight }}</td>
          <td>{{ carrier.price }}</td>
          <td>
            {% if carrier.trackingNumber %}
              {% if carrier.trackingUrl %}
                <a href=\"{{ carrier.trackingUrl }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">{{ carrier.trackingNumber }}</a>
              {% else %}
                {{ carrier.trackingNumber }}
              {% endif %}
            {% endif %}
          </td>
          <td class=\"text-right\">
            {% if carrier.canEdit %}
              <a href=\"#\"
                 class=\"js-update-shipping-btn d-print-none\"
                 data-toggle=\"modal\"
                 data-target=\"#updateOrderShippingModal\"
                 data-order-carrier-id=\"{{ carrier.orderCarrierId }}\"
                 data-order-tracking-number=\"{{ carrier.trackingNumber }}\"
              >
                {{ 'Edit'|trans({}, 'Admin.Actions') }}
              </a>
            {% endif %}
          </td>
        </tr>
      {% endfor %}
    </tbody>
  </table>

  {% if orderForViewing.shipping.carrierModuleInfo %}
    {{ orderForViewing.shipping.carrierModuleInfo|raw }}
  {% endif %}
{% else %}
  <p class=\"text-center mb-0\">
    {{ 'Shipping does not apply to virtual orders'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </p>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/shipping.html.twig");
    }
}
