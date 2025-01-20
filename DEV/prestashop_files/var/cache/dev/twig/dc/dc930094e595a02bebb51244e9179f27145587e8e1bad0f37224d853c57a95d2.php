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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig */
class __TwigTemplate_91b7dee1b63bafef0e45b2cf55c3994088781dd3f0165c4729373d7fa9426a30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig"));

        // line 25
        if (($this->getAttribute(($context["payments"] ?? $this->getContext($context, "payments")), "amountToPay", []) && $this->getAttribute(($context["payments"] ?? $this->getContext($context, "payments")), "paidAmount", []))) {
            // line 26
            echo "    <div class=\"alert alert-danger mb-0 js-view-order-payments-alert\" role=\"alert\">
        <p class=\"alert-text\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Warning", [], "Admin.Global"), "html", null, true);
            echo "
            <strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute(($context["payments"] ?? $this->getContext($context, "payments")), "paidAmount", []), "html", null, true);
            echo "</strong>
            ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paid instead of", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
            <strong>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["payments"] ?? $this->getContext($context, "payments")), "amountToPay", []), "html", null, true);
            echo "</strong>

            ";
            // line 33
            if ( !twig_test_empty($this->getAttribute(($context["linkedOrders"] ?? $this->getContext($context, "linkedOrders")), "linkedOrders", []))) {
                // line 34
                echo "                ";
                if ((twig_length_filter($this->env, $this->getAttribute(($context["linkedOrders"] ?? $this->getContext($context, "linkedOrders")), "linkedOrders", [])) == 1)) {
                    // line 35
                    echo "                    <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns order:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 37
                    echo "                    <br/>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This warning also concerns the following orders:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                    echo "
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["linkedOrders"] ?? $this->getContext($context, "linkedOrders")), "linkedOrders", []));
                foreach ($context['_seq'] as $context["_key"] => $context["linkedOrder"]) {
                    // line 41
                    echo "                    <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute($context["linkedOrder"], "orderId", [])]), "html", null, true);
                    echo "\">
                        #";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["linkedOrder"], "orderId", []), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linkedOrder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            ";
            }
            // line 46
            echo "        </p>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 46,  97 => 45,  88 => 42,  83 => 41,  79 => 40,  76 => 39,  70 => 37,  64 => 35,  61 => 34,  59 => 33,  54 => 31,  50 => 30,  46 => 29,  42 => 28,  38 => 26,  36 => 25,);
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
{% if payments.amountToPay and payments.paidAmount %}
    <div class=\"alert alert-danger mb-0 js-view-order-payments-alert\" role=\"alert\">
        <p class=\"alert-text\">
            {{ 'Warning'|trans({}, 'Admin.Global') }}
            <strong>{{ payments.paidAmount }}</strong>
            {{ 'paid instead of'|trans({}, 'Admin.Orderscustomers.Notification') }}
            <strong>{{ payments.amountToPay }}</strong>

            {% if linkedOrders.linkedOrders is not empty %}
                {% if linkedOrders.linkedOrders|length == 1 %}
                    <br/>{{ 'This warning also concerns order:'|trans({}, 'Admin.Orderscustomers.Notification') }}
                {% else %}
                    <br/>{{ 'This warning also concerns the following orders:'|trans({}, 'Admin.Orderscustomers.Notification') }}
                {% endif %}

                {% for linkedOrder in linkedOrders.linkedOrders %}
                    <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"{{ path('admin_orders_view', {'orderId': linkedOrder.orderId}) }}\">
                        #{{ linkedOrder.orderId }}
                    </a>
                {% endfor %}
            {% endif %}
        </p>
    </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig");
    }
}
