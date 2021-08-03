<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f60f9c1e2819d56515d6385e707a1fe
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rozaka\\ClassicTheme\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rozaka\\ClassicTheme\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f60f9c1e2819d56515d6385e707a1fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f60f9c1e2819d56515d6385e707a1fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3f60f9c1e2819d56515d6385e707a1fe::$classMap;

        }, null, ClassLoader::class);
    }
}
