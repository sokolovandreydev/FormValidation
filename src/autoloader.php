<?php namespace sokolovandreydev;

/**
 * @param $className
 */
function app_autoload($className)
{
    $className = str_replace('sokolovandreydev\\FormValidation', '', $className);
    $filneame  = __DIR__ . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    if (file_exists($filneame)) {
        include $filneame;
    }
}

spl_autoload_register('sokolovandreydev\app_autoload');
