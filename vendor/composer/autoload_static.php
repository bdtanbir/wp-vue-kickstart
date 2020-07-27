<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0fd93276d74ff75e6985abf85e86bf3
{
    public static $files = array (
        'a5998e9c7788b9325688cf69bb8325ff' => __DIR__ . '/../..' . '/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPVK\\Includes\\' => 14,
            'WPVK\\Frontend\\' => 14,
            'WPVK\\Admin\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPVK\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'WPVK\\Frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/frontend',
        ),
        'WPVK\\Admin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/admin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0fd93276d74ff75e6985abf85e86bf3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0fd93276d74ff75e6985abf85e86bf3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
