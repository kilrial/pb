<?php
/* Smarty version 4.0.3, created on 2022-01-12 19:49:48
  from '/var/www/pb/public/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.3',
  'unifunc' => 'content_61df06acbd9e60_52404998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a344513c095c442589e990c21ea91754f8a398fb' => 
    array (
      0 => '/var/www/pb/public/templates/index.tpl',
      1 => 1642002873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61df06acbd9e60_52404998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/pb/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/var/www/pb/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>

        <div class="container"><?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>

        <main class="container">


            <div class="row mb-2">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'art');
$_smarty_tpl->tpl_vars['art']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->do_else = false;
?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><a style="text-decoration: none" href = "/public/art_cat.php?categori=<?php echo $_smarty_tpl->tpl_vars['art']->value->getIdCategories()->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value->getIdCategories()->getName();?>
</a></strong>
                        <h3 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['art']->value->getTitel();?>
</h3>
                        <div class="mb-1 text-muted "><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value->getDate());?>
</div>
                        <p class="card-text mb-auto"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['art']->value->getText(),120,"...",true);?>
</p>
                        <a href="/public/art.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value->getId();?>
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

            <hr>

            <div class="row g-5">
                <div class="col-md-8">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arts']->value, 'art');
$_smarty_tpl->tpl_vars['art']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->do_else = false;
?>
                <div class="col-md-12">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"><a style="text-decoration: none" href = "/public/art_cat.php?categori=<?php echo $_smarty_tpl->tpl_vars['art']->value->getIdCategories()->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['art']->value->getIdCategories()->getName();?>
 </a></strong>
                        <h3 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['art']->value->getTitel();?>
</h3>
                        <div class="mb-1 text-muted "><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value->getDate());?>
</div>
                        <p class="card-text mb-auto"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['art']->value->getText(),120,"...",true);?>
</p>
                        <a href="/public/art.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value->getId();?>
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
            <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
        </div>
        </main>
        <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
