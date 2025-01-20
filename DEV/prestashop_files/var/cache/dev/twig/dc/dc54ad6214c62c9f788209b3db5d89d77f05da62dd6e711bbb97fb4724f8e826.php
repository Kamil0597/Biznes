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

/* @PrestaShop/Admin/Sell/Order/Order/view.html.twig */
class __TwigTemplate_b39dab9f6dc6eed4a0b229646ee5a5e5bc4a196f681c249613b1bc98082aca27 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 31
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig"));

        // line 26
        $context["use_regular_h1_structure"] = false;
        // line 27
        ob_start();
        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 28)->display($context);
        $context["layoutTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 123
        $context["js_translatable"] = twig_array_merge(["The product was successfully added." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The product was successfully added.", [], "Admin.Notifications.Success"), "The product was successfully removed." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The product was successfully removed.", [], "Admin.Notifications.Success"), "[1] products were successfully added." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1] products were successfully added.", [], "Admin.Notifications.Success"), "[1] products were successfully removed." => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1] products were successfully removed.", [], "Admin.Notifications.Success")],         // line 128
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 31
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 31);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/orders.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "  <div id=\"order-view-page\"
       data-order-title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order", [], "Admin.Global"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "reference", []), "html", null, true);
        echo "\">
    <div class=\"row d-print-none\">
      ";
        // line 41
        $context["displayAdminOrderTopHookContent"] = $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderTop", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        // line 42
        echo "
      ";
        // line 43
        if ((($context["displayAdminOrderTopHookContent"] ?? $this->getContext($context, "displayAdminOrderTopHookContent")) != "")) {
            // line 44
            echo "        <div class=\"col-md-12\">
          ";
            // line 45
            echo ($context["displayAdminOrderTopHookContent"] ?? $this->getContext($context, "displayAdminOrderTopHookContent"));
            echo "
        </div>
      ";
        }
        // line 48
        echo "      <div class=\"order-actions col-md-12\">
        ";
        // line 49
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 49)->display($context);
        // line 50
        echo "      </div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        ";
        // line 55
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 55)->display($context);
        // line 56
        echo "      </div>
    </div>

    <div class=\"row d-none mb-4\">
      <div class=\"col-12\" id=\"orderProductsModificationPosition\"></div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        ";
        // line 65
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_title.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 65)->display($context);
        // line 66
        echo "      </div>
    </div>

    <div class=\"product-row row\">
      <div class=\"col-md-4 left-column\">
        ";
        // line 71
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 71)->display($context);
        // line 72
        echo "
        ";
        // line 73
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderSide", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        echo "
        ";
        // line 74
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 74)->display($context);
        // line 75
        echo "
        ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderSideBottom", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        echo "
      </div>

      <div class=\"col-md-8 d-print-block right-column\">
        <div id=\"orderProductsOriginalPosition\">
          ";
        // line 81
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 81)->display($context);
        // line 82
        echo "        </div>
        ";
        // line 83
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 83)->display($context);
        // line 84
        echo "
        ";
        // line 85
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderMain", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        echo "
        ";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 86)->display($context);
        // line 87
        echo "
        ";
        // line 88
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrderMainBottom", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        echo "
      </div>
    </div>

    ";
        // line 92
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "sources", []), "sources", []))) {
            // line 93
            echo "      <div class=\"product-row row\">
        <div class=\"col-md-12 left-column\">
          ";
            // line 95
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 95)->display($context);
            // line 96
            echo "        </div>
      </div>
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", []), "linkedOrders", []))) {
            // line 101
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 101)->display($context);
            // line 102
            echo "    ";
        }
        // line 103
        echo "
    ";
        // line 104
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayAdminOrder", ["id_order" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]);
        echo "

    ";
        // line 106
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 106)->display($context);
        // line 107
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 107)->display($context);
        // line 108
        echo "    ";
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0))) {
            // line 109
            echo "      ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 109)->display($context);
            // line 110
            echo "    ";
        }
        // line 111
        echo "
    ";
        // line 112
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_all_messages_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 112)->display($context);
        // line 113
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", 113)->display($context);
        // line 114
        echo "  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/order_view.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 120,  280 => 118,  271 => 117,  260 => 114,  257 => 113,  255 => 112,  252 => 111,  249 => 110,  246 => 109,  243 => 108,  240 => 107,  238 => 106,  233 => 104,  230 => 103,  227 => 102,  224 => 101,  222 => 100,  219 => 99,  214 => 96,  212 => 95,  208 => 93,  206 => 92,  199 => 88,  196 => 87,  194 => 86,  190 => 85,  187 => 84,  185 => 83,  182 => 82,  180 => 81,  172 => 76,  169 => 75,  167 => 74,  163 => 73,  160 => 72,  158 => 71,  151 => 66,  149 => 65,  138 => 56,  136 => 55,  129 => 50,  127 => 49,  124 => 48,  118 => 45,  115 => 44,  113 => 43,  110 => 42,  108 => 41,  99 => 39,  96 => 38,  87 => 37,  74 => 34,  65 => 33,  54 => 31,  52 => 128,  51 => 123,  47 => 28,  45 => 27,  43 => 26,  31 => 31,);
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

