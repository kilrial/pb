<?php

    require_once('vendor/smarty/Smarty.class.php');
    require_once('vendor/smarty/bootstrap.php');

    $smarty = new Smarty();

    $smarty->template_dir = '../public/templates/';
    $smarty->compile_dir  = '../public/templates_c/';
    $smarty->config_dir   = '../public/configs/';
    $smarty->cache_dir    = '../public/cache/';

?>