<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a58a2515ba8b2dc890a68830bdab949
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Todo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Todo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a58a2515ba8b2dc890a68830bdab949::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a58a2515ba8b2dc890a68830bdab949::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}