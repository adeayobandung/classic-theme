<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit249e7a98109d535d89f69f93d66c9829
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rozaka\\Classictheme\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rozaka\\Classictheme\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit249e7a98109d535d89f69f93d66c9829::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit249e7a98109d535d89f69f93d66c9829::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit249e7a98109d535d89f69f93d66c9829::$classMap;

        }, null, ClassLoader::class);
    }
}
