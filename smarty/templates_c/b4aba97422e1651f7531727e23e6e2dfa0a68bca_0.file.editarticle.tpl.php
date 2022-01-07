<?php
/* Smarty version 4.0.0, created on 2022-01-06 22:16:50
  from '/var/www/pb/smarty/templates/editarticle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61d74022f15488_49135751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4aba97422e1651f7531727e23e6e2dfa0a68bca' => 
    array (
      0 => '/var/www/pb/smarty/templates/editarticle.tpl',
      1 => 1641496608,
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
function content_61d74022f15488_49135751 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>

        <div class="container"><?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>

        <main class="container">


            <div class="row g-5">
                <div class="col-md-8">
                    <form calss="form" method="POST" id="data" action="/editarticle.php" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="mb-3" type="text" name="titel" placeholder="Название" required>                           
                                
                                <select form="data" name="cat"> 
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                    <option><?php echo $_smarty_tpl->tpl_vars['cat']->value->getName();?>
</option>    
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>

                                <input class="mb-3" method="POST" enctype="multipart/form-data" type="file" name="image">   
                            </div>

                            <div class="col-md-12 mb-3">
                                <textarea class="container-fluid" style="height: 550px;" name="text" placeholder="Текст статьи" required></textarea>   
                            </div>

                            <div class="col-md-12">
                                <input type="submit" name="post_art" value="Добавить статью">
                            </div>
                        </div>
                    </form>
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
