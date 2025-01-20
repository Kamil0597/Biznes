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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig */
class __TwigTemplate_e739e8db28a5b2b1d092e15d47e58ebc50daf1d1e3a45569d5aa62532091e7d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig"));

        // line 25
        echo "
<div class=\"modal fade\" id=\"addOrderDiscountModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
      ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_add_cart_rule", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
        echo "
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">
              ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add new cart rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
            </h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\" for=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "name", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                    ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
                  </label>

                  ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "name", []), 'widget');
        echo "
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\" for=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "type", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", [], "Admin.Global"), "html", null, true);
        echo "
                  </label>

                  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "type", []), 'widget');
        echo "
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-group mb-0\">
                  <label class=\"form-control-label\" for=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "value", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                    ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "
                  </label>

                  <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\" id=\"add_order_cart_rule_value_unit\" data-currency-symbol=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["orderCurrency"] ?? $this->getContext($context, "orderCurrency")), "symbol", []), "html", null, true);
        echo "\">%</div>
                    </div>
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "value", []), 'widget');
        echo "
                  </div>
                  <small class=\"text-muted js-cart-rule-value-help d-none\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This value must include taxes.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
                  </small>
                </div>
              </div>
            </div>

            <div class=\"";
        // line 80
        if ( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [])) {
            echo "d-none";
        }
        echo "\">
              <div class=\"row\">
                <div class=\"col\">
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "invoice_id", []), "vars", []), "id", []), "html", null, true);
        echo "\">
                      ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "
                    </label>

                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), "invoice_id", []), 'widget', ["attr" => ["disabled" =>  !$this->getAttribute(        // line 89
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "hasInvoice", [])]]);
        // line 90
        echo "
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
              ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"add_order_cart_rule_submit\">
              ";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
      ";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderCartRuleForm"] ?? $this->getContext($context, "addOrderCartRuleForm")), 'form_end');
        echo "
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 105,  173 => 101,  167 => 98,  157 => 90,  155 => 89,  154 => 88,  148 => 85,  144 => 84,  135 => 80,  126 => 74,  120 => 71,  115 => 69,  107 => 64,  103 => 63,  95 => 58,  89 => 55,  85 => 54,  74 => 46,  68 => 43,  64 => 42,  53 => 34,  48 => 32,  41 => 28,  36 => 25,);
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

<div class=\"modal fade\" id=\"addOrderDiscountModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
      {{ form_start(addOrderCartRuleForm, {'action': path('admin_orders_add_cart_rule', {'orderId': orderForViewing.id})}) }}
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\">
              {{ 'Add new cart rule'|trans({}, 'Admin.Catalog.Feature') }}
            </h5>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">
            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\" for=\"{{ addOrderCartRuleForm.name.vars.id }}\">
                    {{ 'Name'|trans({}, 'Admin.Global') }}
                  </label>

                  {{ form_widget(addOrderCartRuleForm.name) }}
                </div>
              </div>
            </div>

            <div class=\"row\">
              <div class=\"col\">
                <div class=\"form-group\">
                  <label class=\"form-control-label\" for=\"{{ addOrderCartRuleForm.type.vars.id }}\">
                    {{ 'Type'|trans({}, 'Admin.Global') }}
                  </label>

                  {{ form_widget(addOrderCartRuleForm.type) }}
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-group mb-0\">
                  <label class=\"form-control-label\" for=\"{{ addOrderCartRuleForm.value.vars.id }}\">
                    {{ 'Value'|trans({}, 'Admin.Global') }}
                  </label>

                  <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                      <div class=\"input-group-text\" id=\"add_order_cart_rule_value_unit\" data-currency-symbol=\"{{ orderCurrency.symbol }}\">%</div>
                    </div>
                    {{ form_widget(addOrderCartRuleForm.value) }}
                  </div>
                  <small class=\"text-muted js-cart-rule-value-help d-none\">
                    {{ 'This value must include taxes.'|trans({}, 'Admin.Orderscustomers.Notification') }}
                  </small>
                </div>
              </div>
            </div>

            <div class=\"{% if not orderForViewing.hasInvoice %}d-none{% endif %}\">
              <div class=\"row\">
                <div class=\"col\">
                  <div class=\"form-group\">
                    <label class=\"form-control-label\" for=\"{{ addOrderCartRuleForm.invoice_id.vars.id }}\">
                      {{ 'Invoice'|trans({}, 'Admin.Global') }}
                    </label>

                    {{ form_widget(addOrderCartRuleForm.invoice_id, {'attr': {
                      'disabled': not orderForViewing.hasInvoice
                    }}) }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
              {{ 'Cancel'|trans({}, 'Admin.Actions') }}
            </button>
            <button type=\"submit\" class=\"btn btn-primary\" id=\"add_order_cart_rule_submit\">
              {{ 'Add'|trans({}, 'Admin.Actions') }}
            </button>
          </div>
        </div>
      {{ form_end(addOrderCartRuleForm) }}
    </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/add_order_discount_modal.html.twig");
    }
}
