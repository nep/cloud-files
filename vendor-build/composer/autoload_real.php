<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit06f9fe8c7bfa814a66af7f31c67c0eda
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit06f9fe8c7bfa814a66af7f31c67c0eda', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit06f9fe8c7bfa814a66af7f31c67c0eda', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit06f9fe8c7bfa814a66af7f31c67c0eda::getInitializer($loader)();

        $loader->register(false);

        $includeFiles = \Composer\Autoload\ComposerStaticInit06f9fe8c7bfa814a66af7f31c67c0eda::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire06f9fe8c7bfa814a66af7f31c67c0eda($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire06f9fe8c7bfa814a66af7f31c67c0eda($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
