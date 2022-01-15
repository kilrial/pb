<?php

    use GuzzleHttp\Client;

    require_once('vendor/smarty/smarty/libs/Smarty.class.php');
    require_once('vendor/smarty/smarty/libs/bootstrap.php');
    require_once('vendor/autoload.php');

    $smarty = new Smarty();

    $smarty->template_dir = '../public/templates/';
    $smarty->compile_dir  = '../public/templates_c/';
    $smarty->config_dir   = '../public/configs/';
    $smarty->cache_dir    = '../public/cache/';

?>