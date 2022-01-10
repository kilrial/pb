<?php
    require_once('smarty/libs/Smarty.class.php');
    require_once('libs/bootstrap.php');

    $smarty = new Smarty();

    $smarty->template_dir = 'templates/';
    $smarty->compile_dir  = 'templates_c/';
    $smarty->config_dir   = 'configs/';
    $smarty->cache_dir    = 'cache/';

?>