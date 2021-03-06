<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe8fb9a3ed927c1b373346e08d215b5f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe8fb9a3ed927c1b373346e08d215b5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe8fb9a3ed927c1b373346e08d215b5f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfe8fb9a3ed927c1b373346e08d215b5f::$classMap;

        }, null, ClassLoader::class);
    }
}
