<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d4181237ff1fd306161265aadccda96
{
    public static $classMap = array (
        'Gsitemap' => __DIR__ . '/../..' . '/gsitemap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0d4181237ff1fd306161265aadccda96::$classMap;

        }, null, ClassLoader::class);
    }
}
