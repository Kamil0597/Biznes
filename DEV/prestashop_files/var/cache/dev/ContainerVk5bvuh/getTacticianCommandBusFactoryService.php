<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory' shared service.

return $this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->load('getPsCheckout_ModuleService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->load('getPsCheckout_LoggerService.php')) && false ?: '_'}, ['PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\AddOrderPaymentCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\CreateOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\UpdateOrderStatusCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\Command\\UpdateOrderMatriceCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CreatePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\UpdatePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CapturePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\CancelCheckoutCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SaveCheckoutCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SavePayPalOrderStatusCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\UpdatePaymentMethodSelectedCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\Command\\RefundPayPalCaptureCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentCompletedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentDeniedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentPendingQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentRefundedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentReversedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForApprovalReversedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCartIdQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetCurrentPayPalOrderStatusQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCheckoutCompletedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForOrderConfirmationQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Command\\SavePaymentTokenCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Command\\DeletePaymentTokenCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\Command\\SavePayPalCustomerCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\SavePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQueryHandler']);
