<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita16944f89657e4ce9afc4ba3def18e39
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tests\\PhpOffice\\Math\\' => 21,
        ),
        'P' => 
        array (
            'PhpOffice\\PhpWord\\' => 18,
            'PhpOffice\\Math\\' => 15,
        ),
        'I' => 
        array (
            'Itpol\\LatihanGenerateSurat\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tests\\PhpOffice\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/math/tests/Math',
        ),
        'PhpOffice\\PhpWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpword/src/PhpWord',
        ),
        'PhpOffice\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/math/src/Math',
        ),
        'Itpol\\LatihanGenerateSurat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita16944f89657e4ce9afc4ba3def18e39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita16944f89657e4ce9afc4ba3def18e39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita16944f89657e4ce9afc4ba3def18e39::$classMap;

        }, null, ClassLoader::class);
    }
}
