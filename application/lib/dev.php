<?php

ini_set('display_errors', 1);
error_reporting(E_ERROR);

function debug($str): void
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';

    return;
}