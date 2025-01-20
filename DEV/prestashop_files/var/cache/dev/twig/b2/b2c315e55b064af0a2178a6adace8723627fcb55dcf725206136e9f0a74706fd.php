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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig */
class __TwigTemplate_3ed4723579f9d121337d2c8582826312a3c2a28848394ecf9086dcd18e322d41 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig"));

        // line 25
        echo "
<table class=\"table mb-3";
        // line 26
        if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "documents", []))) {
            echo " table-empty";
        }
        echo "\">
  <thead>
  <tr>
    <th>
      ";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Document", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </th>
    <th>
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
    <th class=\"text-right d-print-none\">
      ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
    </th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 47
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "documents", []))) {
            // line 48
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "documents", []));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 49
                echo "      <tr>
        <td class=\"documents-table-column-date\">
          ";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatLite($this->getAttribute($context["document"], "createdAt", [])), "html", null, true);
                echo "
        </td>
        <td class=\"documents-table-column-type\">
          ";
                // line 54
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 55
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice", [], "Admin.Global"), "html", null, true);
                    echo "
          ";
                } elseif (($this->getAttribute(                // line 56
$context["document"], "type", []) == "credit_slip")) {
                    // line 57
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Credit slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
          ";
                } else {
                    // line 59
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delivery slip", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
          ";
                }
                // line 61
                echo "        </td>
        <td class=\"documents-table-column-download-link\">
          ";
                // line 63
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 64
                    echo "            <a target=\"_blank\" rel=\"noopener noreferrer nofollow\"
               href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateInvoicePDF", "id_order_invoice" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\"
            >
              ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                } elseif (($this->getAttribute(                // line 69
$context["document"], "type", []) == "delivery_slip")) {
                    // line 70
                    echo "            <a target=\"_blank\" rel=\"noopener noreferrer nofollow\"
               href=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateDeliverySlipPDF", "id_order_invoice" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\"
            >
              ";
                    // line 73
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                } elseif (($this->getAttribute(                // line 75
$context["document"], "type", []) == "credit_slip")) {
                    // line 76
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminPdf", true, ["submitAction" => "generateOrderSlipPDF", "id_order_slip" => $this->getAttribute($context["document"], "id", [])]), "html", null, true);
                    echo "\">
              ";
                    // line 77
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "referenceNumber", []), "html", null, true);
                    echo "
            </a>
          ";
                }
                // line 80
                echo "        </td>
        <td class=\"documents-table-column-amount\">
          ";
                // line 82
                if ($this->getAttribute($context["document"], "amount", [])) {
                    // line 83
                    echo "            <p class=\"mb-0\">
              ";
                    // line 84
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "amount", []), "html", null, true);
                    echo "

              ";
                    // line 86
                    if ($this->getAttribute($context["document"], "amountMismatch", [])) {
                        // line 87
                        echo "                (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "amountMismatch", []), "html", null, true);
                        echo ")
              ";
                    }
                    // line 89
                    echo "            </p>
          ";
                } else {
                    // line 91
                    echo "            --
          ";
                }
                // line 93
                echo "        </td>
        <td class=\"text-right documents-table-column-actions\">
          ";
                // line 95
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 96
                    echo "            ";
                    if (($this->getAttribute($context["document"], "isAddPaymentAllowed", []) && $this->getAttribute($context["document"], "amount", []))) {
                        // line 97
                        echo "              <button href=\"#\" class=\"js-enter-payment-btn btn btn-primary btn-sm\" data-payment-amount=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "numericalAmount", []), "html", null, true);
                        echo "\">
                ";
                        // line 98
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enter payment", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              </button>
            ";
                    }
                    // line 101
                    echo "            <button href=\"#\" class=\"js-open-invoice-note-btn btn btn-primary btn-sm\">
              ";
                    // line 102
                    if (twig_test_empty($this->getAttribute($context["document"], "note", []))) {
                        // line 103
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              ";
                    } else {
                        // line 105
                        echo "                ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "
              ";
                    }
                    // line 107
                    echo "            </button>
          ";
                }
                // line 109
                echo "        </td>
      </tr>
      ";
                // line 111
                if (($this->getAttribute($context["document"], "type", []) == "invoice")) {
                    // line 112
                    echo "        <tr class=\"d-none\">
          <td colspan=\"5\">
            <form action=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_update_invoice_note", ["orderId" => $this->getAttribute(                    // line 115
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "orderInvoiceId" => $this->getAttribute(                    // line 116
$context["document"], "id", [])]), "html", null, true);
                    // line 117
                    echo "\" method=\"post\">
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"invoice_note\" value=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "note", []), "html", null, true);
                    echo "\">
                <button class=\"btn btn-secondary ml-2 btn-sm js-cancel-invoice-note-btn\" type=\"button\">
                  ";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    echo "
                </button>
                <button class=\"btn btn-primary ml-2 btn-sm\" type=\"submit\">
                  ";
                    // line 124
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
                    echo "
                </button>
              </div>
            </form>
          </td>
        </tr>
      ";
                }
                // line 131
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "  ";
        } else {
            // line 133
            echo "    <tr>
      <td colspan=\"5\" class=\"text-center\">
        ";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no available document", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </td>
    </tr>
  ";
        }
        // line 139
        echo "  </tbody>