{% set use_regular_h1_structure = false %}
{% set layoutTitle %}
  {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig' %}
{% endset %}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/orders.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block content %}
  <div id=\"order-view-page\"
       data-order-title=\"{{ 'Order'|trans({}, 'Admin.Global') }} #{{ orderForViewing.id }} {{ orderForViewing.reference }}\">
    <div class=\"row d-print-none\">
      {% set displayAdminOrderTopHookContent = renderhook('displayAdminOrderTop', {'id_order': orderForViewing.id}) %}

      {% if displayAdminOrderTopHookContent != '' %}
        <div class=\"col-md-12\">
          {{ displayAdminOrderTopHookContent|raw }}
        </div>
      {% endif %}
      <div class=\"order-actions col-md-12\">
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/order_actions.html.twig' %}
      </div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_order_statistics.html.twig' %}
      </div>
    </div>

    <div class=\"row d-none mb-4\">
      <div class=\"col-12\" id=\"orderProductsModificationPosition\"></div>
    </div>

    <div class=\"row d-none d-print-block mb-4\">
      <div class=\"col-md-12\">
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/print_title.html.twig' %}
      </div>
    </div>

    <div class=\"product-row row\">
      <div class=\"col-md-4 left-column\">
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig' %}

        {{ renderhook('displayAdminOrderSide', {'id_order': orderForViewing.id}) }}
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig' %}

        {{ renderhook('displayAdminOrderSideBottom', {'id_order': orderForViewing.id}) }}
      </div>

      <div class=\"col-md-8 d-print-block right-column\">
        <div id=\"orderProductsOriginalPosition\">
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/products.html.twig' %}
        </div>
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/details.html.twig' %}

        {{ renderhook('displayAdminOrderMain', {'id_order': orderForViewing.id}) }}
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig' %}

        {{ renderhook('displayAdminOrderMainBottom', {'id_order': orderForViewing.id}) }}
      </div>
    </div>

    {% if orderForViewing.sources.sources is not empty %}
      <div class=\"product-row row\">
        <div class=\"col-md-12 left-column\">
          {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig' %}
        </div>
      </div>
    {% endif %}

    {% if orderForViewing.linkedOrders.linkedOrders is not empty %}
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/linked_orders.html.twig' %}
    {% endif %}

    {{ renderhook('displayAdminOrder', {'id_order': orderForViewing.id}) }}

    {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig' %}
    {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_shipping_modal.html.twig' %}
    {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
      {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig' %}
    {% endif %}

    {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_all_messages_modal.html.twig' %}
    {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig' %}
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/order_view.bundle.js') }}\"></script>
{% endblock %}

{% set js_translatable = {
  \"The product was successfully added.\": 'The product was successfully added.'|trans({}, 'Admin.Notifications.Success'),
  \"The product was successfully removed.\": 'The product was successfully removed.'|trans({}, 'Admin.Notifications.Success'),
  \"[1] products were successfully added.\": '[1] products were successfully added.'|trans({}, 'Admin.Notifications.Success'),
  \"[1] products were successfully removed.\": '[1] products were successfully removed.'|trans({}, 'Admin.Notifications.Success'),
}|merge(js_translatable)
%}
", "@PrestaShop/Admin/Sell/Order/Order/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/view.html.twig");
    }
}
