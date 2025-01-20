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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig */
class __TwigTemplate_935505593d95336f5eb0252850543e37534c563a9aed24f65961213cd8420188 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig"));

        // line 25
        echo "
";
        // line 27
        if (($this->getAttribute(($context["backOfficeOrderButtons"] ?? $this->getContext($context, "backOfficeOrderButtons")), "isEmpty", [], "method") != true)) {
            // line 28
            echo "
  ";
            // line 29
            $context["buttons"] = $this->getAttribute(($context["backOfficeOrderButtons"] ?? $this->getContext($context, "backOfficeOrderButtons")), "toArray", [], "method");
            // line 30
            echo "  ";
            if ((twig_length_filter($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons"))) > 2)) {
                // line 31
                echo "
    ";
                // line 32
                $context["firstButton"] = twig_first($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons")));
                // line 33
                echo "    <div class=\"d-inline-block ml-2\">
      <div class=\"input-group\">
        <a class=\"btn ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute(($context["firstButton"] ?? $this->getContext($context, "firstButton")), "class", []), "html", null, true);
                echo "\"
        ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["firstButton"] ?? $this->getContext($context, "firstButton")), "properties", []));
                foreach ($context['_seq'] as $context["propertyName"] => $context["propertyContent"]) {
                    // line 37
                    echo "          ";
                    echo twig_escape_filter($this->env, $context["propertyName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["propertyContent"], "html", null, true);
                    echo "\"
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['propertyName'], $context['propertyContent'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "        >
        ";
                // line 40
                echo $this->getAttribute(($context["firstButton"] ?? $this->getContext($context, "firstButton")), "content", []);
                echo "
        </a>
      </div>
    </div>

    ";
                // line 46
                echo "    ";
                $context["buttons"] = twig_slice($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons")), 1, twig_length_filter($this->env, ($context["buttons"] ?? $this->getContext($context, "buttons"))));
                // line 47
                echo "
    <div class=\"d-inline-block ml-2\">
      <div class=\"input-group\">
        <div class=\"dropdown\">
          <button class=\"btn btn-action dropdown-toggle\" type=\"button\" id=\"dropdownOrderActionBar\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-icons form-error-icon\">more_horiz</i>

            ";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("More actions", [], "Admin.Global"), "html", null, true);
                echo "
          </button>

          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownOrderActionBar\">
            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? $this->getContext($context, "buttons")));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 61
                    echo "              <a class=\"dropdown-item btn ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", []), "html", null, true);
                    echo "\"
              ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button"], "properties", []));
                    foreach ($context['_seq'] as $context["propertyName"] => $context["propertyContent"]) {
                        // line 63
                        echo "                ";
                        echo twig_escape_filter($this->env, $context["propertyName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["propertyContent"], "html", null, true);
                        echo "\"
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['propertyName'], $context['propertyContent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    echo ">
              ";
                    // line 65
                    echo $this->getAttribute($context["button"], "content", []);
                    echo "
              </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "          </div>
        </div>
      </div>
    </div>
  ";
            } else {
                // line 73
                echo "    ";
                // line 74
                echo "
    ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? $this->getContext($context, "buttons")));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 76
                    echo "      <div class=\"d-inline-block ml-2\">
        <div class=\"input-group\">
          <a class=\"btn ";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "class", []), "html", null, true);
                    echo "\"
          ";
                    // line 79
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["button"], "properties", []));
                    foreach ($context['_seq'] as $context["propertyName"] => $context["propertyContent"]) {
                        // line 80
                        echo "            ";
                        echo twig_escape_filter($this->env, $context["propertyName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["propertyContent"], "html", null, true);
                        echo "\"
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['propertyName'], $context['propertyContent'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo "          >
          ";
                    // line 83
                    echo $this->getAttribute($context["button"], "content", []);
                    echo "
          </a>
        </div>
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "  ";
            }
            // line 89
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 89,  198 => 88,  187 => 83,  184 => 82,  173 => 80,  169 => 79,  165 => 78,  161 => 76,  157 => 75,  154 => 74,  152 => 73,  145 => 68,  136 => 65,  133 => 64,  122 => 63,  118 => 62,  113 => 61,  109 => 60,  102 => 56,  91 => 47,  88 => 46,  80 => 40,  77 => 39,  66 => 37,  62 => 36,  58 => 35,  54 => 33,  52 => 32,  49 => 31,  46 => 30,  44 => 29,  41 => 28,  39 => 27,  36 => 25,);
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

{# Rendering of hook actionGetAdminOrderButtons, see ActionsBarButtonsCollection #}
{% if (backOfficeOrderButtons.isEmpty() != true) %}

  {% set buttons = backOfficeOrderButtons.toArray() %}
  {% if buttons|length > 2 %}

    {% set firstButton = buttons|first %}
    <div class=\"d-inline-block ml-2\">
      <div class=\"input-group\">
        <a class=\"btn {{ firstButton.class }}\"
        {% for propertyName, propertyContent in firstButton.properties %}
          {{ propertyName }}=\"{{ propertyContent }}\"
        {% endfor %}
        >
        {{ firstButton.content|raw }}
        </a>
      </div>
    </div>

    {# Display other buttons into a dropdown #}
    {% set buttons = buttons|slice(1, buttons|length) %}

    <div class=\"d-inline-block ml-2\">
      <div class=\"input-group\">
        <div class=\"dropdown\">
          <button class=\"btn btn-action dropdown-toggle\" type=\"button\" id=\"dropdownOrderActionBar\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"material-icons form-error-icon\">more_horiz</i>

            {{ 'More actions'|trans({}, 'Admin.Global') }}
          </button>

          <div class=\"dropdown-menu\" aria-labelledby=\"dropdownOrderActionBar\">
            {% for button in buttons %}
              <a class=\"dropdown-item btn {{ button.class }}\"
              {% for propertyName, propertyContent in button.properties %}
                {{ propertyName }}=\"{{ propertyContent }}\"
              {% endfor %}>
              {{ button.content|raw }}
              </a>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  {% else %}
    {# If only 2 buttons, display them like this #}

    {% for button in buttons %}
      <div class=\"d-inline-block ml-2\">
        <div class=\"input-group\">
          <a class=\"btn {{ button.class }}\"
          {% for propertyName, propertyContent in button.properties %}
            {{ propertyName }}=\"{{ propertyContent }}\"
          {% endfor %}
          >
          {{ button.content|raw }}
          </a>
        </div>
      </div>
    {% endfor %}
  {% endif %}

{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/extra_order_button_actions.html.twig");
    }
}
