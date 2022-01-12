<?php
/* Smarty version 4.0.0, created on 2022-01-12 19:03:45
  from '/var/www/pb/public/templates/art_cat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61defbe1032f69_72707389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815d2c50432322289030e156dcfcb7d3c63ba79d' => 
    array (
      0 => '/var/www/pb/public/templates/art_cat.tpl',
      1 => 1641649922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61defbe1032f69_72707389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/pb/vendor/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/pb/vendor/smarty/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>

        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>

        <main class="container">

            <div class="row mb-2">
                <?php if ($_smarty_tpl->tpl_vars['articles']->value == false) {?>
                    <h1>В этой категории нет сатей</h1>   
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'art');
$_smarty_tpl->tpl_vars['art']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->do_else = false;
?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

                      <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><a style="text-decoration: none" href = "/art_cat.php?categori=<?php echo $_smarty_tpl->tpl_vars['art']->value->getIdCategories()->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value->getIdCategories()->getName();?>
</a></strong>
                        <h3 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['art']->value->getTitel();?>
</h3>
                        <div class="mb-1 text-muted "><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value->getDate());?>
</div>
                        <p class="card-text mb-auto"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['art']->value->getText(),120,"...",true);?>
</p>
                        <a href="/art.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value->getId();?>
" >Продолжить читать</a>
                      </div>

                      <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image href="/image/<?php echo $_smarty_tpl->tpl_vars['art']->value->getImage();?>
" height="250" width="190"/> 
                        </svg>
                      </div>

                    </div>
                </div> 
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

        </main>
      <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
