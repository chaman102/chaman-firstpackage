<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6c8f7d8d9f2777526640df171798e90
{
    public static $files = array (
        '7be8362cf3c137b09425de638d59213e' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Chaman\\FirstPackage\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Chaman\\FirstPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Chaman\\FirstPackage\\Hello' => __DIR__ . '/../..' . '/src/Hello.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6c8f7d8d9f2777526640df171798e90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6c8f7d8d9f2777526640df171798e90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6c8f7d8d9f2777526640df171798e90::$classMap;

        }, null, ClassLoader::class);
    }
}
