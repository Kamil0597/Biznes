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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig */
class __TwigTemplate_e3447910d5e932595700309c16c77de20acbe78d35ee01a4ca236a76206d4407 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig"));

        // line 25
        echo "
<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\">#";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "html", null, true);
        echo "</strong>
    <strong>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "reference", []), "html", null, true);
        echo "</strong>
  </h1>

  <p class=\"lead d-inline\">
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("from", [], "Admin.Global"), "html", null, true);
        echo "

    ";
        // line 35
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0))) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "firstName", []), "html", null, true);
            echo "
      ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "lastName", []), "html", null, true);
            echo "
    ";
        } else {
            // line 39
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "  </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "prices", []), "totalAmountFormatted", []), "html", null, true);
        echo "
  </span>

  <p class=\"lead d-inline\">
    ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "createdAt", [])), "html", null, true);
        echo "
    <span class=\"text-muted\">
      ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("at", [], "Admin.Global"), "html", null, true);
        echo "

      ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "createdAt", []), "H:i:s"), "html", null, true);
        echo "
    </span>
  </p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 52,  92 => 50,  87 => 48,  80 => 44,  75 => 41,  69 => 39,  64 => 37,  59 => 36,  57 => 35,  52 => 33,  45 => 29,  41 => 28,  36 => 25,);
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

<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\">#{{ orderForViewing.id }}</strong>
    <strong>{{ orderForViewing.reference }}</strong>
  </h1>

  <p class=\"lead d-inline\">
    {{ 'from'|trans({}, 'Admin.Global') }}

    {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
      {{ orderForViewing.customer.firstName }}
      {{ orderForViewing.customer.lastName }}
    {% else %}
      {{ 'Deleted customer'|trans({}, 'Admin.Global') }}
    {% endif %}
  </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    {{ orderForViewing.prices.totalAmountFormatted }}
  </span>

  <p class=\"lead d-inline\">
    {{ orderForViewing.createdAt|date_format_lite }}
    <span class=\"text-muted\">
      {{ 'at'|trans({}, 'Admin.Global') }}

      {{ orderForViewing.createdAt|date('H:i:s') }}
    </span>
  </p>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/header.html.twig");
    }
}
