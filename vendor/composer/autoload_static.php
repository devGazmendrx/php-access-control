<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fb16926c6758a57815eeaf410e0abc0
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
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'App\\PHPAccessControlHelper\\PHPAccessControlHelper' => __DIR__ . '/../..' . '/classes/PHPAccessControlHelper/PHPAccessControlHelper.php',
        'App\\PHPAccessControl\\PHPAccessControl' => __DIR__ . '/../..' . '/classes/PHPAccessControl/PHPAccessControl.php',
        'App\\PHPSession\\PHPSession' => __DIR__ . '/../..' . '/classes/PHPSession/PHPSession.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fb16926c6758a57815eeaf410e0abc0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fb16926c6758a57815eeaf410e0abc0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fb16926c6758a57815eeaf410e0abc0::$classMap;

        }, null, ClassLoader::class);
    }
}