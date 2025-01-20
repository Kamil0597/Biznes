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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig */
class __TwigTemplate_b2bb1d31f54daac2218ac4f41f61a34f8c14dc4434623e2ad6f7773de08a8e23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig"));

        // line 25
        echo "
<div id=\"customerCard\" class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
  </div>

  <div class=\"card-body\">
    <div id=\"customerInfo\" class=\"info-block\">
      <div class=\"row\">
        ";
        // line 36
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0))) {
            // line 37
            echo "          <div class=\"col-xxl-7\">
            <h2 class=\"mb-0\">
              <i class=\"material-icons\">account_box</i>

              ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "gender", []), "html", null, true);
            echo "
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "firstName", []), "html", null, true);
            echo "
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "lastName", []), "html", null, true);
            echo "

              <strong class=\"text-muted ml-2\">#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []), "html", null, true);
            echo "</strong>
            </h2>
            ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "isGuest", [])) {
                // line 48
                echo "              <strong class=\"text-muted\">Guest</strong>
            ";
            }
            // line 50
            echo "          </div>
          <div id=\"viewFullDetails\" class=\"col-xxl-5 text-xxl-right\">
            <a class=\"d-print-none\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", [])]), "html", null, true);
            echo "\">
              ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View full details", [], "Admin.Actions"), "html", null, true);
            echo "
            </a>
          </div>
        ";
        } else {
            // line 57
            echo "          <div class=\"col\">
            <h2 class=\"mb-0\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleted customer", [], "Admin.Global"), "html", null, true);
            echo "</h2>
          </div>
        ";
        }
        // line 61
        echo "      </div>
    </div>
    ";
        // line 63
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0))) {
            // line 64
            echo "      <div class=\"row mt-3\">
        <div id=\"customerEmail\" class=\"col-xxl-6\">
          <p class=\"mb-1\">
            <strong>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "</strong>
          </p>
          <p>
            <a href=\"mailto:";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "email", []), "html", null, true);
            echo "\">
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "email", []), "html", null, true);
            echo "
            </a>
          </p>

          ";
            // line 75
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "isGuest", []) === false)) {
                // line 76
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Account registered:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\Extension\LocalizationExtension')->dateFormatFull($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "accountRegistrationDate", [])), "html", null, true);
                echo "</p>
          ";
            }
            // line 81
            echo "
          ";
            // line 82
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "siret", []))) {
                // line 83
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIRET", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "siret", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 88
            echo "
          ";
            // line 89
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "ape", []))) {
                // line 90
                echo "            <p class=\"mb-1 d-block d-md-none\">
              <strong>";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p class=\"d-block d-md-none\">";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "ape", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 95
            echo "        </div>
        <div id=\"validatedOrders\" class=\"col-xxl-6\">
          <p class=\"mb-1\">
            <strong>";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Validated orders placed:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "validOrdersPlaced", []), "html", null, true);
            echo "</span>
          </p>

          ";
            // line 104
            if (($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "isGuest", []) === false)) {
                // line 105
                echo "            <p class=\"mb-1\">
              <strong>";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total spent since registration:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p>
              <span class=\"badge rounded badge-dark\">";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "totalSpentSinceRegistration", []), "html", null, true);
                echo "</span>
            </p>
          ";
            }
            // line 112
            echo "
          ";
            // line 113
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "ape", []))) {
                // line 114
                echo "            <p class=\"mb-1 d-none d-md-block\">
              <strong>";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APE", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</strong>
            </p>
            <p class=\"d-none d-md-block\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "ape", []), "html", null, true);
                echo "</p>
          ";
            }
            // line 119
            echo "        </div>
      </div>
    ";
        }
        // line 122
        echo "    <div class=\"info-block mt-2\">
      <div class=\"row\">
        ";
        // line 124
        if (($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "virtual", []) === false)) {
            // line 125
            echo "          <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
            <div class=\"row justify-content-between no-gutters\">
              <strong>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shipping address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</strong>
              ";
            // line 128
            if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0))) {
                // line 129
                echo "                <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                  <i class=\"material-icons\">more_vert</i>
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                     href=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "addressType" => "delivery", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
                echo "\"
                  >
                    ";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>

                  <a href=\"#\"
                     class=\"dropdown-item js-update-customer-address-modal-btn\"
                     data-toggle=\"modal\"
                     data-target=\"#updateCustomerAddressModal\"
                     data-address-type=\"shipping\"
                  >
                    ";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>
                </div>
              ";
            }
            // line 150
            echo "            </div>

            ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "shippingAddressFormatted", []), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 153
                echo "              <p class=\"mb-0\">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "          </div>
        ";
        }
        // line 157
        echo "        <div id=\"addressInvoice\" class=\"info-block-col ";
        if ($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "virtual", [])) {
            echo "col-md-12";
        } else {
            echo "col-xl-6";
        }
        echo "\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invoice address", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>

            ";
        // line 161
        if (( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0))) {
            // line 162
            echo "              <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                <i class=\"material-icons\">more_vert</i>
              </a>

              <div class=\"dropdown-menu dropdown-menu-right\">
                <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                   href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_addresses_edit", ["orderId" => $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", []), "addressType" => "invoice", "liteDisplaying" => 1, "submitFormAjax" => 1]), "html", null, true);
            echo "\"
                >
                  ";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit existing address", [], "Admin.Actions"), "html", null, true);
            echo "
                </a>

                <a href=\"#\"
                   class=\"dropdown-item js-update-customer-address-modal-btn\"
                   data-toggle=\"modal\"
                   data-target=\"#updateCustomerAddressModal\"
                   data-address-type=\"invoice\"
                >
                  ";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select another address", [], "Admin.Actions"), "html", null, true);
            echo "
                </a>
              </div>
            ";
        }
        // line 183
        echo "          </div>

          ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "invoiceAddressFormatted", []), "
