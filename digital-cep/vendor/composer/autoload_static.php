<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2b91269ce8d133864d7173982636c051
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'guilherme\\digitalcep\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'guilherme\\digitalcep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2b91269ce8d133864d7173982636c051::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2b91269ce8d133864d7173982636c051::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit2b91269ce8d133864d7173982636c051::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit2b91269ce8d133864d7173982636c051::$classMap;

        }, null, ClassLoader::class);
    }
}
