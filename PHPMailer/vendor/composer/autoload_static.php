<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e3c5a2f4ffd4fd140c581eea88a1eb3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\Test\\' => 15,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\Test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e3c5a2f4ffd4fd140c581eea88a1eb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e3c5a2f4ffd4fd140c581eea88a1eb3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
