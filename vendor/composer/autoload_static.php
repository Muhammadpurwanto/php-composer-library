<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita55161f5afa59e7eea80eb3cc2291c10
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Purwanto\\PhpComposerLibrary\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Purwanto\\PhpComposerLibrary\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita55161f5afa59e7eea80eb3cc2291c10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita55161f5afa59e7eea80eb3cc2291c10::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita55161f5afa59e7eea80eb3cc2291c10::$classMap;

        }, null, ClassLoader::class);
    }
}
