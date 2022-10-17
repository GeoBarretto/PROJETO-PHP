<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit863888b90e312de6d3400a8f676e225f
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit863888b90e312de6d3400a8f676e225f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit863888b90e312de6d3400a8f676e225f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit863888b90e312de6d3400a8f676e225f::$classMap;

        }, null, ClassLoader::class);
    }
}
