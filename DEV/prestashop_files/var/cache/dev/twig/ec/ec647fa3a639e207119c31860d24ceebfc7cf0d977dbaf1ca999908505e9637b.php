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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig */
class __TwigTemplate_f00f25347b373a262a84fd7d1cac2a97563098dc8dcd8aa9c0c352fbfdd78cf1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !(null === ($context["changeOrderAddressForm"] ?? $this->getContext($context, "changeOrderAddressForm")))) {
            // line 27
            echo "  <div class=\"modal fade\" id=\"updateCustomerAddressModal\">
      <div class=\"modal-dialog\" role=\"document\">
        ";
            // line 29
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderAddressForm"] ?? $this->getContext($context, "changeOrderAddressForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_customer_address", ["orderId" => $this->getAttribute(            // line 30
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", [])])]);
            echo "
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
              </h5>

              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
            echo "\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>

            <div class=\"modal-body\">
              <div class=\"form-group m-0\">
                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderAddressForm"] ?? $this->getContext($context, "changeOrderAddressForm")), "new_address_id", []), 'widget');
            echo "
              </div>
            </div>

            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderAddressForm"] ?? $this->getContext($context, "changeOrderAddressForm")), "address_type", []), 'widget');
            echo "

            <div class=\"modal-footer\">
              <button id=\"change-address-cancel-button\" type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
                ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>

              <button id=\"change-address-submit-button\" type=\"submit\" class=\"btn btn-primary\">
                ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>
          </div>
        ";
            // line 60
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderAddressForm"] ?? $this->getContext($context, "changeOrderAddressForm")), 'form_end');
            echo "
      </div>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 60,  90 => 56,  83 => 52,  76 => 48,  69 => 44,  59 => 37,  53 => 34,  46 => 30,  45 => 29,  41 => 27,  39 => 26,  36 => 25,);
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

{% if changeOrderAddressForm is not null %}
  <div class=\"modal fade\" id=\"updateCustomerAddressModal\">
      <div class=\"modal-dialog\" role=\"document\">
        {{ form_start(changeOrderAddressForm,
          {'action': path('admin_orders_change_customer_address', {'orderId': orderForViewing.id, 'customerId': orderForViewing.customer.id})}) }}
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\">
                {{ 'Select another address'|trans({}, 'Admin.Actions') }}
              </h5>

              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>

            <div class=\"modal-body\">
              <div class=\"form-group m-0\">
                {{ form_widget(changeOrderAddressForm.new_address_id) }}
              </div>
            </div>

            {{ form_widget(changeOrderAddressForm.address_type) }}

            <div class=\"modal-footer\">
              <button id=\"change-address-cancel-button\" type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
                {{ 'Cancel'|trans({}, 'Admin.Actions') }}
              </button>

              <button id=\"change-address-submit-button\" type=\"submit\" class=\"btn btn-primary\">
                {{ 'Select'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          </div>
        {{ form_end(changeOrderAddressForm) }}
      </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/update_customer_address_modal.html.twig");
    }
}
