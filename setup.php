<?php

    require_once('/var/www/pb/libs/vendor/smarty/Smarty.class.php');
    require_once('/var/www/pb/libs/vendor/smarty/bootstrap.php');

    $smarty = new Smarty();

    $smarty->template_dir = 'smarty/templates/';
    $smarty->compile_dir  = 'smarty/templates_c/';
    $smarty->config_dir   = 'smarty/configs/';
    $smarty->cache_dir    = 'smarty/cache/';

?>