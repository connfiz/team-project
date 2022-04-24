<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10d1c22ec1277be59b72f523991f9f27
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Connd\\Website\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Connd\\Website\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit10d1c22ec1277be59b72f523991f9f27::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10d1c22ec1277be59b72f523991f9f27::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10d1c22ec1277be59b72f523991f9f27::$classMap;

        }, null, ClassLoader::class);
    }
}