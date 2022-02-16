<?php
/* Smarty version 4.0.3, created on 2022-01-15 20:05:46
  from '/var/www/pb/public/templates/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61e2feeaf20b40_71570926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa1d4a572185fdcff03754d7db571cbc2ad43cb8' => 
    array (
      0 => '/var/www/pb/public/templates/sidebar.tpl',
      1 => 1642266345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e2feeaf20b40_71570926 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Погода</h4>
          <p class="mb-0">Температура воздуха: <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['weather']->value['main']['temp']);?>
 ℃</p>
          <p class="mb-0">Давление: <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['weather']->value['main']['pressure']);?>
 мм рт. ст.</p>
          <p class="mb-0">Скорость ветра: <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['weather']->value['wind']['speed']);?>
 м/с</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div><?php }
}
