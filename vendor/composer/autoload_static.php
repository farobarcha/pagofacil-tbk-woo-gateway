<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaee3e83e4240f0dd14ce6d78ed2fb6cc
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tbkaaswoogateway\\helpers\\' => 25,
            'tbkaaswoogateway\\classes\\' => 25,
        ),
        'c' => 
        array (
            'ctala\\transaccion\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tbkaaswoogateway\\helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/helpers',
        ),
        'tbkaaswoogateway\\classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'ctala\\transaccion\\' => 
        array (
            0 => __DIR__ . '/..' . '/ctala/transaccion-default',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaee3e83e4240f0dd14ce6d78ed2fb6cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaee3e83e4240f0dd14ce6d78ed2fb6cc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
