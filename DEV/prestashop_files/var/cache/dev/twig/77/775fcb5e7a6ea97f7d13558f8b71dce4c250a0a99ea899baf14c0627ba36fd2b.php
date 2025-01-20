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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig */
class __TwigTemplate_91da9237fb59595bc857064d8ea7845017f966eb4f9876a9452fa6fefaa5b45d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig"));

        // line 25
        echo "
  ";
        // line 26
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "sources", []), "sources", []))) {
            // line 27
            echo "    <div class=\"card mt-2 d-print-none\">
      <div class=\"card-header\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <i class=\"material-icons\">public</i>
            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sources", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            <span class=\"badge badge-primary rounded\">";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "sources", []), "sources", [])), "html", null, true);
            echo "</span>
          </div>

          <ul id=\"order-sources-list\">
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "sources", []), "sources", []));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 38
                echo "              <li>
                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["source"], "addedAt", [])), "html", null, true);
                echo "
                <br/>
                <b>";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("From", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</b>
                ";
                // line 42
                if (($this->getAttribute($context["source"], "httpReferer", []) != "")) {
                    // line 43
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "httpReferer", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "httpReferer", []), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 45
                    echo "                  -
                ";
                }
                // line 47
                echo "                <br/>
                <b>";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("To", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</b>
                <a href=\"http://";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "requestUri", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["source"], "requestUri", []), 0, 100), "html", null, true);
                echo "</a>
                <br/>
                ";
                // line 51
                if (($this->getAttribute($context["source"], "keywords", []) != "")) {
                    // line 52
                    echo "                  <b>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Keywords", [], "Admin.Global"), "html", null, true);
                    echo "</b>
                  <br/>
                  ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "keywords", []), "html", null, true);
                    echo "
                ";
                }
                // line 56
                echo "                <br/>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "          </ul>
        </div>
      </div>
    </div>
  ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  116 => 56,  111 => 54,  105 => 52,  103 => 51,  96 => 49,  92 => 48,  89 => 47,  85 => 45,  77 => 43,  75 => 42,  71 => 41,  66 => 39,  63 => 38,  59 => 37,  52 => 33,  48 => 32,  41 => 27,  39 => 26,  36 => 25,);
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

  {% if orderForViewing.sources.sources is not empty %}
    <div class=\"card mt-2 d-print-none\">
      <div class=\"card-header\">
        <div class=\"row\">
          <div class=\"col-md-6\">
            <i class=\"material-icons\">public</i>
            {{ 'Sources'|trans({}, 'Admin.Orderscustomers.Feature') }}
            <span class=\"badge badge-primary rounded\">{{ orderForViewing.sources.sources|length }}</span>
          </div>

          <ul id=\"order-sources-list\">
            {% for source in orderForViewing.sources.sources %}
              <li>
                {{ source.addedAt|date_format_full }}
                <br/>
                <b>{{ 'From'|trans({}, 'Admin.Orderscustomers.Feature') }}</b>
                {% if source.httpReferer != '' %}
                  <a href=\"{{ source.httpReferer }}\">{{ source.httpReferer }}</a>
                {% else %}
                  -
                {% endif %}
                <br/>
                <b>{{ 'To'|trans({}, 'Admin.Orderscustomers.Feature') }}</b>
                <a href=\"http://{{ source.requestUri }}\">{{ source.requestUri | slice(0,100) }}</a>
                <br/>
                {% if source.keywords != '' %}
                  <b>{{ 'Keywords'|trans({}, 'Admin.Global') }}</b>
                  <br/>
                  {{ source.keywords }}
                {% endif %}
                <br/>
              </li>
            {% endfor %}
          </ul>
        </div>
      </div>
    </div>
  {% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/sources.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/sources.html.twig");
    }
}
