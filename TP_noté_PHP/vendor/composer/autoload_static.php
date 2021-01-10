<?php

namespace Composer\Autoload;

class ComposerStaticInit3182f561954d10d8881619d3f7e87dd2
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Eleve\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eleve\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3182f561954d10d8881619d3f7e87dd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3182f561954d10d8881619d3f7e87dd2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
