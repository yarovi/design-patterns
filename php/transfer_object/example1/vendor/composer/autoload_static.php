<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10858a592a08a9ed6f42c5429b08a17b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit10858a592a08a9ed6f42c5429b08a17b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10858a592a08a9ed6f42c5429b08a17b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10858a592a08a9ed6f42c5429b08a17b::$classMap;

        }, null, ClassLoader::class);
    }
}