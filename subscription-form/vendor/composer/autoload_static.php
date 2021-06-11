<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1aac9695a161874f28eb91e941b233fe
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mail\\Subs\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mail\\Subs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1aac9695a161874f28eb91e941b233fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1aac9695a161874f28eb91e941b233fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1aac9695a161874f28eb91e941b233fe::$classMap;

        }, null, ClassLoader::class);
    }
}
