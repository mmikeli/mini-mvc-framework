<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdc2eff82c87c1b0ff2b2f92cfb65cf8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdc2eff82c87c1b0ff2b2f92cfb65cf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdc2eff82c87c1b0ff2b2f92cfb65cf8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfdc2eff82c87c1b0ff2b2f92cfb65cf8::$classMap;

        }, null, ClassLoader::class);
    }
}