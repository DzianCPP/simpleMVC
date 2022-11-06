<?php

spl_autoload_register('autoloadClass');

function autoloadClass($className): void
{
    $fullPathToClass = str_replace("\\", "/", $className . ".php");
    if (file_exists($fullPathToClass)) {
        require_once $fullPathToClass;
        return;
    }
}
