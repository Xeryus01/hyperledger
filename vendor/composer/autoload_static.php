<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc26f21673f8ce60fff871e9834ed87a8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc26f21673f8ce60fff871e9834ed87a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc26f21673f8ce60fff871e9834ed87a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc26f21673f8ce60fff871e9834ed87a8::$classMap;

        }, null, ClassLoader::class);
    }
}
