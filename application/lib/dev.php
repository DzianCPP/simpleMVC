<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str): void
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';

    return;
}