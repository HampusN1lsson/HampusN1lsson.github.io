<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitade0155280ea4dfe558a949afdd83168
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitade0155280ea4dfe558a949afdd83168::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitade0155280ea4dfe558a949afdd83168::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitade0155280ea4dfe558a949afdd83168::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
