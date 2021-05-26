<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ac13a40d72542e5cf53e0b6f95c89c2
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ac13a40d72542e5cf53e0b6f95c89c2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ac13a40d72542e5cf53e0b6f95c89c2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ac13a40d72542e5cf53e0b6f95c89c2::$classMap;

        }, null, ClassLoader::class);
    }
}
