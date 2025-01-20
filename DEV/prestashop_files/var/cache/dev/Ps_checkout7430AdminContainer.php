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
class Ps_checkout7430AdminContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
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
            'prestashop\\module\\prestashopcheckout\\logger\\loggerfilefinder' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileFinder',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerfilename' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename',
            'prestashop\\module\\prestashopcheckout\\logger\\loggerfilereader' => 'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileReader',
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
            'prestashop\\modulelibcachedirectoryprovider\\cache\\cachedirectoryprovider' => 'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider',
        ];
        $this->methodMap = [
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
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileFinder' => 'getLoggerFileFinderService',
            'PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileReader' => 'getLoggerFileReaderService',
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
        ];
        $this->privates = [
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
        ];

        $this->aliases = [];
    }

    public function getRemovedIds()
    {
        return [
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\PaymentToken\\EventSubscriber\\PaymentMethodTokenEventSubscriber' => true,
            'PrestaShop\\Module\\PrestashopCheckout\\PayPal\\Payment\\Refund\\EventSubscriber\\PayPalRefundEventSubscriber' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'ps_checkout.cache.array.paypal.capture' => true,
            'ps_checkout.cache.array.paypal.order' => true,
            'ps_checkout.cache.filesystem.paypal.capture' => true,
            'ps_checkout.cache.filesystem.paypal.order' => true,
            'ps_checkout.event.dispatcher.symfony' => true,
            'ps_checkout.tactician.bus' => true,
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
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder
     */
    protected function getLoggerFileFinderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileFinder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] : ($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerDirectory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.8.11', '/var/www/html'))) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename']) ? $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFilename'] : $this->getLoggerFilenameService()) && false ?: '_'});
    }

    /**
     * Gets the public 'PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader
     */
    protected function getLoggerFileReaderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopCheckout\\Logger\\LoggerFileReader'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader();
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
}
