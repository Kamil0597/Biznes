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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig */
class __TwigTemplate_81885f0eb4973c65f2c7e749d17e25828a0fc285045a567587d536102d309e51 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig"));

        // line 25
        echo "
<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment", [], "Admin.Global"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "payments", [])), "html", null, true);
        echo ")
    </h3>
  </div>

  <div class=\"card-body\">
    ";
        // line 34
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", 34)->display(twig_array_merge($context, ["payments" => $this->getAttribute(        // line 35
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "linkedOrders" => $this->getAttribute(        // line 36
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "linkedOrders", [])]));
        // line 38
        echo "
    <table class=\"table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-payment\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Payment method", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-transaction\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Transaction ID", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
          <th class=\"table-head-amount\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th class=\"table-head-invoice\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "payments", []), "payments", []));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 52
            echo "        <tr>
          <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($context["payment"], "date", [])), "html", null, true);
            echo "</td>
          <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "paymentMethod", []), "html", null, true);
            echo "</td>
          <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "transactionId", []), "html", null, true);
            echo "</td>
          <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "amount", []), "html", null, true);
            echo "</td>
          <td>";
            // line 57
            if ($this->getAttribute($context["payment"], "invoiceNumber", [])) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "invoiceNumber", []), "html", null, true);
            }
            echo "</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Details", [], "Admin.Global"), "html", null, true);
            echo "
            </button>
          </td>
        </tr>
        <tr class=\"d-none\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 68
            if ($this->getAttribute($context["payment"], "cardNumber", [])) {
                // line 69
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardNumber", []), "html", null, true);
                echo "
              ";
            } else {
                // line 71
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 73
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Card type", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 76
            if ($this->getAttribute($context["payment"], "cardBrand", [])) {
                // line 77
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardBrand", []), "html", null, true);
                echo "
              ";
            } else {
                // line 79
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 81
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expiration date", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 84
            if ($this->getAttribute($context["payment"], "cardExpiration", [])) {
                // line 85
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardExpiration", []), "html", null, true);
                echo "
              ";
            } else {
                // line 87
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 89
            echo "            </p>
            <p class=\"mb-0\">
              <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cardholder name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>&nbsp;
              ";
            // line 92
            if ($this->getAttribute($context["payment"], "cardHolder", [])) {
                // line 93
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["payment"], "cardHolder", []), "html", null, true);
                echo "
              ";
            } else {
                // line 95
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "
              ";
            }
            // line 97
            echo "            </p>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "      <tr class=\"d-print-none\">
        ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_add_payment", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
        echo "
          <td>
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "date", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "payment_method", []), 'widget');
        echo "
          </td>
          <td>
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "transaction_id", []), 'widget');
        echo "
          </td>
          <td>
            <div class=\"input-group\">
              ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "amount", []), 'widget');
        echo "
              ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "id_currency", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <div ";
        // line 119
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "id_invoice", []), "vars", []), "choices", []))) {
            echo "class=\"d-none\"";
        }
        echo ">
              ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), "id_invoice", []), 'widget');
        echo "
            </div>
          </td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "</button>
          </td>
        ";
        // line 126
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addOrderPaymentForm"] ?? $this->getContext($context, "addOrderPaymentForm")), 'form_end');
        echo "
      </tr>
      </tbody>
    </table>

    ";
        // line 131
        if (( !$this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "valid", []) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), "new_currency_id", []), "vars", []), "choices", [])))) {
            // line 132
            echo "      ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_change_currency", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])]);
            echo "
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change currency", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), "new_currency_id", []), 'widget');
            echo "
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                ";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change", [], "Admin.Actions"), "html", null, true);
            echo "
              </button>
            </div>

            <div class=\"d-none\">
              ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), 'rest');
            echo "
            </div>

            <small class=\"text-muted\">
              ";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do not forget to update your exchange rate before making this change.", [], "Admin.Orderscustomers.Help"), "html", null, true);
            echo "
            </small>
          </div>
        </div>
      ";
            // line 152
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["changeOrderCurrencyForm"] ?? $this->getContext($context, "changeOrderCurrencyForm")), 'form_end');
            echo "
    ";
        }
        // line 154
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 154,  325 => 152,  318 => 148,  311 => 144,  303 => 139,  298 => 137,  292 => 134,  286 => 132,  284 => 131,  276 => 126,  271 => 124,  264 => 120,  258 => 119,  251 => 115,  247 => 114,  240 => 110,  234 => 107,  228 => 104,  223 => 102,  220 => 101,  211 => 97,  205 => 95,  199 => 93,  197 => 92,  193 => 91,  189 => 89,  183 => 87,  177 => 85,  175 => 84,  171 => 83,  167 => 81,  161 => 79,  155 => 77,  153 => 76,  149 => 75,  145 => 73,  139 => 71,  133 => 69,  131 => 68,  127 => 67,  117 => 60,  109 => 57,  105 => 56,  101 => 55,  97 => 54,  93 => 53,  90 => 52,  86 => 51,  78 => 46,  74 => 45,  70 => 44,  66 => 43,  62 => 42,  56 => 38,  54 => 36,  53 => 35,  52 => 34,  42 => 29,  36 => 25,);
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

