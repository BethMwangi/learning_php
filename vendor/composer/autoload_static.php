<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit992c6eea8a3ce206be8540c6fd3ac19b
{
    public static $files = array (
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '90197fb90e47366834f027bf40f5bb63' => __DIR__ . '/../..' . '/app/Helpers/funcs.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'PhpOption\\' => 10,
            'PackageVersions\\' => 16,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'L' => 
        array (
            'League\\Container\\' => 17,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
            'Doctrine\\Deprecations\\' => 22,
            'Doctrine\\DBAL\\' => 14,
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\' => 16,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'PackageVersions\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/package-versions-deprecated/src/PackageVersions',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'League\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/container/src',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Doctrine\\Deprecations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/deprecations/lib/Doctrine/Deprecations',
        ),
        'Doctrine\\DBAL\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/dbal/src',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/event-manager/lib/Doctrine/Common',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit992c6eea8a3ce206be8540c6fd3ac19b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit992c6eea8a3ce206be8540c6fd3ac19b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit992c6eea8a3ce206be8540c6fd3ac19b::$classMap;

        }, null, ClassLoader::class);
    }
}
