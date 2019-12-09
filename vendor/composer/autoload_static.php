<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2aefe0554d7309f7a1edc042372ce9bb
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
        'App\\Controller\\Controller' => __DIR__ . '/../..' . '/src/Controllers/Controller.php',
        'App\\Controller\\PagesController' => __DIR__ . '/../..' . '/src/Controllers/PagesController.php',
        'App\\Router' => __DIR__ . '/../..' . '/src/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2aefe0554d7309f7a1edc042372ce9bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2aefe0554d7309f7a1edc042372ce9bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2aefe0554d7309f7a1edc042372ce9bb::$classMap;

        }, null, ClassLoader::class);
    }
}