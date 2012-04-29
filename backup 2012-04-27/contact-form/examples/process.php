<?php

/**
 * iPhorm initialisation
 *
 * You shouldn't need to change this file unless there is a problem
 */

define('IPHORM_ROOT', realpath(dirname(dirname(__FILE__))));
require_once IPHORM_ROOT . '/classes/iPhorm.php';
iPhorm::registerAutoload();

if (get_magic_quotes_gpc()) {
    $_POST = stripslashes_deep($_POST);
}

function stripslashes_deep($value)
{
    if (is_array($value)) {
        $value = array_map('stripslashes_deep', $value);
    } else {
        $value = stripslashes($value);
    }
    return $value;
}

$configSuffix = isset($_GET['form']) ? trim(strip_tags($_GET['form'])) : '';
$configFile = (strlen($configSuffix) > 0) ? "config-$configSuffix.php" : 'config.php';

if (file_exists(IPHORM_ROOT . '/examples/' . $configFile)) {
    $form = new iPhorm();

    require_once IPHORM_ROOT . '/examples/' . $configFile;

    echo $form->process();
}