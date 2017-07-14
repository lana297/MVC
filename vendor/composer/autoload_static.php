<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit92cbe61e22902835ee52363dc51f32ef
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'View\\' => 5,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'I' => 
        array (
            'Interface\\' => 10,
        ),
        'H' => 
        array (
            'Helpers\\' => 8,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'View\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/View',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Model',
        ),
        'Interface\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Interface',
        ),
        'Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Helpers',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit92cbe61e22902835ee52363dc51f32ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit92cbe61e22902835ee52363dc51f32ef::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit92cbe61e22902835ee52363dc51f32ef::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}