<div class=\"card mt-2\" id=\"view_order_payments_block\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Payment'|trans({}, 'Admin.Global') }} ({{ orderForViewing.payments.payments|length }})
    </h3>
  </div>

  <div class=\"card-body\">
    {% include '@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments_alert.html.twig' with {
        'payments': orderForViewing.payments,
        'linkedOrders': orderForViewing.linkedOrders
    } %}

    <table class=\"table\">
      <thead>
        <tr>
          <th class=\"table-head-date\">{{ 'Date'|trans({}, 'Admin.Global') }}</th>
          <th class=\"table-head-payment\">{{ 'Payment method'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th class=\"table-head-transaction\">{{ 'Transaction ID'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th class=\"table-head-amount\">{{ 'Amount'|trans({}, 'Admin.Global') }}</th>
          <th class=\"table-head-invoice\">{{ 'Invoice'|trans({}, 'Admin.Global') }}</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      {% for payment in orderForViewing.payments.payments %}
        <tr>
          <td>{{ payment.date|date_format_full }}</td>
          <td>{{ payment.paymentMethod }}</td>
          <td>{{ payment.transactionId }}</td>
          <td>{{ payment.amount }}</td>
          <td>{% if payment.invoiceNumber %}{{ payment.invoiceNumber }}{% endif %}</td>
          <td class=\"text-right\">
            <button class=\"btn btn-sm btn-outline-secondary js-payment-details-btn\">
              {{ 'Details'|trans({}, 'Admin.Global') }}
            </button>
          </td>
        </tr>
        <tr class=\"d-none\">
          <td colspan=\"6\">
            <p class=\"mb-0\">
              <strong>{{ 'Card number'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
              {% if payment.cardNumber %}
                {{ payment.cardNumber }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
            <p class=\"mb-0\">
              <strong>{{ 'Card type'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>&nbsp;
              {% if payment.cardBrand %}
                {{ payment.cardBrand }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
            <p class=\"mb-0\">
              <strong>{{ 'Expiration date'|trans({}, 'Admin.Catalog.Feature') }}</strong>&nbsp;
              {% if payment.cardExpiration %}
                {{ payment.cardExpiration }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
            <p class=\"mb-0\">
              <strong>{{ 'Cardholder name'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>&nbsp;
              {% if payment.cardHolder %}
                {{ payment.cardHolder }}
              {% else %}
                {{ 'Not defined'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </p>
          </td>
        </tr>
      {% endfor %}
      <tr class=\"d-print-none\">
        {{ form_start(addOrderPaymentForm, {'action': path('admin_orders_add_payment', {'orderId': orderForViewing.id})}) }}
          <td>
            {{ form_widget(addOrderPaymentForm.date) }}
          </td>
          <td>
            {{ form_widget(addOrderPaymentForm.payment_method) }}
          </td>
          <td>
            {{ form_widget(addOrderPaymentForm.transaction_id) }}
          </td>
          <td>
            <div class=\"input-group\">
              {{ form_widget(addOrderPaymentForm.amount) }}
              {{ form_widget(addOrderPaymentForm.id_currency) }}
            </div>
          </td>
          <td>
            <div {% if addOrderPaymentForm.id_invoice.vars.choices is empty %}class=\"d-none\"{% endif %}>
              {{ form_widget(addOrderPaymentForm.id_invoice) }}
            </div>
          </td>
          <td>
            <button type=\"submit\" class=\"btn btn-primary btn-sm\">{{ 'Add'|trans({}, 'Admin.Actions') }}</button>
          </td>
        {{ form_end(addOrderPaymentForm) }}
      </tr>
      </tbody>
    </table>

    {% if not orderForViewing.valid and changeOrderCurrencyForm.new_currency_id.vars.choices|length %}
      {{ form_start(changeOrderCurrencyForm, {'action': path('admin_orders_change_currency', {'orderId': orderForViewing.id})}) }}
        <div class=\"form-group row d-print-none\">
          <label class=\"form-control-label\">{{ 'Change currency'|trans({}, 'Admin.Orderscustomers.Feature') }}</label>
          <div class=\"col-sm\">
            <div class=\"input-group\">
              {{ form_widget(changeOrderCurrencyForm.new_currency_id) }}
              <button class=\"btn btn-outline-secondary btn-sm ml-2\">
                {{ 'Change'|trans({}, 'Admin.Actions') }}
              </button>
            </div>

            <div class=\"d-none\">
              {{ form_rest(changeOrderCurrencyForm) }}
            </div>

            <small class=\"text-muted\">
              {{ 'Do not forget to update your exchange rate before making this change.'|trans({}, 'Admin.Orderscustomers.Help') }}
            </small>
          </div>
        </div>
      {{ form_end(changeOrderCurrencyForm) }}
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/payments.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/payments.html.twig");
    }
}
