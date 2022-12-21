<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94fa57844104d91fdb2d302dc7e75828
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'UAParser\\' => 9,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'UAParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/ua-parser/uap-php/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94fa57844104d91fdb2d302dc7e75828::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94fa57844104d91fdb2d302dc7e75828::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
