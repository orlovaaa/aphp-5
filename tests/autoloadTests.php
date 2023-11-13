<?php
declare(strict_types=1);

function autoload(string $className)
{
    $file = __DIR__  . '/../src/Object/' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('autoload');