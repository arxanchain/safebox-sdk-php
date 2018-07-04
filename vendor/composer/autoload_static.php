<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit841ba2028c9c6f500154644e311a2221
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'arxan\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'arxan\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/arxan',
            1 => __DIR__ . '/..' . '/arxanchain/php-common/src/arxan',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit841ba2028c9c6f500154644e311a2221::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit841ba2028c9c6f500154644e311a2221::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