"));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 186
            echo "            <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "        </div>
      </div>
    </div>

    ";
        // line 192
        if ((( !(null === $this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", [])) && ($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []) != 0)) &&  !(null === ($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm"))))) {
            // line 193
            echo "      <div id=\"privateNote\" class=\"mt-2 info-block\">
        <div class=\"row\">
          ";
            // line 195
            $context["isPrivateNoteOpen"] =  !twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "privateNote", []));
            // line 196
            echo "
          <div class=\"col-md-6\">
            <h3 class=\"mb-0";
            // line 198
            echo (( !($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) ? (" d-print-none") : (""));
            echo "\">
              ";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Private note", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"col-md-6 text-right d-print-none\">
            <a href=\"#\"
               class=\"float-right tooltip-link js-private-note-toggle-btn ";
            // line 204
            if (($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) {
                echo "is-opened";
            }
            echo "\"
            >
              ";
            // line 206
            if (($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) {
                // line 207
                echo "                <i class=\"material-icons\">remove</i>
              ";
            } else {
                // line 209
                echo "                <i class=\"material-icons\">add</i>
              ";
            }
            // line 211
            echo "            </a>
          </div>

          <div class=\"col-md-12 mt-3 js-private-note-block ";
            // line 214
            if ( !($context["isPrivateNoteOpen"] ?? $this->getContext($context, "isPrivateNoteOpen"))) {
                echo "d-none";
            }
            echo "\">
            ";
            // line 215
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_set_private_note", ["customerId" => $this->getAttribute($this->getAttribute(            // line 217
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "id", []), "back" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_orders_view", ["orderId" => $this->getAttribute(            // line 218
($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "id", [])])])]);
            // line 220
            echo "

              ";
            // line 222
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), "note", []), 'widget');
            echo "
              <div class=\"d-none\">
                ";
            // line 224
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'rest');
            echo "
              </div>

              <div class=\"mt-2 text-right\">
                <button type=\"submit\"
                        class=\"btn btn-primary btn-sm js-private-note-btn\"
                        ";
            // line 230
            if (twig_test_empty($this->getAttribute($this->getAttribute(($context["orderForViewing"] ?? $this->getContext($context, "orderForViewing")), "customer", []), "privateNote", []))) {
                echo "disabled";
            }
            // line 231
            echo "                >
                  ";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
            echo "
                </button>
              </div>
            ";
            // line 235
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["privateNoteForm"] ?? $this->getContext($context, "privateNoteForm")), 'form_end');
            echo "
          </div>
        </div>
      </div>
    ";
        }
        // line 240
        echo "  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 240,  474 => 235,  468 => 232,  465 => 231,  461 => 230,  452 => 224,  447 => 222,  443 => 220,  441 => 218,  440 => 217,  439 => 215,  433 => 214,  428 => 211,  424 => 209,  420 => 207,  418 => 206,  411 => 204,  403 => 199,  399 => 198,  395 => 196,  393 => 195,  389 => 193,  387 => 192,  381 => 188,  372 => 186,  367 => 185,  363 => 183,  356 => 179,  344 => 170,  339 => 168,  331 => 162,  329 => 161,  324 => 159,  314 => 157,  310 => 155,  301 => 153,  296 => 152,  292 => 150,  285 => 146,  273 => 137,  268 => 135,  260 => 129,  258 => 128,  254 => 127,  250 => 125,  248 => 124,  244 => 122,  239 => 119,  234 => 117,  229 => 115,  226 => 114,  224 => 113,  221 => 112,  215 => 109,  209 => 106,  206 => 105,  204 => 104,  198 => 101,  192 => 98,  187 => 95,  182 => 93,  177 => 91,  174 => 90,  172 => 89,  169 => 88,  164 => 86,  159 => 84,  156 => 83,  154 => 82,  151 => 81,  146 => 79,  141 => 77,  138 => 76,  136 => 75,  129 => 71,  125 => 70,  119 => 67,  114 => 64,  112 => 63,  108 => 61,  102 => 58,  99 => 57,  92 => 53,  88 => 52,  84 => 50,  80 => 48,  78 => 47,  73 => 45,  68 => 43,  64 => 42,  60 => 41,  54 => 37,  52 => 36,  42 => 29,  36 => 25,);
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