</table>

";
        // line 142
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "documents", []), "documents", [])) && $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceManagementIsEnabled", []))) {
            // line 143
            echo "  <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_generate_invoice", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])]), "html", null, true);
            echo "\" method=\"POST\">
    <button class=\"btn btn-primary\">
      <i class=\"material-icons\">autorenew</i>
      ";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Generate invoice", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    </button>
  </form>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 146,  302 => 143,  300 => 142,  295 => 139,  288 => 135,  284 => 133,  281 => 132,  275 => 131,  265 => 124,  259 => 121,  254 => 119,  250 => 117,  248 => 116,  247 => 115,  246 => 114,  242 => 112,  240 => 111,  236 => 109,  232 => 107,  226 => 105,  220 => 103,  218 => 102,  215 => 101,  209 => 98,  204 => 97,  201 => 96,  199 => 95,  195 => 93,  191 => 91,  187 => 89,  181 => 87,  179 => 86,  174 => 84,  171 => 83,  169 => 82,  165 => 80,  159 => 77,  154 => 76,  152 => 75,  147 => 73,  142 => 71,  139 => 70,  137 => 69,  132 => 67,  127 => 65,  124 => 64,  122 => 63,  118 => 61,  112 => 59,  106 => 57,  104 => 56,  99 => 55,  97 => 54,  91 => 51,  87 => 49,  82 => 48,  80 => 47,  72 => 42,  66 => 39,  60 => 36,  54 => 33,  48 => 30,  39 => 26,  36 => 25,);
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

