<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'prestashop\\module\\prestashopcheckout\\adapter\\languageadapter' => 'PrestaShop\\Module\\PrestashopCheckout\\Adapter\\LanguageAdapter',
            'prestashop\\module\\prestashopcheckout\\builder\\configuration\\checkoutclientconfigurationbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder',
            'prestashop\\module\\prestashopcheckout\\builder\\configuration\\maaslandhttpclientconfigurationbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder',
            'prestashop\\module\\prestashopcheckout\\builder\\modulelink\\modulelinkbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder',
            'prestashop\\module\\prestashopcheckout\\checkout\\checkoutchecker' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker',
            'prestashop\\module\\prestashopcheckout\\checkout\\commandhandler\\cancelcheckoutcommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler',
            'prestashop\\module\\prestashopcheckout\\checkout\\commandhandler\\savecheckoutcommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler',
            'prestashop\\module\\prestashopcheckout\\checkout\\commandhandler\\savepaypalorderstatuscommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler',
            'prestashop\\module\\prestashopcheckout\\checkout\\commandhandler\\updatepaymentmethodselectedcommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler',
            'prestashop\\module\\prestashopcheckout\\checkout\\eventsubscriber\\checkouteventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber',
            'prestashop\\module\\prestashopcheckout\\commandbus\\tacticiancommandbusfactory' => 'PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory',
            'prestashop\\module\\prestashopcheckout\\configuration\\batchconfigurationprocessor' => 'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\BatchConfigurationProcessor',
            'prestashop\\module\\prestashopcheckout\\configuration\\prestashopconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration',
            'prestashop\\module\\prestashopcheckout\\configuration\\prestashopconfigurationoptionsresolver' => 'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver',
            'prestashop\\module\\prestashopcheckout\\context\\contextstatemanager' => 'PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager',
            'prestashop\\module\\prestashopcheckout\\context\\prestashopcontext' => 'PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext',
            'prestashop\\module\\prestashopcheckout\\environment\\env' => 'PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env',
            'prestashop\\module\\prestashopcheckout\\environment\\envloader' => 'PrestaShop\\Module\\PrestashopCheckout\\Environment\\EnvLoader',
            'prestashop\\module\\prestashopcheckout\\event\\symfonyeventdispatcheradapter' => 'PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter',
            'prestashop\\module\\prestashopcheckout\\event\\symfonyeventdispatcherfactory' => 'PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory',
            'prestashop\\module\\prestashopcheckout\\expresscheckout\\expresscheckoutconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourcecollection' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollection',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourcecollectionbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourceconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourceconfigurationrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourceeligibilityconstraint' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourcepresenter' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourceprovider' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider',
            'prestashop\\module\\prestashopcheckout\\fundingsource\\fundingsourcetranslationprovider' => 'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider',
            'prestashop\\module\\prestashopcheckout\\http\\checkouthttpclient' => 'PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient',
            'prestashop\\module\\prestashopcheckout\\http\\httpclientfactory' => 'PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory',
            'prestashop\\module\\prestashopcheckout\\http\\maaslandhttpclient' => 'PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerdirectory' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerfactory' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerfilename' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerhandlerfactory' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory',
            'prestashop\\module\\prestashopcheckout\\onboarding\\step\\livestep' => 'PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep',
            'prestashop\\module\\prestashopcheckout\\onboarding\\step\\valuebanner' => 'PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner',
            'prestashop\\module\\prestashopcheckout\\order\\commandhandler\\addorderpaymentcommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler',
            'prestashop\\module\\prestashopcheckout\\order\\commandhandler\\createordercommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler',
            'prestashop\\module\\prestashopcheckout\\order\\commandhandler\\updateorderstatuscommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler',
            'prestashop\\module\\prestashopcheckout\\order\\eventsubscriber\\ordereventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber',
            'prestashop\\module\\prestashopcheckout\\order\\matrice\\commandhandler\\updateordermatricecommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler',
            'prestashop\\module\\prestashopcheckout\\order\\queryhandler\\getorderforapprovalreversedqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler',
            'prestashop\\module\\prestashopcheckout\\order\\queryhandler\\getorderforpaymentcompletedqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler',
            'prestashop\\module\\prestashopcheckout\\order\\queryhandler\\getorderforpaymentdeniedqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler',
            'prestashop\\module\\prestashopcheckout\\order\\queryhandler\\getorderforpaymentpendingqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler',
            'prestashop\\module\\prestashopcheckout\\order\\queryhandler\\getorderforpaymentrefundedqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler',
            'prestashop\\module\\prestashopcheckout\\order\\queryhandler\\getorderforpaymentreversedqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler',
            'prestashop\\module\\prestashopcheckout\\order\\service\\checkorderamount' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount',
            'prestashop\\module\\prestashopcheckout\\order\\state\\service\\orderstatemapper' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper',
            'prestashop\\module\\prestashopcheckout\\paypal\\applepay\\applesetup' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\AppleSetup',
            'prestashop\\module\\prestashopcheckout\\paypal\\applepay\\builder\\applepaypaymentrequestbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestBuilder',
            'prestashop\\module\\prestashopcheckout\\paypal\\applepay\\query\\getapplepaypaymentrequestqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\customer\\commandhandler\\savepaypalcustomercommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\googlepay\\builder\\googlepaytransactioninfobuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Builder\\GooglePayTransactionInfoBuilder',
            'prestashop\\module\\prestashopcheckout\\paypal\\googlepay\\query\\getgooglepaytransactioninfoqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\oauth\\oauthservice' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService',
            'prestashop\\module\\prestashopcheckout\\paypal\\oauth\\query\\getpaypalgetuseridtokenqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\checktransitionpaypalorderstatusservice' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\commandhandler\\capturepaypalordercommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\commandhandler\\createpaypalordercommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\commandhandler\\savepaypalordercommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\commandhandler\\updatepaypalordercommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\eventsubscriber\\paypalordereventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\paypalorderstatus' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderStatus',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\paypalordersummaryviewbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderSummaryViewBuilder',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\paypalordertranslationprovider' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\queryhandler\\getcurrentpaypalorderstatusqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\queryhandler\\getpaypalorderforcartidqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\queryhandler\\getpaypalorderforcheckoutcompletedqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\order\\queryhandler\\getpaypalorderfororderconfirmationqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\payment\\capture\\checktransitionpaypalcapturestatusservice' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\CheckTransitionPayPalCaptureStatusService',
            'prestashop\\module\\prestashopcheckout\\paypal\\payment\\capture\\eventsubscriber\\paypalcaptureeventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber',
            'prestashop\\module\\prestashopcheckout\\paypal\\payment\\refund\\commandhandler\\refundpaypalcapturecommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\payment\\refund\\eventsubscriber\\paypalrefundeventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber',
            'prestashop\\module\\prestashopcheckout\\paypal\\paymenttoken\\commandhandler\\deletepaymenttokencommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\paymenttoken\\commandhandler\\savepaymenttokencommandhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\paymenttoken\\eventsubscriber\\paymentmethodtokeneventsubscriber' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber',
            'prestashop\\module\\prestashopcheckout\\paypal\\paymenttoken\\paymentmethodtokenservice' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService',
            'prestashop\\module\\prestashopcheckout\\paypal\\paymenttoken\\query\\getcustomerpaymenttokensqueryhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler',
            'prestashop\\module\\prestashopcheckout\\paypal\\paypalconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration',
            'prestashop\\module\\prestashopcheckout\\paypal\\paypalorderprovider' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider',
            'prestashop\\module\\prestashopcheckout\\paypal\\paypalpaylaterconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration',
            'prestashop\\module\\prestashopcheckout\\paypal\\sdk\\paypalsdkconfigurationbuilder' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Sdk\\PayPalSdkConfigurationBuilder',
            'prestashop\\module\\prestashopcheckout\\presenter\\store\\modules\\configurationmodule' => 'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule',
            'prestashop\\module\\prestashopcheckout\\presenter\\store\\modules\\contextmodule' => 'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule',
            'prestashop\\module\\prestashopcheckout\\presenter\\store\\modules\\paypalmodule' => 'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule',
            'prestashop\\module\\prestashopcheckout\\presenter\\store\\storepresenter' => 'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\StorePresenter',
            'prestashop\\module\\prestashopcheckout\\provider\\paymentmethodlogoprovider' => 'PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider',
            'prestashop\\module\\prestashopcheckout\\repository\\countryrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository',
            'prestashop\\module\\prestashopcheckout\\repository\\paymenttokenrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository',
            'prestashop\\module\\prestashopcheckout\\repository\\paypalcoderepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository',
            'prestashop\\module\\prestashopcheckout\\repository\\paypalcustomerrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository',
            'prestashop\\module\\prestashopcheckout\\repository\\paypalorderrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository',
            'prestashop\\module\\prestashopcheckout\\repository\\psaccountrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository',
            'prestashop\\module\\prestashopcheckout\\repository\\pscheckoutcartrepository' => 'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository',
            'prestashop\\module\\prestashopcheckout\\routing\\router' => 'PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router',
            'prestashop\\module\\prestashopcheckout\\shop\\shopprovider' => 'PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider',
            'prestashop\\module\\prestashopcheckout\\shopcontext' => 'PrestaShop\\Module\\PrestashopCheckout\\ShopContext',
            'prestashop\\module\\prestashopcheckout\\system\\systemconfiguration' => 'PrestaShop\\Module\\PrestashopCheckout\\System\\SystemConfiguration',
            'prestashop\\module\\prestashopcheckout\\translations\\translations' => 'PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations',
            'prestashop\\module\\prestashopcheckout\\validator\\batchconfigurationvalidator' => 'PrestaShop\\Module\\PrestashopCheckout\\Validator\\BatchConfigurationValidator',
            'prestashop\\module\\prestashopcheckout\\validator\\frontcontrollervalidator' => 'PrestaShop\\Module\\PrestashopCheckout\\Validator\\FrontControllerValidator',
            'prestashop\\module\\prestashopcheckout\\validator\\merchantvalidator' => 'PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator',
            'prestashop\\module\\prestashopcheckout\\webhook\\webhookeventconfigurationupdatedhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler',
            'prestashop\\module\\prestashopcheckout\\webhook\\webhookhandler' => 'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookHandler',
            'prestashop\\module\\prestashopcheckout\\webhook\\webhooksecrettokenservice' => 'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService',
            'prestashop\\module\\prestashopfacebook\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\prestashopfacebook\\adapter\\toolsadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter',
            'prestashop\\module\\prestashopfacebook\\api\\client\\facebookcategoryclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient',
            'prestashop\\module\\prestashopfacebook\\api\\client\\facebookclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\accountsuspendedsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\apierrorsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber',
            'prestashop\\module\\prestashopfacebook\\api\\responselistener' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener',
            'prestashop\\module\\prestashopfacebook\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer',
            'prestashop\\module\\prestashopfacebook\\config\\env' => 'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env',
            'prestashop\\module\\prestashopfacebook\\dispatcher\\eventdispatcher' => 'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher',
            'prestashop\\module\\prestashopfacebook\\factory\\facebookessentialsapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\factory\\psapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\handler\\apiconversionhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\categorymatchhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\configurationhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\errorhandler\\errorhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\eventbusproducthandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\messengerhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\pixelhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\prevalidationscanrefreshhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler',
            'prestashop\\module\\prestashopfacebook\\manager\\fbefeaturemanager' => 'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager',
            'prestashop\\module\\prestashopfacebook\\presenter\\moduleupgradepresenter' => 'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter',
            'prestashop\\module\\prestashopfacebook\\provider\\accesstokenprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\eventdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\facebookdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbefeaturedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\multishopdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscancacheprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscandataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\productsyncreportprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider',
            'prestashop\\module\\prestashopfacebook\\repository\\googlecategoryrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\productrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\serverinformationrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\shoprepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\tabrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository',
            'prestashop\\module\\ps_facebook\\tracker\\segment' => 'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment',
            'prestashop\\module\\psaccounts\\presenter\\psaccountspresenter' => 'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter',
            'prestashop\\module\\psaccounts\\repository\\usertokenrepository' => 'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository',
            'prestashop\\module\\psaccounts\\service\\psaccountsservice' => 'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService',
            'prestashop\\module\\psaccounts\\service\\psbillingservice' => 'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService',
            'prestashop\\module\\psxmarketingwithgoogle\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\psxmarketingwithgoogle\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer',
            'prestashop\\module\\psxmarketingwithgoogle\\config\\env' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env',
            'prestashop\\module\\psxmarketingwithgoogle\\conversion\\enhancedconversiontoggle' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle',
            'prestashop\\module\\psxmarketingwithgoogle\\conversion\\userdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\handler\\errorhandler' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler',
            'prestashop\\module\\psxmarketingwithgoogle\\handler\\remarketinghookhandler' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\carteventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\pagevieweventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\productdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\purchaseeventdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\provider\\verificationtagdataprovider' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\attributesrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\carrierrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\categoryrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\countryrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\currencyrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\languagerepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\manufacturerrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\productrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\staterepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\tabrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\taxrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\repository\\verificationtagrepository' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository',
            'prestashop\\module\\psxmarketingwithgoogle\\tracker\\segment' => 'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment',
            'prestashop\\modulelibcachedirectoryprovider\\cache\\cachedirectoryprovider' => 'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider',
            'prestashop\\modulelibguzzleadapter\\clientfactory' => 'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Installer',
            'prestashopbundle\\dependencyinjection\\runtimeconstenvvarprocessor' => 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor',
            'prestashopcorp\\billing\\presenter\\billingpresenter' => 'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter',
            'prestashopcorp\\billing\\services\\billingservice' => 'PrestaShopCorp\\Billing\\Services\\BillingService',
            'prestashopcorp\\billing\\wrappers\\billingcontextwrapper' => 'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper',
        ];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => 'getRuntimeConstEnvVarProcessorService',
            'PrestaShopCorp\\Billing\\Presenter\\BillingPresenter' => 'getBillingPresenterService',
            'PrestaShopCorp\\Billing\\Services\\BillingService' => 'getBillingServiceService',
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => 'getBillingContextWrapperService',
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider' => 'getCacheDirectoryProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Adapter\\LanguageAdapter' => 'getLanguageAdapterService',
            'PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder' => 'getCheckoutClientConfigurationBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder' => 'getMaaslandHttpClientConfigurationBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder' => 'getModuleLinkBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker' => 'getCheckoutCheckerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler' => 'getCancelCheckoutCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler' => 'getSaveCheckoutCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler' => 'getSavePayPalOrderStatusCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler' => 'getUpdatePaymentMethodSelectedCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber' => 'getCheckoutEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory' => 'getTacticianCommandBusFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\BatchConfigurationProcessor' => 'getBatchConfigurationProcessorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration' => 'getPrestaShopConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver' => 'getPrestaShopConfigurationOptionsResolverService',
            'PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext' => 'getPrestaShopContextService',
            'PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopCheckout\\Environment\\EnvLoader' => 'getEnvLoaderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter' => 'getSymfonyEventDispatcherAdapterService',
            'PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory' => 'getSymfonyEventDispatcherFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration' => 'getExpressCheckoutConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollection' => 'getFundingSourceCollectionService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder' => 'getFundingSourceCollectionBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration' => 'getFundingSourceConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository' => 'getFundingSourceConfigurationRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint' => 'getFundingSourceEligibilityConstraintService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter' => 'getFundingSourcePresenterService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider' => 'getFundingSourceProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider' => 'getFundingSourceTranslationProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient' => 'getCheckoutHttpClientService',
            'PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory' => 'getHttpClientFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient' => 'getMaaslandHttpClientService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration' => 'getLoggerConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory' => 'getLoggerDirectoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory' => 'getLoggerFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename' => 'getLoggerFilenameService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory' => 'getLoggerHandlerFactoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep' => 'getLiveStepService',
            'PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner' => 'getValueBannerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler' => 'getAddOrderPaymentCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler' => 'getCreateOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler' => 'getUpdateOrderStatusCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber' => 'getOrderEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler' => 'getUpdateOrderMatriceCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler' => 'getGetOrderForApprovalReversedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler' => 'getGetOrderForPaymentCompletedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler' => 'getGetOrderForPaymentDeniedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler' => 'getGetOrderForPaymentPendingQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler' => 'getGetOrderForPaymentRefundedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler' => 'getGetOrderForPaymentReversedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount' => 'getCheckOrderAmountService',
            'PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper' => 'getOrderStateMapperService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\AppleSetup' => 'getAppleSetupService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestBuilder' => 'getApplePayPaymentRequestBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQueryHandler' => 'getGetApplePayPaymentRequestQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler' => 'getSavePayPalCustomerCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Builder\\GooglePayTransactionInfoBuilder' => 'getGooglePayTransactionInfoBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQueryHandler' => 'getGetGooglePayTransactionInfoQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService' => 'getOAuthServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler' => 'getGetPayPalGetUserIdTokenQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService' => 'getCheckTransitionPayPalOrderStatusServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler' => 'getCapturePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler' => 'getCreatePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler' => 'getSavePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler' => 'getUpdatePayPalOrderCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber' => 'getPayPalOrderEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderStatus' => 'getPayPalOrderStatusService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderSummaryViewBuilder' => 'getPayPalOrderSummaryViewBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider' => 'getPayPalOrderTranslationProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler' => 'getGetCurrentPayPalOrderStatusQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler' => 'getGetPayPalOrderForCartIdQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler' => 'getGetPayPalOrderForCheckoutCompletedQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler' => 'getGetPayPalOrderForOrderConfirmationQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration' => 'getPayPalConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider' => 'getPayPalOrderProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration' => 'getPayPalPayLaterConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler' => 'getDeletePaymentTokenCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler' => 'getSavePaymentTokenCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => 'getPaymentMethodTokenEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService' => 'getPaymentMethodTokenServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler' => 'getGetCustomerPaymentTokensQueryHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\CheckTransitionPayPalCaptureStatusService' => 'getCheckTransitionPayPalCaptureStatusServiceService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber' => 'getPayPalCaptureEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler' => 'getRefundPayPalCaptureCommandHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => 'getPayPalRefundEventSubscriberService',
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Sdk\\PayPalSdkConfigurationBuilder' => 'getPayPalSdkConfigurationBuilderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule' => 'getConfigurationModuleService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule' => 'getContextModuleService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule' => 'getPaypalModuleService',
            'PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\StorePresenter' => 'getStorePresenterService',
            'PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider' => 'getPaymentMethodLogoProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository' => 'getPayPalCodeRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository' => 'getPayPalCustomerRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository' => 'getPayPalOrderRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository' => 'getPaymentTokenRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository' => 'getPsAccountRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository' => 'getPsCheckoutCartRepositoryService',
            'PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router' => 'getRouterService',
            'PrestaShop\\Module\\PrestashopCheckout\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PrestashopCheckout\\System\\SystemConfiguration' => 'getSystemConfigurationService',
            'PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations' => 'getTranslationsService',
            'PrestaShop\\Module\\PrestashopCheckout\\Validator\\BatchConfigurationValidator' => 'getBatchConfigurationValidatorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Validator\\FrontControllerValidator' => 'getFrontControllerValidatorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator' => 'getMerchantValidatorService',
            'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler' => 'getWebhookEventConfigurationUpdatedHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookHandler' => 'getWebhookHandlerService',
            'PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService' => 'getWebhookSecretTokenServiceService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber' => 'getApiErrorSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener' => 'getResponseListenerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnv2Service',
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => 'getFacebookEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => 'getPsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => 'getApiConversionHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => 'getCategoryMatchHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => 'getConfigurationHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => 'getEventBusProductHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => 'getMessengerHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => 'getPixelHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => 'getPrevalidationScanRefreshHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => 'getFbeFeatureManagerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => 'getModuleUpgradePresenterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => 'getAccessTokenProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => 'getEventDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => 'getFacebookDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => 'getFbeDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => 'getFbeFeatureDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => 'getGoogleCategoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => 'getMultishopDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => 'getPrevalidationScanCacheProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => 'getPrevalidationScanDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => 'getProductAvailabilityProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => 'getProductSyncReportProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => 'getGoogleCategoryRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapter2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBuffer2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnv3Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle' => 'getEnhancedConversionToggleService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider' => 'getUserDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandler2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegment2Service',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstallerService',
            'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory' => 'getClientFactoryService',
            'annotation_reader' => 'getAnnotationReaderService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'configuration' => 'getConfigurationService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService',
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => 'getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'hashing' => 'getHashingService',
            'prestashop.adapter.context_state_manager' => 'getPrestashop_Adapter_ContextStateManagerService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.guzzle.cache_storage' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService',
            'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' => 'getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_checkout.bus.command' => 'getPsCheckout_Bus_CommandService',
            'ps_checkout.cache.array.paypal.capture' => 'getPsCheckout_Cache_Array_Paypal_CaptureService',
            'ps_checkout.cache.array.paypal.order' => 'getPsCheckout_Cache_Array_Paypal_OrderService',
            'ps_checkout.cache.filesystem.paypal.capture' => 'getPsCheckout_Cache_Filesystem_Paypal_CaptureService',
            'ps_checkout.cache.filesystem.paypal.order' => 'getPsCheckout_Cache_Filesystem_Paypal_OrderService',
            'ps_checkout.cache.order' => 'getPsCheckout_Cache_OrderService',
            'ps_checkout.cache.paypal.capture' => 'getPsCheckout_Cache_Paypal_CaptureService',
            'ps_checkout.cache.paypal.order' => 'getPsCheckout_Cache_Paypal_OrderService',
            'ps_checkout.cache.pscheckoutcart' => 'getPsCheckout_Cache_PscheckoutcartService',
            'ps_checkout.db' => 'getPsCheckout_DbService',
            'ps_checkout.event.dispatcher.symfony' => 'getPsCheckout_Event_Dispatcher_SymfonyService',
            'ps_checkout.http.client' => 'getPsCheckout_Http_ClientService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.module.version' => 'getPsCheckout_Module_VersionService',
            'ps_checkout.repository.paypal.code' => 'getPsCheckout_Repository_Paypal_CodeService',
            'ps_checkout.tactician.bus' => 'getPsCheckout_Tactician_BusService',
            'ps_facebook' => 'getPsFacebookService',
            'ps_facebook.cache' => 'getPsFacebook_CacheService',
            'ps_facebook.context' => 'getPsFacebook_ContextService',
            'ps_facebook.controller' => 'getPsFacebook_ControllerService',
            'ps_facebook.cookie' => 'getPsFacebook_CookieService',
            'ps_facebook.currency' => 'getPsFacebook_CurrencyService',
            'ps_facebook.language' => 'getPsFacebook_LanguageService',
            'ps_facebook.link' => 'getPsFacebook_LinkService',
            'ps_facebook.shop' => 'getPsFacebook_ShopService',
            'ps_facebook.smarty' => 'getPsFacebook_SmartyService',
            'psxmarketingwithgoogle' => 'getPsxmarketingwithgoogleService',
            'psxmarketingwithgoogle.cart' => 'getPsxmarketingwithgoogle_CartService',
            'psxmarketingwithgoogle.context' => 'getPsxmarketingwithgoogle_ContextService',
            'psxmarketingwithgoogle.controller' => 'getPsxmarketingwithgoogle_ControllerService',
            'psxmarketingwithgoogle.cookie' => 'getPsxmarketingwithgoogle_CookieService',
            'psxmarketingwithgoogle.country' => 'getPsxmarketingwithgoogle_CountryService',
            'psxmarketingwithgoogle.currency' => 'getPsxmarketingwithgoogle_CurrencyService',
            'psxmarketingwithgoogle.customer' => 'getPsxmarketingwithgoogle_CustomerService',
            'psxmarketingwithgoogle.db' => 'getPsxmarketingwithgoogle_DbService',
            'psxmarketingwithgoogle.language' => 'getPsxmarketingwithgoogle_LanguageService',
            'psxmarketingwithgoogle.link' => 'getPsxmarketingwithgoogle_LinkService',
            'psxmarketingwithgoogle.shop' => 'getPsxmarketingwithgoogle_ShopService',
            'psxmarketingwithgoogle.smarty' => 'getPsxmarketingwithgoogle_SmartyService',
        ];
        $this->privates = [
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'configuration' => true,
            'context' => true,
            'db' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'employee' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'prestashop.adapter.module.repository.module_repository' => true,
            'prestashop.core.filter.front_end_object.cart' => true,
            'prestashop.core.filter.front_end_object.configuration' => true,
            'prestashop.core.filter.front_end_object.customer' => true,
            'prestashop.core.filter.front_end_object.main' => true,
            'prestashop.core.filter.front_end_object.product' => true,
            'prestashop.core.filter.front_end_object.product_collection' => true,
            'prestashop.core.filter.front_end_object.search_result_product' => true,
            'prestashop.core.filter.front_end_object.search_result_product_collection' => true,
            'prestashop.core.filter.front_end_object.shop' => true,
            'prestashop.database.naming_strategy' => true,
            'prestashop.translation.translator_language_loader' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
            'shop' => true,
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Doctrine\\Bundle\\DoctrineBundle\\Registry' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\Common\\Persistence\\ObjectManager' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Bridge\\Doctrine\\RegistryInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'annotation_reader' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'configuration' => true,
            'context' => true,
            'data_collector.doctrine' => true,
            'db' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.chain.default' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' => true,
            'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.metadata_factory' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'doctrine_cache.abstract.apc' => true,
            'doctrine_cache.abstract.apcu' => true,
            'doctrine_cache.abstract.array' => true,
            'doctrine_cache.abstract.chain' => true,
            'doctrine_cache.abstract.couchbase' => true,
            'doctrine_cache.abstract.file_system' => true,
            'doctrine_cache.abstract.memcache' => true,
            'doctrine_cache.abstract.memcached' => true,
            'doctrine_cache.abstract.mongodb' => true,
            'doctrine_cache.abstract.php_file' => true,
            'doctrine_cache.abstract.predis' => true,
            'doctrine_cache.abstract.redis' => true,
            'doctrine_cache.abstract.riak' => true,
            'doctrine_cache.abstract.sqlite3' => true,
            'doctrine_cache.abstract.void' => true,
            'doctrine_cache.abstract.wincache' => true,
            'doctrine_cache.abstract.xcache' => true,
            'doctrine_cache.abstract.zenddata' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'employee' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'prestashop.adapter.module.repository.module_repository' => true,
            'prestashop.core.filter.front_end_object.cart' => true,
            'prestashop.core.filter.front_end_object.configuration' => true,
            'prestashop.core.filter.front_end_object.customer' => true,
            'prestashop.core.filter.front_end_object.main' => true,
            'prestashop.core.filter.front_end_object.product' => true,
            'prestashop.core.filter.front_end_object.product_collection' => true,
            'prestashop.core.filter.front_end_object.search_result_product' => true,
            'prestashop.core.filter.front_end_object.search_result_product_collection' => true,
            'prestashop.core.filter.front_end_object.shop' => true,
            'prestashop.database.naming_strategy' => true,
            'prestashop.translation.translator_language_loader' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
            'shop' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Presenter\BillingPresenter' shared service.
     *
     * @return \PrestaShopCorp\Billing\Presenter\BillingPresenter
     */
    protected function getBillingPresenterService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Presenter\\BillingPresenter'] = new \PrestaShopCorp\Billing\Presenter\BillingPresenter(${($_ = isset($this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper']) ? $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] : $this->getBillingContextWrapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShopCorp\Billing\Services\BillingService' shared service.
     *
     * @return \PrestaShopCorp\Billing\Services\BillingService
     */
    protected function getBillingServiceService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Services\\BillingService'] = new \PrestaShopCorp\Billing\Services\BillingService(${($_ = isset($this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper']) ? $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] : $this->getBillingContextWrapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getCacheDirectoryProviderService()
    {
        return $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter
     */
    protected function getLanguageAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Adapter\\LanguageAdapter'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Builder\Configuration\CheckoutClientConfigurationBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\CheckoutClientConfigurationBuilder
     */
    protected function getCheckoutClientConfigurationBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\CheckoutClientConfigurationBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] : $this->getLoggerConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Builder\Configuration\MaaslandHttpClientConfigurationBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\MaaslandHttpClientConfigurationBuilder
     */
    protected function getMaaslandHttpClientConfigurationBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Configuration\MaaslandHttpClientConfigurationBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] : $this->getLoggerConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder
     */
    protected function getModuleLinkBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker
     */
    protected function getCheckoutCheckerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CheckoutChecker(${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler
     */
    protected function getCancelCheckoutCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\CancelCheckoutCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler
     */
    protected function getSaveCheckoutCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler
     */
    protected function getSavePayPalOrderStatusCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SavePayPalOrderStatusCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler
     */
    protected function getUpdatePaymentMethodSelectedCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\UpdatePaymentMethodSelectedCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber
     */
    protected function getCheckoutEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\EventSubscriber\CheckoutEventSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker'] : $this->getCheckoutCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.bus.command']) ? $this->services['ps_checkout.bus.command'] : $this->getPsCheckout_Bus_CommandService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory
     */
    protected function getTacticianCommandBusFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'}, ['PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\AddOrderPaymentCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\CreateOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Command\\UpdateOrderStatusCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\Command\\UpdateOrderMatriceCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CreatePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\UpdatePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\CapturePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\CancelCheckoutCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\CancelCheckoutCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SaveCheckoutCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SaveCheckoutCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\SavePayPalOrderStatusCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\SavePayPalOrderStatusCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\Command\\UpdatePaymentMethodSelectedCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CommandHandler\\UpdatePaymentMethodSelectedCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\Command\\RefundPayPalCaptureCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentCompletedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentDeniedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentPendingQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentRefundedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForPaymentReversedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\Order\\Query\\GetOrderForApprovalReversedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCartIdQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetCurrentPayPalOrderStatusQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForCheckoutCompletedQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Query\\GetPayPalOrderForOrderConfirmationQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Command\\SavePaymentTokenCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Command\\DeletePaymentTokenCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\Command\\SavePayPalCustomerCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\Command\\SavePayPalOrderCommand' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQueryHandler', 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQuery' => 'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQueryHandler']);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor
     */
    protected function getBatchConfigurationProcessorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\BatchConfigurationProcessor'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\BatchConfigurationProcessor(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration
     */
    protected function getPrestaShopConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver'] : $this->getPrestaShopConfigurationOptionsResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver
     */
    protected function getPrestaShopConfigurationOptionsResolverService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfigurationOptionsResolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager
     */
    protected function getContextStateManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager'] = new \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext
     */
    protected function getPrestaShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Environment\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] = new \PrestaShop\Module\PrestashopCheckout\Environment\Env(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader
     */
    protected function getEnvLoaderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\EnvLoader'] = new \PrestaShop\Module\PrestashopCheckout\Environment\EnvLoader();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter
     */
    protected function getSymfonyEventDispatcherAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] = new \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherAdapter(${($_ = isset($this->services['ps_checkout.event.dispatcher.symfony']) ? $this->services['ps_checkout.event.dispatcher.symfony'] : $this->getPsCheckout_Event_Dispatcher_SymfonyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory
     */
    protected function getSymfonyEventDispatcherFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory'] = new \PrestaShop\Module\PrestashopCheckout\Event\SymfonyEventDispatcherFactory(${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] : $this->getLoggerConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration
     */
    protected function getExpressCheckoutConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection
     */
    protected function getFundingSourceCollectionService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder'] : $this->getFundingSourceCollectionBuilderService()) && false ?: '_'}->create());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder
     */
    protected function getFundingSourceCollectionBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration'] : $this->getFundingSourceConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration
     */
    protected function getFundingSourceConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository'] : $this->getFundingSourceConfigurationRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository
     */
    protected function getFundingSourceConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint
     */
    protected function getFundingSourceEligibilityConstraintService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter
     */
    protected function getFundingSourcePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider'] : $this->getPaymentMethodLogoProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider
     */
    protected function getFundingSourceProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceCollectionBuilder'] : $this->getFundingSourceCollectionBuilderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourcePresenter'] : $this->getFundingSourcePresenterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider
     */
    protected function getFundingSourceTranslationProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient
     */
    protected function getCheckoutHttpClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient'] = new \PrestaShop\Module\PrestashopCheckout\Http\CheckoutHttpClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\CheckoutClientConfigurationBuilder'] : $this->getCheckoutClientConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory
     */
    protected function getHttpClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Http\MaaslandHttpClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\MaaslandHttpClient
     */
    protected function getMaaslandHttpClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] = new \PrestaShop\Module\PrestashopCheckout\Http\MaaslandHttpClient(${($_ = isset($this->services['ps_checkout.http.client']) ? $this->services['ps_checkout.http.client'] : $this->getPsCheckout_Http_ClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration
     */
    protected function getLoggerConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory
     */
    protected function getLoggerDirectoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html');
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory
     */
    protected function getLoggerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.logger.handler']) ? $this->services['ps_checkout.logger.handler'] : $this->getPsCheckout_Logger_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename
     */
    protected function getLoggerFilenameService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory
     */
    protected function getLoggerHandlerFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html'))) && false ?: '_'}->getPath(), ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] : $this->getLoggerFilenameService()) && false ?: '_'}->get(), ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] : $this->getLoggerConfigurationService()) && false ?: '_'}->getMaxFiles(), ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerConfiguration'] : $this->getLoggerConfigurationService()) && false ?: '_'}->getLevel());
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep
     */
    protected function getLiveStepService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner
     */
    protected function getValueBannerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler
     */
    protected function getAddOrderPaymentCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\AddOrderPaymentCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\AddOrderPaymentCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler
     */
    protected function getCreateOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\CreateOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\CreateOrderCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\ContextStateManager'] = new \PrestaShop\Module\PrestashopCheckout\Context\ContextStateManager())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler
     */
    protected function getUpdateOrderStatusCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\CommandHandler\\UpdateOrderStatusCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\CommandHandler\UpdateOrderStatusCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber
     */
    protected function getOrderEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\Order\EventSubscriber\OrderEventSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler
     */
    protected function getUpdateOrderMatriceCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Matrice\\CommandHandler\\UpdateOrderMatriceCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\Matrice\CommandHandler\UpdateOrderMatriceCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler
     */
    protected function getGetOrderForApprovalReversedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForApprovalReversedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForApprovalReversedQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler
     */
    protected function getGetOrderForPaymentCompletedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentCompletedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentCompletedQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler
     */
    protected function getGetOrderForPaymentDeniedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentDeniedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentDeniedQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler
     */
    protected function getGetOrderForPaymentPendingQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentPendingQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentPendingQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler
     */
    protected function getGetOrderForPaymentRefundedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentRefundedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentRefundedQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler
     */
    protected function getGetOrderForPaymentReversedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\QueryHandler\\GetOrderForPaymentReversedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\Order\QueryHandler\GetOrderForPaymentReversedQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount
     */
    protected function getCheckOrderAmountService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper
     */
    protected function getOrderStateMapperService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] = new \PrestaShop\Module\PrestashopCheckout\Order\State\Service\OrderStateMapper(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\AppleSetup' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\AppleSetup
     */
    protected function getAppleSetupService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\AppleSetup'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\AppleSetup(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\System\\SystemConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\System\\SystemConfiguration'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\System\\SystemConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\System\SystemConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\Builder\ApplePayPaymentRequestBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\Builder\ApplePayPaymentRequestBuilder
     */
    protected function getApplePayPaymentRequestBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestBuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\Builder\ApplePayPaymentRequestBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] : $this->getTranslationsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\Query\GetApplePayPaymentRequestQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\Query\GetApplePayPaymentRequestQueryHandler
     */
    protected function getGetApplePayPaymentRequestQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Query\\GetApplePayPaymentRequestQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\ApplePay\Query\GetApplePayPaymentRequestQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\ApplePay\\Builder\\ApplePayPaymentRequestBuilder'] : $this->getApplePayPaymentRequestBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler
     */
    protected function getSavePayPalCustomerCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Customer\\CommandHandler\\SavePayPalCustomerCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Customer\CommandHandler\SavePayPalCustomerCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\GooglePay\Builder\GooglePayTransactionInfoBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\GooglePay\Builder\GooglePayTransactionInfoBuilder
     */
    protected function getGooglePayTransactionInfoBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Builder\\GooglePayTransactionInfoBuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\GooglePay\Builder\GooglePayTransactionInfoBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] : $this->getTranslationsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\GooglePay\Query\GetGooglePayTransactionInfoQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\GooglePay\Query\GetGooglePayTransactionInfoQueryHandler
     */
    protected function getGetGooglePayTransactionInfoQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Query\\GetGooglePayTransactionInfoQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\GooglePay\Query\GetGooglePayTransactionInfoQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Builder\\GooglePayTransactionInfoBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\GooglePay\\Builder\\GooglePayTransactionInfoBuilder'] : $this->getGooglePayTransactionInfoBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\OAuthService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\OAuthService
     */
    protected function getOAuthServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\OAuthService(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient'] : $this->getCheckoutHttpClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler
     */
    protected function getGetPayPalGetUserIdTokenQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\Query\\GetPayPalGetUserIdTokenQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\OAuth\Query\GetPayPalGetUserIdTokenQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\OAuth\\OAuthService'] : $this->getOAuthServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService
     */
    protected function getCheckTransitionPayPalOrderStatusServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler
     */
    protected function getCapturePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CapturePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CapturePayPalOrderCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] : $this->getMaaslandHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler
     */
    protected function getCreatePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\CreatePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\CreatePayPalOrderCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] : $this->getMaaslandHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] : $this->getPayPalCustomerRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler
     */
    protected function getSavePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\SavePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\SavePayPalOrderCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler
     */
    protected function getUpdatePayPalOrderCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CommandHandler\\UpdatePayPalOrderCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CommandHandler\UpdatePayPalOrderCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] : $this->getMaaslandHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber
     */
    protected function getPayPalOrderEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\EventSubscriber\PayPalOrderEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\CheckoutChecker'] : $this->getCheckoutCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\CheckTransitionPayPalOrderStatusService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\CheckTransitionPayPalOrderStatusService())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus
     */
    protected function getPayPalOrderStatusService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderStatus'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderStatus();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder
     */
    protected function getPayPalOrderSummaryViewBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderSummaryViewBuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderSummaryViewBuilder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider'] : $this->getPayPalOrderTranslationProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider
     */
    protected function getPayPalOrderTranslationProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\PayPalOrderTranslationProvider'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\PayPalOrderTranslationProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] : $this->getTranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceTranslationProvider'] : $this->getFundingSourceTranslationProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler
     */
    protected function getGetCurrentPayPalOrderStatusQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetCurrentPayPalOrderStatusQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetCurrentPayPalOrderStatusQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler
     */
    protected function getGetPayPalOrderForCartIdQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCartIdQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCartIdQueryHandler(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] : $this->getPsCheckoutCartRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler
     */
    protected function getGetPayPalOrderForCheckoutCompletedQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForCheckoutCompletedQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForCheckoutCompletedQueryHandler(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler
     */
    protected function getGetPayPalOrderForOrderConfirmationQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\QueryHandler\\GetPayPalOrderForOrderConfirmationQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\QueryHandler\GetPayPalOrderForOrderConfirmationQueryHandler(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration
     */
    protected function getPayPalConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider
     */
    protected function getPayPalOrderProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration
     */
    protected function getPayPalPayLaterConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayLaterConfiguration(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\DeletePaymentTokenCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\DeletePaymentTokenCommandHandler
     */
    protected function getDeletePaymentTokenCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\DeletePaymentTokenCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\DeletePaymentTokenCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService'] : $this->getPaymentMethodTokenServiceService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\SavePaymentTokenCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\SavePaymentTokenCommandHandler
     */
    protected function getSavePaymentTokenCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\CommandHandler\\SavePaymentTokenCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\CommandHandler\SavePaymentTokenCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\PaymentMethodTokenService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\PaymentMethodTokenService
     */
    protected function getPaymentMethodTokenServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\PaymentMethodTokenService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\PaymentMethodTokenService(NULL, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\CheckoutHttpClient'] : $this->getCheckoutHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\Query\GetCustomerPaymentTokensQueryHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\Query\GetCustomerPaymentTokensQueryHandler
     */
    protected function getGetCustomerPaymentTokensQueryHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\Query\\GetCustomerPaymentTokensQueryHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\Query\GetCustomerPaymentTokensQueryHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService
     */
    protected function getCheckTransitionPayPalCaptureStatusServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\CheckTransitionPayPalCaptureStatusService'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\CheckTransitionPayPalCaptureStatusService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber
     */
    protected function getPayPalCaptureEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Capture\EventSubscriber\PayPalCaptureEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\Service\\CheckOrderAmount'] = new \PrestaShop\Module\PrestashopCheckout\Order\Service\CheckOrderAmount())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.capture']) ? $this->services['ps_checkout.cache.paypal.capture'] : $this->getPsCheckout_Cache_Paypal_CaptureService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler
     */
    protected function getRefundPayPalCaptureCommandHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\CommandHandler\\RefundPayPalCaptureCommandHandler'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\CommandHandler\RefundPayPalCaptureCommandHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\MaaslandHttpClient'] : $this->getMaaslandHttpClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherAdapter'] : $this->getSymfonyEventDispatcherAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder
     */
    protected function getPayPalSdkConfigurationBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Sdk\\PayPalSdkConfigurationBuilder'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Sdk\PayPalSdkConfigurationBuilder(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] : $this->getPayPalPayLaterConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceConfigurationRepository'] : $this->getFundingSourceConfigurationRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] : $this->getExpressCheckoutConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger']) ? $this->services['ps_checkout.logger'] : $this->getPsCheckout_LoggerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceEligibilityConstraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule
     */
    protected function getConfigurationModuleService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] : $this->getPayPalPayLaterConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] : $this->getExpressCheckoutConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\FundingSource\\FundingSourceProvider'] : $this->getFundingSourceProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule
     */
    protected function getContextModuleService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->module_key, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\LiveStep'] : $this->getLiveStepService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\OnBoarding\\Step\\ValueBanner'] : $this->getValueBannerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] : $this->getTranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] : $this->getShopContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\ModuleLink\\ModuleLinkBuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\ModuleLink\ModuleLinkBuilder())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule
     */
    protected function getPaypalModuleService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter
     */
    protected function getStorePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\StorePresenter'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ContextModule'] : $this->getContextModuleService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\PaypalModule'] : $this->getPaypalModuleService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Presenter\\Store\\Modules\\ConfigurationModule'] : $this->getConfigurationModuleService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Provider\PaymentMethodLogoProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Provider\PaymentMethodLogoProvider
     */
    protected function getPaymentMethodLogoProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Provider\\PaymentMethodLogoProvider'] = new \PrestaShop\Module\PrestashopCheckout\Provider\PaymentMethodLogoProvider(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\CountryRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPayPalCodeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCodeRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PayPalCustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCustomerRepository
     */
    protected function getPayPalCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalCustomerRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCustomerRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PayPalOrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalOrderRepository
     */
    protected function getPayPalOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalOrderRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository
     */
    protected function getPaymentTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PaymentTokenRepository(${($_ = isset($this->services['ps_checkout.db']) ? $this->services['ps_checkout.db'] : $this->getPsCheckout_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository
     */
    protected function getPsAccountRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->getPsAccounts_FacadeService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository
     */
    protected function getPsCheckoutCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsCheckoutCartRepository'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository(${($_ = isset($this->services['ps_checkout.cache.pscheckoutcart']) ? $this->services['ps_checkout.cache.pscheckoutcart'] : ($this->services['ps_checkout.cache.pscheckoutcart'] = new \Symfony\Component\Cache\Simple\ArrayCache())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Routing\Router' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Routing\Router
     */
    protected function getRouterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Routing\\Router'] = new \PrestaShop\Module\PrestashopCheckout\Routing\Router();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\ShopContext'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Environment\\Env'] : $this->getEnvService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Shop\\ShopProvider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\System\SystemConfiguration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\System\SystemConfiguration
     */
    protected function getSystemConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\System\\SystemConfiguration'] = new \PrestaShop\Module\PrestashopCheckout\System\SystemConfiguration();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Translations\Translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations
     */
    protected function getTranslationsService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Translations\\Translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator
     */
    protected function getBatchConfigurationValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\BatchConfigurationValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\BatchConfigurationValidator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator
     */
    protected function getFrontControllerValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\FrontControllerValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator'] : $this->getMerchantValidatorService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\ExpressCheckout\\ExpressCheckoutConfiguration'] : $this->getExpressCheckoutConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalPayLaterConfiguration'] : $this->getPayPalPayLaterConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator
     */
    protected function getMerchantValidatorService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Validator\\MerchantValidator'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalConfiguration'] : $this->getPayPalConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PsAccountRepository'] : $this->getPsAccountRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Context\\PrestaShopContext'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler
     */
    protected function getWebhookEventConfigurationUpdatedHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookEventConfigurationUpdatedHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler
     */
    protected function getWebhookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookHandler'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService'] : $this->getWebhookSecretTokenServiceService()) && false ?: '_'}, [0 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookEventConfigurationUpdatedHandler'] : $this->getWebhookEventConfigurationUpdatedHandlerService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService
     */
    protected function getWebhookSecretTokenServiceService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Webhook\\WebhookSecretTokenService'] = new \PrestaShop\Module\PrestashopCheckout\Webhook\WebhookSecretTokenService(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Configuration\\PrestaShopConfiguration'] : $this->getPrestaShopConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient
     */
    protected function getFacebookCategoryClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookCategoryClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookCategoryClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient
     */
    protected function getFacebookClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\Client\FacebookClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] : $this->getFacebookEssentialsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] : $this->getAccessTokenProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] : $this->getConfigurationHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getAccountSuspendedSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber
     */
    protected function getApiErrorSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\ApiErrorSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\API\ResponseListener' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] = new \PrestaShop\Module\PrestashopFacebook\API\ResponseListener([0 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] : $this->getAccountSuspendedSubscriberService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\ApiErrorSubscriber'] : $this->getApiErrorSubscriberService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter(${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getToolsAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getEnv2Service()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] : $this->getApiConversionHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] : $this->getPixelHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] : $this->getEventDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getFacebookEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory(${($_ = isset($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory']) ? $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] : ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'}, ${($_ = isset($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory']) ? $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] : ($this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getApiConversionHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getCategoryMatchHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getConfigurationHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getEventBusProductHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getMessengerHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler(${($_ = isset($this->services['ps_facebook.language']) ? $this->services['ps_facebook.language'] : $this->getPsFacebook_LanguageService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPixelHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrevalidationScanRefreshHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getFbeFeatureManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getModuleUpgradePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getAccessTokenProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.controller']) ? $this->services['ps_facebook.controller'] : $this->getPsFacebook_ControllerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository())) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] : $this->getGoogleCategoryProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getFacebookDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getFbeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getFbeFeatureDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\Client\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getGoogleCategoryProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getMultishopDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] : $this->getSegmentService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrevalidationScanCacheProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.cache']) ? $this->services['ps_facebook.cache'] : $this->getPsFacebook_CacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrevalidationScanDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getProductAvailabilityProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getProductSyncReportProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\ResponseListener'] : $this->getResponseListenerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getGoogleCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopFacebook\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPsAccountsPresenterService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = \PrestaShop\Module\PsAccounts\ServiceProvider\StaticProvider::provide('PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getUserTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = \PrestaShop\Module\PsAccounts\ServiceProvider\StaticProvider::provide('PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsAccountsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPsAccountsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] = \PrestaShop\Module\PsAccounts\ServiceProvider\StaticProvider::provide('PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsBillingService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPsBillingServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService'] = \PrestaShop\Module\PsAccounts\ServiceProvider\StaticProvider::provide('PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService');
    }

    /**
     * Gets the public 'PrestaShop\Module\Ps_facebook\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapter2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(${($_ = isset($this->services['psxmarketingwithgoogle.shop']) ? $this->services['psxmarketingwithgoogle.shop'] : $this->getPsxmarketingwithgoogle_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBuffer2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnv3Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle
     */
    protected function getEnhancedConversionToggleService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\EnhancedConversionToggle'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\EnhancedConversionToggle(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider
     */
    protected function getUserDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Conversion\\UserDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Conversion\UserDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.customer']) ? $this->services['psxmarketingwithgoogle.customer'] : $this->getPsxmarketingwithgoogle_CustomerService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.cart']) ? $this->services['psxmarketingwithgoogle.cart'] : $this->getPsxmarketingwithgoogle_CartService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandler2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler
     */
    protected function getRemarketingHookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] : ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle']) ? $this->services['psxmarketingwithgoogle'] : $this->getPsxmarketingwithgoogleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider
     */
    protected function getCartEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider
     */
    protected function getPageViewEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider
     */
    protected function getPurchaseEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] : $this->getProductDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] : $this->getLanguageRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] : $this->getCountryRepository2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] : $this->getVerificationTagRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository
     */
    protected function getAttributesRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CategoryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.country']) ? $this->services['psxmarketingwithgoogle.country'] : $this->getPsxmarketingwithgoogle_CountryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapter2Service()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(${($_ = isset($this->services['psxmarketingwithgoogle.currency']) ? $this->services['psxmarketingwithgoogle.currency'] : $this->getPsxmarketingwithgoogle_CurrencyService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository(${($_ = isset($this->services['psxmarketingwithgoogle.shop']) ? $this->services['psxmarketingwithgoogle.shop'] : $this->getPsxmarketingwithgoogle_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ManufacturerRepository(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository
     */
    protected function getVerificationTagRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->getPsxmarketingwithgoogle_DbService()) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment
     */
    protected function getSegment2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->getPsxmarketingwithgoogle_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] : ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
    }

    /**
     * Gets the public 'Prestashop\ModuleLibGuzzleAdapter\ClientFactory' shared service.
     *
     * @return \Prestashop\ModuleLibGuzzleAdapter\ClientFactory
     */
    protected function getClientFactoryService()
    {
        return $this->services['Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory'] = new \Prestashop\ModuleLibGuzzleAdapter\ClientFactory();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['const' => function () {
            return ${($_ = isset($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor']) ? $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] : ($this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor())) && false ?: '_'};
        }]);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger(NULL, NULL));
        $b->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $a->setSQLLogger($b);

        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => 'admin-mysql_db', 'port' => '3306', 'dbname' => 'BE_184429', 'user' => 'root', 'password' => 'student', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader())) && false ?: '_'};
        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/modules/ps_accounts/src/Entity']);
        $d->addExcludePaths([0 => '/var/www/html/modules/ps_accounts/src/Entity/index.php']);
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/modules/ps_checkout/src/Entity']);
        $e->addExcludePaths([0 => '/var/www/html/modules/ps_checkout/src/Entity/index.php']);
        $f = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/modules/productcomments/src/Entity']);
        $f->addExcludePaths([0 => '/var/www/html/modules/productcomments/src/Entity/index.php']);

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/var/www/html/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $b->addDriver($d, 'PrestaShop\\Module\\PsAccounts\\Entity');
        $b->addDriver($e, 'PrestaShop\\Module\\PrestashopCheckout\\Entity');
        $b->addDriver($f, 'PrestaShop\\Module\\ProductComment\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()) && false ?: '_'});
        $a->setQueryCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()) && false ?: '_'});
        $a->setResultCacheImpl(${($_ = isset($this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result']) ? $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] : $this->getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()) && false ?: '_'});
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir('/var/www/html/var/cache/dev//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(${($_ = isset($this->services['prestashop.database.naming_strategy']) ? $this->services['prestashop.database.naming_strategy'] : ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))) && false ?: '_'});
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this))) && false ?: '_'});
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');
        $a->addEntityNamespace('ModulepsCheckout', 'PrestaShop\\Module\\PrestashopCheckout\\Entity');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $a);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.context_state_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getPrestashop_Adapter_ContextStateManagerService()
    {
        return $this->services['prestashop.adapter.context_state_manager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop) ? (${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true);
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Doctrine\Common\Cache\FilesystemCache((${($_ = isset($this->services['prestashop.adapter.environment']) ? $this->services['prestashop.adapter.environment'] : ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true))) && false ?: '_'}->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_storage' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheStorage
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] = new \GuzzleHttp\Subscriber\Cache\CacheStorage(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'}, 'circuit_breaker_', 86400);
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber' shared service.
     *
     * @return \GuzzleHttp\Subscriber\Cache\CacheSubscriber
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber'] = ${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] : ($this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory())) && false ?: '_'}->create(${($_ = isset($this->services['prestashop.core.circuit_breaker.guzzle.cache_storage']) ? $this->services['prestashop.core.circuit_breaker.guzzle.cache_storage'] : $this->getPrestashop_Core_CircuitBreaker_Guzzle_CacheStorageService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory' shared service.
     *
     * @return \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_Guzzle_CacheSubscriberFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.guzzle.cache_subscriber_factory'] = new \PrestaShopBundle\Cache\Factory\CacheSubscriberFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(${($_ = isset($this->services['prestashop.core.circuit_breaker.doctrine_cache']) ? $this->services['prestashop.core.circuit_breaker.doctrine_cache'] : $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/var/www/html/var/cache/dev//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(${($_ = isset($this->services['prestashop.core.localization.cldr.cache.adapter']) ? $this->services['prestashop.core.localization.cldr.cache.adapter'] : ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/var/www/html/var/cache/dev//localization'))) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_reference']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(${($_ = isset($this->services['prestashop.core.localization.cldr.reader']) ? $this->services['prestashop.core.localization.cldr.reader'] : ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_cache']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_data_source']) ? $this->services['prestashop.core.localization.cldr.locale_data_source'] : $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.cache']) ? $this->services['prestashop.core.localization.currency.middleware.cache'] : $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.middleware.installed']) ? $this->services['prestashop.core.localization.currency.middleware.installed'] : $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(${($_ = isset($this->services['prestashop.core.localization.cache.adapter']) ? $this->services['prestashop.core.localization.cache.adapter'] : ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.database']) ? $this->services['prestashop.core.localization.currency.middleware.database'] : $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.reference']) ? $this->services['prestashop.core.localization.currency.middleware.reference'] : $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(${($_ = isset($this->services['prestashop.core.localization.currency.datasource']) ? $this->services['prestashop.core.localization.currency.datasource'] : $this->getPrestashop_Core_Localization_Currency_DatasourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ${($_ = isset($this->services['prestashop.core.localization.locale.repository']) ? $this->services['prestashop.core.localization.locale.repository'] : $this->getPrestashop_Core_Localization_Locale_RepositoryService()) && false ?: '_'}->getLocale(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.repository']) ? $this->services['prestashop.core.localization.currency.repository'] : $this->getPrestashop_Core_Localization_Currency_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'ps_', ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['ps_accounts.installer']) ? $this->services['ps_accounts.installer'] : ($this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('4.0.0');
    }

    /**
     * Gets the public 'ps_checkout.bus.command' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusAdapter
     */
    protected function getPsCheckout_Bus_CommandService()
    {
        return $this->services['ps_checkout.bus.command'] = new \PrestaShop\Module\PrestashopCheckout\CommandBus\TacticianCommandBusAdapter(${($_ = isset($this->services['ps_checkout.tactician.bus']) ? $this->services['ps_checkout.tactician.bus'] : $this->getPsCheckout_Tactician_BusService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.cache.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_OrderService()
    {
        return $this->services['ps_checkout.cache.order'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ChainCache
     */
    protected function getPsCheckout_Cache_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.paypal.capture'] = new \Symfony\Component\Cache\Simple\ChainCache([0 => ${($_ = isset($this->services['ps_checkout.cache.array.paypal.capture']) ? $this->services['ps_checkout.cache.array.paypal.capture'] : ($this->services['ps_checkout.cache.array.paypal.capture'] = new \Symfony\Component\Cache\Simple\ArrayCache())) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.cache.filesystem.paypal.capture']) ? $this->services['ps_checkout.cache.filesystem.paypal.capture'] : $this->getPsCheckout_Cache_Filesystem_Paypal_CaptureService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Order\Cache\PayPalOrderCache
     */
    protected function getPsCheckout_Cache_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.paypal.order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Order\Cache\PayPalOrderCache([0 => ${($_ = isset($this->services['ps_checkout.cache.array.paypal.order']) ? $this->services['ps_checkout.cache.array.paypal.order'] : ($this->services['ps_checkout.cache.array.paypal.order'] = new \Symfony\Component\Cache\Simple\ArrayCache())) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.cache.filesystem.paypal.order']) ? $this->services['ps_checkout.cache.filesystem.paypal.order'] : $this->getPsCheckout_Cache_Filesystem_Paypal_OrderService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.cache.pscheckoutcart' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_PscheckoutcartService()
    {
        return $this->services['ps_checkout.cache.pscheckoutcart'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the public 'ps_checkout.db' shared service.
     *
     * @return \Db
     */
    protected function getPsCheckout_DbService()
    {
        return $this->services['ps_checkout.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_checkout.http.client' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Http\HttpClientInterface
     */
    protected function getPsCheckout_Http_ClientService()
    {
        return $this->services['ps_checkout.http.client'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Http\\HttpClientFactory'] = new \PrestaShop\Module\PrestashopCheckout\Http\HttpClientFactory())) && false ?: '_'}->create(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Builder\\Configuration\\MaaslandHttpClientConfigurationBuilder'] : $this->getMaaslandHttpClientConfigurationBuilderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFactory'] : $this->getLoggerFactoryService()) && false ?: '_'}->build(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.handler' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerHandlerFactory'] : $this->getLoggerHandlerFactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \Ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the public 'ps_checkout.module.version' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Version\Version
     */
    protected function getPsCheckout_Module_VersionService()
    {
        return $this->services['ps_checkout.module.version'] = \PrestaShop\Module\PrestashopCheckout\Version\Version::buildFromString(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->version);
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.code' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPsCheckout_Repository_Paypal_CodeService()
    {
        return $this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'ps_facebook' shared service.
     *
     * @return \Ps_facebook
     */
    protected function getPsFacebookService()
    {
        return $this->services['ps_facebook'] = \Module::getInstanceByName('ps_facebook');
    }

    /**
     * Gets the public 'ps_facebook.cache' shared service.
     *
     * @return \string
     */
    protected function getPsFacebook_CacheService()
    {
        return $this->services['ps_facebook.cache'] = \PrestaShop\Module\PrestashopFacebook\Factory\CacheFactory::getCachePath();
    }

    /**
     * Gets the public 'ps_facebook.context' shared service.
     *
     * @return \Context
     */
    protected function getPsFacebook_ContextService()
    {
        return $this->services['ps_facebook.context'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_facebook.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsFacebook_ControllerService()
    {
        return $this->services['ps_facebook.controller'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_facebook.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsFacebook_CookieService()
    {
        return $this->services['ps_facebook.cookie'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_facebook.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsFacebook_CurrencyService()
    {
        return $this->services['ps_facebook.currency'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_facebook.language' shared service.
     *
     * @return \Language
     */
    protected function getPsFacebook_LanguageService()
    {
        return $this->services['ps_facebook.language'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_facebook.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_LinkService()
    {
        return $this->services['ps_facebook.link'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_facebook.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_ShopService()
    {
        return $this->services['ps_facebook.shop'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_facebook.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsFacebook_SmartyService()
    {
        return $this->services['ps_facebook.smarty'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle' shared service.
     *
     * @return \PsxMarketingWithGoogle
     */
    protected function getPsxmarketingwithgoogleService()
    {
        return $this->services['psxmarketingwithgoogle'] = \Module::getInstanceByName('psxmarketingwithgoogle');
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cart' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CartService()
    {
        return $this->services['psxmarketingwithgoogle.cart'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCart();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.context' shared service.
     *
     * @return \Context
     */
    protected function getPsxmarketingwithgoogle_ContextService()
    {
        return $this->services['psxmarketingwithgoogle.context'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsxmarketingwithgoogle_ControllerService()
    {
        return $this->services['psxmarketingwithgoogle.controller'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsxmarketingwithgoogle_CookieService()
    {
        return $this->services['psxmarketingwithgoogle.cookie'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.country' shared service.
     *
     * @return \Country
     */
    protected function getPsxmarketingwithgoogle_CountryService()
    {
        return $this->services['psxmarketingwithgoogle.country'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCountry();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CurrencyService()
    {
        return $this->services['psxmarketingwithgoogle.currency'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.customer' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CustomerService()
    {
        return $this->services['psxmarketingwithgoogle.customer'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCustomer();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.db' shared service.
     *
     * @return \Db
     */
    protected function getPsxmarketingwithgoogle_DbService()
    {
        return $this->services['psxmarketingwithgoogle.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.language' shared service.
     *
     * @return \Language
     */
    protected function getPsxmarketingwithgoogle_LanguageService()
    {
        return $this->services['psxmarketingwithgoogle.language'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_LinkService()
    {
        return $this->services['psxmarketingwithgoogle.link'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_ShopService()
    {
        return $this->services['psxmarketingwithgoogle.shop'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsxmarketingwithgoogle_SmartyService()
    {
        return $this->services['psxmarketingwithgoogle.smarty'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->services['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the private 'PrestaShopCorp\Billing\Wrappers\BillingContextWrapper' shared service.
     *
     * @return \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper
     */
    protected function getBillingContextWrapperService()
    {
        return $this->services['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\EventSubscriber\PaymentMethodTokenEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\EventSubscriber\PaymentMethodTokenEventSubscriber
     */
    protected function getPaymentMethodTokenEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PaymentToken\EventSubscriber\PaymentMethodTokenEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PayPalOrderRepository'] : $this->getPayPalOrderRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Repository\\PaymentTokenRepository'] : $this->getPaymentTokenRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber
     */
    protected function getPayPalRefundEventSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\Payment\Refund\EventSubscriber\PayPalRefundEventSubscriber(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\State\\Service\\OrderStateMapper'] : $this->getOrderStateMapperService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PayPalOrderProvider'] : $this->getPayPalOrderProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the private 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the private 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, []);
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.metadata']) ? $this->services['cache.doctrine.orm.default.metadata'] : ($this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.query']) ? $this->services['cache.doctrine.orm.default.query'] : ($this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.cache.provider.cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getDoctrine_Orm_Cache_Provider_Cache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['doctrine.orm.cache.provider.cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\DoctrineProvider(${($_ = isset($this->services['cache.doctrine.orm.default.result']) ? $this->services['cache.doctrine.orm.default.result'] : ($this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the private 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the private 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the private 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the private 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the private 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(${($_ = isset($this->services['prestashop.core.filter.front_end_object.product_collection']) ? $this->services['prestashop.core.filter.front_end_object.product_collection'] : $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()) && false ?: '_'});
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.cart']) ? $this->services['prestashop.core.filter.front_end_object.cart'] : $this->getPrestashop_Core_Filter_FrontEndObject_CartService()) && false ?: '_'}, 'customer' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.customer']) ? $this->services['prestashop.core.filter.front_end_object.customer'] : ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())) && false ?: '_'}, 'shop' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.shop']) ? $this->services['prestashop.core.filter.front_end_object.shop'] : ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())) && false ?: '_'}, 'configuration' => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.configuration']) ? $this->services['prestashop.core.filter.front_end_object.configuration'] : ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter())) && false ?: '_'}]);
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.product']) ? $this->services['prestashop.core.filter.front_end_object.product'] : ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter())) && false ?: '_'}]);

        return $instance;
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ${($_ = isset($this->services['prestashop.core.filter.front_end_object.search_result_product']) ? $this->services['prestashop.core.filter.front_end_object.search_result_product'] : ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter())) && false ?: '_'}]);

        return $instance;
    }

    /**
     * Gets the private 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the private 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the private 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(${($_ = isset($this->services['prestashop.adapter.module.repository.module_repository']) ? $this->services['prestashop.adapter.module.repository.module_repository'] : ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository())) && false ?: '_'});
    }

    /**
     * Gets the private 'ps_checkout.cache.array.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_Array_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.array.paypal.capture'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the private 'ps_checkout.cache.array.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\ArrayCache
     */
    protected function getPsCheckout_Cache_Array_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.array.paypal.order'] = new \Symfony\Component\Cache\Simple\ArrayCache();
    }

    /**
     * Gets the private 'ps_checkout.cache.filesystem.paypal.capture' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Filesystem_Paypal_CaptureService()
    {
        return $this->services['ps_checkout.cache.filesystem.paypal.capture'] = new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-capture', 3600, ${($_ = isset($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider']) ? $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] : ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the private 'ps_checkout.cache.filesystem.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Filesystem_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.filesystem.paypal.order'] = new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-orders', 3600, ${($_ = isset($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider']) ? $this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] : ($this->services['PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.8.11', '/var/www/html', true))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the private 'ps_checkout.event.dispatcher.symfony' shared service.
     *
     * @return \Symfony\Component\EventDispatcher\EventDispatcherInterface
     */
    protected function getPsCheckout_Event_Dispatcher_SymfonyService()
    {
        return $this->services['ps_checkout.event.dispatcher.symfony'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Event\\SymfonyEventDispatcherFactory'] : $this->getSymfonyEventDispatcherFactoryService()) && false ?: '_'}->create([0 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Checkout\\EventSubscriber\\CheckoutEventSubscriber'] : $this->getCheckoutEventSubscriberService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Order\\EventSubscriber\\OrderEventSubscriber'] : $this->getOrderEventSubscriberService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Order\\EventSubscriber\\PayPalOrderEventSubscriber'] : $this->getPayPalOrderEventSubscriberService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Capture\\EventSubscriber\\PayPalCaptureEventSubscriber'] : $this->getPayPalCaptureEventSubscriberService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber'] : $this->getPayPalRefundEventSubscriberService()) && false ?: '_'}, 5 => ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber'] : $this->getPaymentMethodTokenEventSubscriberService()) && false ?: '_'}]);
    }

    /**
     * Gets the private 'ps_checkout.tactician.bus' shared service.
     *
     * @return \League\Tactician\CommandBus
     */
    protected function getPsCheckout_Tactician_BusService()
    {
        return $this->services['ps_checkout.tactician.bus'] = ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\CommandBus\\TacticianCommandBusFactory'] : $this->getTacticianCommandBusFactoryService()) && false ?: '_'}->create();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'database_host' => 'admin-mysql_db',
            'database_port' => '3306',
            'database_name' => 'BE_184429',
            'database_user' => 'root',
            'database_password' => 'student',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'N9rK7BLTPyNJhIGOqZXerS5TbQjp63MhiVvPfw5YLraF37L25NrnZ4rOQToNpD1b',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2025-01-18',
            'locale' => 'pl-PL',
            'use_debug_toolbar' => true,
            'cookie_key' => 'jrrpiOvS2jvV0Uy0WaSi4BVqJfDrWjp2p1qfqrFjjpzqVWnOL53rKLLDY9WCexz5',
            'cookie_iv' => '6b71NA8DVvrBAnaCDgoBbwTCDPvRvNV9',
            'new_cookie_key' => 'def00000f77f227f0ca41b74a35a13dfe9e95b24857d168323924879f711201fb77c179921fa320424a8e5e674db18100b1242663ccd52cd33c90bf5f99522feb8639c2c',
            'cache.driver' => 'array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/var/www/html/app',
            'kernel.project_dir' => '/var/www/html',
            'kernel.name' => 'app',
            'kernel.debug' => true,
            'kernel.environment' => 'dev',
            'kernel.cache_dir' => '/var/www/html/var/cache/dev/',
            'kernel.active_modules' => [
                0 => 'blockwishlist',
                1 => 'contactform',
                2 => 'dashactivity',
                3 => 'dashtrends',
                4 => 'dashgoals',
                5 => 'dashproducts',
                6 => 'graphnvd3',
                7 => 'gridhtml',
                8 => 'gsitemap',
                9 => 'pagesnotfound',
                10 => 'productcomments',
                11 => 'ps_banner',
                12 => 'ps_categorytree',
                13 => 'ps_checkpayment',
                14 => 'ps_contactinfo',
                15 => 'ps_crossselling',
                16 => 'ps_currencyselector',
                17 => 'ps_customeraccountlinks',
                18 => 'ps_customersignin',
                19 => 'ps_customtext',
                20 => 'ps_dataprivacy',
                21 => 'ps_emailsubscription',
                22 => 'ps_faviconnotificationbo',
                23 => 'ps_featuredproducts',
                24 => 'ps_imageslider',
                25 => 'ps_languageselector',
                26 => 'ps_linklist',
                27 => 'ps_mainmenu',
                28 => 'ps_searchbar',
                29 => 'ps_sharebuttons',
                30 => 'ps_shoppingcart',
                31 => 'ps_socialfollow',
                32 => 'ps_themecusto',
                33 => 'ps_wirepayment',
                34 => 'statsbestcategories',
                35 => 'statsbestcustomers',
                36 => 'statsbestproducts',
                37 => 'statsbestsuppliers',
                38 => 'statsbestvouchers',
                39 => 'statscarrier',
                40 => 'statscatalog',
                41 => 'statscheckup',
                42 => 'statsdata',
                43 => 'statsforecast',
                44 => 'statsnewsletter',
                45 => 'statspersonalinfos',
                46 => 'statsproduct',
                47 => 'statsregistrations',
                48 => 'statssales',
                49 => 'statssearch',
                50 => 'statsstock',
                51 => 'welcome',
                52 => 'psgdpr',
                53 => 'ps_mbo',
                54 => 'ps_buybuttonlite',
                55 => 'ps_checkout',
                56 => 'ps_metrics',
                57 => 'ps_facebook',
                58 => 'psxmarketingwithgoogle',
                59 => 'blockreassurance',
                60 => 'ps_facetedsearch',
                61 => 'ps_accounts',
                62 => 'ps_cashondelivery',
                63 => 'ps_eventbus',
                64 => 'ps_googleanalytics',
            ],
            'ps_cache_dir' => '/var/www/html/var/cache/dev/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/var/www/html/var/cache/dev//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}