<div id=\"customerCard\" class=\"customer card\">
  <div class=\"card-header\">
    <h3 class=\"card-header-title\">
      {{ 'Customer'|trans({}, 'Admin.Global') }}
    </h3>
  </div>

  <div class=\"card-body\">
    <div id=\"customerInfo\" class=\"info-block\">
      <div class=\"row\">
        {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
          <div class=\"col-xxl-7\">
            <h2 class=\"mb-0\">
              <i class=\"material-icons\">account_box</i>

              {{ orderForViewing.customer.gender }}
              {{ orderForViewing.customer.firstName }}
              {{ orderForViewing.customer.lastName }}

              <strong class=\"text-muted ml-2\">#{{ orderForViewing.customer.id }}</strong>
            </h2>
            {% if orderForViewing.customer.isGuest %}
              <strong class=\"text-muted\">Guest</strong>
            {% endif %}
          </div>
          <div id=\"viewFullDetails\" class=\"col-xxl-5 text-xxl-right\">
            <a class=\"d-print-none\" href=\"{{ path('admin_customers_view', {'customerId': orderForViewing.customer.id }) }}\">
              {{ 'View full details'|trans({}, 'Admin.Actions') }}
            </a>
          </div>
        {% else %}
          <div class=\"col\">
            <h2 class=\"mb-0\">{{ 'Deleted customer'|trans({}, 'Admin.Global') }}</h2>
          </div>
        {% endif %}
      </div>
    </div>
    {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
      <div class=\"row mt-3\">
        <div id=\"customerEmail\" class=\"col-xxl-6\">
          <p class=\"mb-1\">
            <strong>{{ 'Email:'|trans({}, 'Admin.Global') }}</strong>
          </p>
          <p>
            <a href=\"mailto:{{ orderForViewing.customer.email }}\">
              {{ orderForViewing.customer.email }}
            </a>
          </p>

          {%  if orderForViewing.customer.isGuest is same as(false) %}
            <p class=\"mb-1\">
              <strong>{{ 'Account registered:'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <p>{{ orderForViewing.customer.accountRegistrationDate|date_format_full }}</p>
          {% endif %}

          {%  if orderForViewing.customer.siret is not empty %}
            <p class=\"mb-1\">
              <strong>{{ 'SIRET'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <p>{{ orderForViewing.customer.siret }}</p>
          {% endif %}

          {%  if orderForViewing.customer.ape is not empty %}
            <p class=\"mb-1 d-block d-md-none\">
              <strong>{{ 'APE'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <p class=\"d-block d-md-none\">{{ orderForViewing.customer.ape }}</p>
          {% endif %}
        </div>
        <div id=\"validatedOrders\" class=\"col-xxl-6\">
          <p class=\"mb-1\">
            <strong>{{ 'Validated orders placed:'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
          </p>
          <p>
            <span class=\"badge rounded badge-dark\">{{ orderForViewing.customer.validOrdersPlaced }}</span>
          </p>

          {%  if orderForViewing.customer.isGuest is same as(false) %}
            <p class=\"mb-1\">
              <strong>{{ 'Total spent since registration:'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <p>
              <span class=\"badge rounded badge-dark\">{{ orderForViewing.customer.totalSpentSinceRegistration }}</span>
            </p>
          {% endif %}

          {%  if orderForViewing.customer.ape is not empty %}
            <p class=\"mb-1 d-none d-md-block\">
              <strong>{{ 'APE'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <p class=\"d-none d-md-block\">{{ orderForViewing.customer.ape }}</p>
          {% endif %}
        </div>
      </div>
    {% endif %}
    <div class=\"info-block mt-2\">
      <div class=\"row\">
        {% if orderForViewing.virtual is same as(false) %}
          <div id=\"addressShipping\" class=\"info-block-col col-xl-6\">
            <div class=\"row justify-content-between no-gutters\">
              <strong>{{ 'Shipping address'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
              {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
                <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                  <i class=\"material-icons\">more_vert</i>
                </a>

                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"dropdown-item\" id=\"js-delivery-address-edit-btn\"
                     href=\"{{ path('admin_order_addresses_edit', {'orderId': orderForViewing.id, 'addressType': 'delivery', 'liteDisplaying': 1, 'submitFormAjax': 1}) }}\"
                  >
                    {{ 'Edit existing address'|trans({}, 'Admin.Actions') }}
                  </a>

                  <a href=\"#\"
                     class=\"dropdown-item js-update-customer-address-modal-btn\"
                     data-toggle=\"modal\"
                     data-target=\"#updateCustomerAddressModal\"
                     data-address-type=\"shipping\"
                  >
                    {{ 'Select another address'|trans({}, 'Admin.Actions') }}
                  </a>
                </div>
              {% endif %}
            </div>

            {% for line in orderForViewing.shippingAddressFormatted|split(\"\\n\") %}
              <p class=\"mb-0\">{{ line }}</p>
            {% endfor %}
          </div>
        {% endif %}
        <div id=\"addressInvoice\" class=\"info-block-col {% if orderForViewing.virtual %}col-md-12{% else %}col-xl-6{% endif %}\">
          <div class=\"row justify-content-between no-gutters\">
            <strong>{{ 'Invoice address'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>

            {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 %}
              <a class=\"tooltip-link d-print-none\" href=\"#\" data-toggle=\"dropdown\">
                <i class=\"material-icons\">more_vert</i>
              </a>

              <div class=\"dropdown-menu dropdown-menu-right\">
                <a class=\"dropdown-item\" id=\"js-invoice-address-edit-btn\"
                   href=\"{{ path('admin_order_addresses_edit', {'orderId': orderForViewing.id, 'addressType': 'invoice', 'liteDisplaying': 1, 'submitFormAjax': 1}) }}\"
                >
                  {{ 'Edit existing address'|trans({}, 'Admin.Actions') }}
                </a>

                <a href=\"#\"
                   class=\"dropdown-item js-update-customer-address-modal-btn\"
                   data-toggle=\"modal\"
                   data-target=\"#updateCustomerAddressModal\"
                   data-address-type=\"invoice\"
                >
                  {{ 'Select another address'|trans({}, 'Admin.Actions') }}
                </a>
              </div>
            {% endif %}
          </div>

          {% for line in orderForViewing.invoiceAddressFormatted|split(\"\\n\") %}
            <p class=\"mb-0\">{{ line }}</p>
          {% endfor %}
        </div>
      </div>
    </div>

    {% if orderForViewing.customer is not null and orderForViewing.customer.id != 0 and privateNoteForm is not null %}
      <div id=\"privateNote\" class=\"mt-2 info-block\">
        <div class=\"row\">
          {% set isPrivateNoteOpen = not orderForViewing.customer.privateNote is empty %}

          <div class=\"col-md-6\">
            <h3 class=\"mb-0{{ not isPrivateNoteOpen ? ' d-print-none': '' }}\">
              {{ 'Private note'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </h3>
          </div>
          <div class=\"col-md-6 text-right d-print-none\">
            <a href=\"#\"
               class=\"float-right tooltip-link js-private-note-toggle-btn {% if isPrivateNoteOpen %}is-opened{% endif %}\"
            >
              {% if isPrivateNoteOpen %}
                <i class=\"material-icons\">remove</i>
              {% else %}
                <i class=\"material-icons\">add</i>
              {% endif %}
            </a>
          </div>

          <div class=\"col-md-12 mt-3 js-private-note-block {% if not isPrivateNoteOpen %}d-none{% endif %}\">
            {{ form_start(privateNoteForm, {
              'action': path('admin_customers_set_private_note', {
                'customerId': orderForViewing.customer.id,
                'back': path('admin_orders_view', {'orderId': orderForViewing.id})
              })
              }) }}

              {{ form_widget(privateNoteForm.note) }}
              <div class=\"d-none\">
                {{ form_rest(privateNoteForm) }}
              </div>

              <div class=\"mt-2 text-right\">
                <button type=\"submit\"
                        class=\"btn btn-primary btn-sm js-private-note-btn\"
                        {% if orderForViewing.customer.privateNote is empty %}disabled{% endif %}
                >
                  {{ 'Save'|trans({}, 'Admin.Actions') }}
                </button>
              </div>
            {{ form_end(privateNoteForm) }}
          </div>
        </div>
      </div>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/customer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/customer.html.twig");
    }
}
