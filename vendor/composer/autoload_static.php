<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9b812d722a29bfbf319cc995df79a13e
{
    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'Qik\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Qik\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9b812d722a29bfbf319cc995df79a13e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9b812d722a29bfbf319cc995df79a13e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
