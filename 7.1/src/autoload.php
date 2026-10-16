<?php

spl_autoload_register(function (string $className): void {
    $file = __DIR__ . '/classes/' . $className . '.php';
    if (is_file($file)) {
        require_once $file;
    }
});