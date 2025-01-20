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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig */
class __TwigTemplate_3eef5af9c6c1280c7ec2d05bcd99213ce24d219c71af36a46785f09fdebced33 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'order_message_form_rest' => [$this, 'block_order_message_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $context["messagesToShow"] = 4;
        // line 29
        echo "
<div class=\"card mt-2 d-print-none\">
  <div class=\"card-header\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h3 class=\"card-header-title\">
          ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Messages", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "messages", []), "total", []), "html", null, true);
        echo ")
        </h3>
      </div>
      ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "messages", []), "total", []) > ($context["messagesToShow"] ?? $this->getContext($context, "messagesToShow")))) {
            // line 39
            echo "        <div class=\"col-md-6 text-right\">
          <a
            href=\"#\"
            data-toggle=\"modal\"
            data-target=\"#view_all_messages_modal\"
            class=\"d-print-none js-open-all-messages-btn\"
          >
            ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full conversation", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          </a>
        </div>
      ";
        }
        // line 50
        echo "    </div>
  </div>

  ";
        // line 53
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "messages", []), "messages", []))) {
            // line 54
            echo "    <ul class=\"list-unstyled messages-block\">
      ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "messages", []), "messages", []), 0, ($context["messagesToShow"] ?? $this->getContext($context, "messagesToShow")))));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 56
                echo "        ";
                $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", 56)->display($context);
                // line 57
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </ul>
  ";
        }
        // line 60
        echo "
  <div class=\"card-body\">
    ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_send_message", ["orderId" => $this->getAttribute(        // line 63
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
        // line 64
        echo "

    ";
        // line 66
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), "order_message", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose your order message", [], "Admin.Orderscustomers.Feature"), "label_on_top" => true, "class" => "mb-0"]);
        // line 70
        echo "

    <div class=\"js-order-messages-container d-none\">
      <div class=\"js-message-change-warning\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you want to overwrite your existing message?", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</div>
      ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), "vars", []), "messages", [], "array"));
        foreach ($context['_seq'] as $context["id"] => $context["message"]) {
            // line 75
            echo "        <div data-id=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
          ";
            // line 76
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "    </div>

    <div class=\"form-group row configure\">
      <div class=\"col-sm\">
        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_messages_index");
        echo "\" class=\"configure-link\">
          ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure predefined messages", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>

    ";
        // line 90
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), "is_displayed_to_customer", []), ["material_design" => true]);
        echo "

    ";
        // line 92
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), "message", []), ["attr" => ["cols" => 30, "rows" => 3]], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Message", [], "Admin.Global"), "label_on_top" => true, "class" => "js-text-with-length-counter"]);
        // line 96
        echo "

    ";
        // line 98
        $this->displayBlock('order_message_form_rest', $context, $blocks);
        // line 101
        echo "
    <div class=\"text-right\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Send message", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 98
    public function block_order_message_form_rest($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_message_form_rest"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_message_form_rest"));

        // line 99
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["orderMessageForm"] ?? $this->getContext($context, "orderMessageForm")), 'rest');
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 99,  226 => 98,  211 => 106,  205 => 103,  201 => 101,  199 => 98,  195 => 96,  193 => 92,  188 => 90,  179 => 84,  175 => 83,  169 => 79,  160 => 76,  155 => 75,  151 => 74,  147 => 73,  142 => 70,  140 => 66,  136 => 64,  134 => 63,  133 => 62,  129 => 60,  125 => 58,  111 => 57,  108 => 56,  91 => 55,  88 => 54,  86 => 53,  81 => 50,  74 => 46,  65 => 39,  63 => 38,  55 => 35,  47 => 29,  45 => 28,  42 => 27,  40 => 26,  37 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% set messagesToShow = 4 %}

<div class=\"card mt-2 d-print-none\">
  <div class=\"card-header\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h3 class=\"card-header-title\">
          {{ 'Messages'|trans({}, 'Admin.Global') }} ({{ orderForViewing.messages.total }})
        </h3>
      </div>
      {% if orderForViewing.messages.total > messagesToShow %}
        <div class=\"col-md-6 text-right\">
          <a
            href=\"#\"
            data-toggle=\"modal\"
            data-target=\"#view_all_messages_modal\"
            class=\"d-print-none js-open-all-messages-btn\"
          >
            {{ 'View full conversation'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </a>
        </div>
      {% endif %}
    </div>
  </div>

  {% if orderForViewing.messages.messages is not empty %}
    <ul class=\"list-unstyled messages-block\">
      {% for message in orderForViewing.messages.messages|slice(0, messagesToShow)|reverse %}
        {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig' %}
      {% endfor %}
    </ul>
  {% endif %}

  <div class=\"card-body\">
    {{ form_start(orderMessageForm, {
      'action': path('admin_orders_send_message', { orderId: orderForViewing.id })
    }) }}

    {{ ps.form_group_row(orderMessageForm.order_message, {}, {
      'label': 'Choose your order message'|trans({}, 'Admin.Orderscustomers.Feature'),
      'label_on_top': true,
      'class': 'mb-0'
    }) }}

    <div class=\"js-order-messages-container d-none\">
      <div class=\"js-message-change-warning\">{{ 'Do you want to overwrite your existing message?'|trans({}, 'Admin.Orderscustomers.Notification') }}</div>
      {% for id, message in orderMessageForm.vars['messages'] %}
        <div data-id=\"{{ id }}\">
          {{ message }}
        </div>
      {% endfor %}
    </div>

    <div class=\"form-group row configure\">
      <div class=\"col-sm\">
        <a href=\"{{ path('admin_order_messages_index') }}\" class=\"configure-link\">
          {{ 'Configure predefined messages'|trans({}, 'Admin.Orderscustomers.Feature') }}
          <i class=\"material-icons\">arrow_right_alt</i>
        </a>
      </div>
    </div>

    {{ ps.form_group_row(orderMessageForm.is_displayed_to_customer, {'material_design': true}) }}

    {{ ps.form_group_row(orderMessageForm.message, {'attr': { 'cols':30, 'rows':3 }}, {
      'label': 'Message'|trans({}, 'Admin.Global'),
      'label_on_top': true,
      'class': 'js-text-with-length-counter'
    }) }}

    {% block order_message_form_rest %}
      {{ form_rest(orderMessageForm) }}
    {% endblock %}

    <div class=\"text-right\">
      <button type=\"submit\" class=\"btn btn-primary\">{{ 'Send message'|trans({}, 'Admin.Orderscustomers.Feature') }}</button>
    </div>

    {{ form_end(orderMessageForm) }}
  </div>
</div>

", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/messages.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/messages.html.twig");
    }
}
