<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f8f6826d53fda028045d85b96a5b0d3
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jz\\MiApp\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jz\\MiApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/var/www/html/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f8f6826d53fda028045d85b96a5b0d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f8f6826d53fda028045d85b96a5b0d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f8f6826d53fda028045d85b96a5b0d3::$classMap;

        }, null, ClassLoader::class);
    }
}
