<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2112dbdd7479daaf2db298ce5667e5c7
{
    public static $classMap = array (
        'Ps_Cashondelivery' => __DIR__ . '/../..' . '/ps_cashondelivery.php',
        'Ps_CashondeliveryValidationModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/validation.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2112dbdd7479daaf2db298ce5667e5c7::$classMap;

        }, null, ClassLoader::class);
    }
}