<table class=\"table mb-3{% if orderForViewing.documents.documents is empty %} table-empty{% endif %}\">
  <thead>
  <tr>
    <th>
      {{ 'Date'|trans({}, 'Admin.Global') }}
    </th>
    <th>
      {{ 'Document'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </th>
    <th>
      {{ 'Number'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </th>
    <th>
      {{ 'Amount'|trans({}, 'Admin.Global') }}
    </th>
    <th class=\"text-right d-print-none\">
      {{ 'Actions'|trans({}, 'Admin.Global') }}
    </th>
  </tr>
  </thead>
  <tbody>
  {% if  orderForViewing.documents.documents is not empty %}
    {% for document in orderForViewing.documents.documents %}
      <tr>
        <td class=\"documents-table-column-date\">
          {{ document.createdAt|date_format_lite }}
        </td>
        <td class=\"documents-table-column-type\">
          {% if document.type == 'invoice' %}
            {{ 'Invoice'|trans({}, 'Admin.Global') }}
          {% elseif document.type == 'credit_slip' %}
            {{ 'Credit slip'|trans({}, 'Admin.Orderscustomers.Feature') }}
          {% else %}
            {{ 'Delivery slip'|trans({}, 'Admin.Orderscustomers.Feature') }}
          {% endif %}
        </td>
        <td class=\"documents-table-column-download-link\">
          {% if document.type == 'invoice' %}
            <a target=\"_blank\" rel=\"noopener noreferrer nofollow\"
               href=\"{{ getAdminLink('AdminPdf', true, {'submitAction': 'generateInvoicePDF', 'id_order_invoice': document.id}) }}\"
            >
              {{ document.referenceNumber }}
            </a>
          {% elseif document.type == 'delivery_slip' %}
            <a target=\"_blank\" rel=\"noopener noreferrer nofollow\"
               href=\"{{ getAdminLink('AdminPdf', true, {'submitAction': 'generateDeliverySlipPDF', 'id_order_invoice': document.id}) }}\"
            >
              {{ document.referenceNumber }}
            </a>
          {% elseif document.type == 'credit_slip' %}
            <a href=\"{{ getAdminLink('AdminPdf', true, {'submitAction': 'generateOrderSlipPDF', 'id_order_slip': document.id}) }}\">
              {{ document.referenceNumber }}
            </a>
          {% endif %}
        </td>
        <td class=\"documents-table-column-amount\">
          {% if document.amount %}
            <p class=\"mb-0\">
              {{ document.amount }}

              {% if document.amountMismatch %}
                ({{ document.amountMismatch }})
              {% endif %}
            </p>
          {% else %}
            --
          {% endif %}
        </td>
        <td class=\"text-right documents-table-column-actions\">
          {% if document.type == 'invoice' %}
            {% if (document.isAddPaymentAllowed and document.amount) %}
              <button href=\"#\" class=\"js-enter-payment-btn btn btn-primary btn-sm\" data-payment-amount=\"{{ document.numericalAmount }}\">
                {{ 'Enter payment'|trans({}, 'Admin.Orderscustomers.Feature') }}
              </button>
            {% endif %}
            <button href=\"#\" class=\"js-open-invoice-note-btn btn btn-primary btn-sm\">
              {% if document.note is empty %}
                {{ 'Add note'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% else %}
                {{ 'Edit note'|trans({}, 'Admin.Orderscustomers.Feature') }}
              {% endif %}
            </button>
          {% endif %}
        </td>
      </tr>
      {% if document.type == 'invoice' %}
        <tr class=\"d-none\">
          <td colspan=\"5\">
            <form action=\"{{ path('admin_orders_update_invoice_note', {
              'orderId': orderForViewing.id,
              'orderInvoiceId': document.id
            }) }}\" method=\"post\">
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" name=\"invoice_note\" value=\"{{ document.note }}\">
                <button class=\"btn btn-secondary ml-2 btn-sm js-cancel-invoice-note-btn\" type=\"button\">
                  {{ 'Cancel'|trans({}, 'Admin.Actions') }}
                </button>
                <button class=\"btn btn-primary ml-2 btn-sm\" type=\"submit\">
                  {{ 'Save'|trans({}, 'Admin.Actions') }}
                </button>
              </div>
            </form>
          </td>
        </tr>
      {% endif %}
    {% endfor %}
  {% else %}
    <tr>
      <td colspan=\"5\" class=\"text-center\">
        {{ 'There is no available document'|trans({}, 'Admin.Orderscustomers.Notification') }}
      </td>
    </tr>
  {% endif %}
  </tbody>
</table>

{% if  orderForViewing.documents.documents is empty and orderForViewing.invoiceManagementIsEnabled %}
  <form action=\"{{ path('admin_orders_generate_invoice', {'orderId': orderForViewing.id}) }}\" method=\"POST\">
    <button class=\"btn btn-primary\">
      <i class=\"material-icons\">autorenew</i>
      {{ 'Generate invoice'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </button>
  </form>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/documents.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/documents.html.twig");
    }
}
