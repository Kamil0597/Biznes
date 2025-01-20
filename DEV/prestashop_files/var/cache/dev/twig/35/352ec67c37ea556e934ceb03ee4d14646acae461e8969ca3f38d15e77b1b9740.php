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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig */
class __TwigTemplate_9b9bcc8d0f954f31056b7faef267d10cfbeb45ba5391135621436a4e2a332fa5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig"));

        // line 25
        echo "
<div class=\"modal fade\" id=\"product-pack-modal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"card-header\">
        <div class=\"row\">
          <div class=\"col\">
            <h3 class=\"card-header-title\">
              ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Products in pack", [], "Admin.Global"), "html", null, true);
        echo "
            </h3>
          </div>
          <div class=\"col\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"material-icons\">
                close
              </i>
            </button>
          </div>
        </div>
      </div>
      <div class=\"modal-body\">
        <table class=\"table\" id=\"product-pack-modal-table\">
          <thead>
          <tr>
            <th colspan=\"3\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available", [], "Admin.Global"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>
          <tr class=\"d-none\" id=\"template-pack-table-row\">
            <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Package item", [], "Admin.Global"), "html", null, true);
        echo "</td>
            <td class=\"cell-product-img\">
              <img alt=\"\"/>
            </td>
            <td class=\"cell-product-name\">
              <a href=\"\">
                <p class=\"mb-0 product-name\"></p>
                <p class=\"mb-0 product-reference\">
                  ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference number:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </p>
                <p class=\"mb-0 product-supplier-reference\">
                  ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Supplier reference:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </p>
              </a>
            </td>
            <td class=\"cell-product-quantity\">
              <span class=\"badge badge-secondary rounded-circle\"></span>
            </td>
            <td class=\"cell-product-available-quantity\"></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 67,  92 => 64,  81 => 56,  73 => 51,  69 => 50,  65 => 49,  46 => 33,  36 => 25,);
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

<div class=\"modal fade\" id=\"product-pack-modal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog modal-lg\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"card-header\">
        <div class=\"row\">
          <div class=\"col\">
            <h3 class=\"card-header-title\">
              {{ 'Products in pack'|trans({}, 'Admin.Global') }}
            </h3>
          </div>
          <div class=\"col\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
              <i class=\"material-icons\">
                close
              </i>
            </button>
          </div>
        </div>
      </div>
      <div class=\"modal-body\">
        <table class=\"table\" id=\"product-pack-modal-table\">
          <thead>
          <tr>
            <th colspan=\"3\">{{ 'Product'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Available'|trans({}, 'Admin.Global') }}</th>
          </tr>
          </thead>
          <tbody>
          <tr class=\"d-none\" id=\"template-pack-table-row\">
            <td>{{ 'Package item'|trans({}, 'Admin.Global') }}</td>
            <td class=\"cell-product-img\">
              <img alt=\"\"/>
            </td>
            <td class=\"cell-product-name\">
              <a href=\"\">
                <p class=\"mb-0 product-name\"></p>
                <p class=\"mb-0 product-reference\">
                  {{ 'Reference number:'|trans({}, 'Admin.Orderscustomers.Feature') }}
                </p>
                <p class=\"mb-0 product-supplier-reference\">
                  {{ 'Supplier reference:'|trans({}, 'Admin.Orderscustomers.Feature') }}
                </p>
              </a>
            </td>
            <td class=\"cell-product-quantity\">
              <span class=\"badge badge-secondary rounded-circle\"></span>
            </td>
            <td class=\"cell-product-available-quantity\"></td>
          </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/view_product_pack_modal.html.twig");
    }
}
