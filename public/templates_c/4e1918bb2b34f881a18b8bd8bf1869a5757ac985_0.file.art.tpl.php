<?php
/* Smarty version 4.0.0, created on 2022-01-12 19:03:16
  from '/var/www/pb/public/templates/art.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61defbc436fc37_40180878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e1918bb2b34f881a18b8bd8bf1869a5757ac985' => 
    array (
      0 => '/var/www/pb/public/templates/art.tpl',
      1 => 1642003163,
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
function content_61defbc436fc37_40180878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/pb/vendor/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!doctype html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <body>

        <div class="container"><?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>

        <main class="container">


            <div class="row g-5">
                <?php if ($_smarty_tpl->tpl_vars['art']->value == false) {?>
                    <h1>Статья не найдена</h1>
                <?php }?>
                <div class="col-md-8">
                    <img src ="/image/<?php echo $_smarty_tpl->tpl_vars['art']->value->getImage();?>
" style = "max-width: 100%" >
                    <h1><?php echo $_smarty_tpl->tpl_vars['art']->value->getTitel();?>
</h1>
                    <div class="mb-1 text-muted "><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value->getDate());?>
</div>
                    <p class="card-text mb-auto"><?php echo $_smarty_tpl->tpl_vars['art']->value->getText();?>
</p>

                    <h1>Комментарии</h1>
                        <div class="col-md-12">
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <form class = "form" method = "POST" action = "/public/art.php?id=<?php echo $_smarty_tpl->tpl_vars['art']->value->getId();?>
">
                                        <div class="row row-fluid">
                                            <div class ="col-md-4">
                                                <input class="mb-3" type="text" name="author" placeholder="Имя" required>
                                                <input type="submit" name="post_comm" value="Добавить комментарий">
                                            </div>
                                            
                                            <div class ="col-md-8">
                                                <textarea class="container-fluid" name="text" placeholder="Текст комментария" required></textarea>   
                                            </div>    
                                            
                                        </div>          
                                    </form>
                                </div>
                            </div>
                        </div>

                    <?php if ($_smarty_tpl->tpl_vars['comments']->value == false) {?>
                        <h1>Нет комментариев</h1>    
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comm');
$_smarty_tpl->tpl_vars['comm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comm']->value) {
$_smarty_tpl->tpl_vars['comm']->do_else = false;
?>
                    <div class="col-md-12">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-150 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <h3 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['comm']->value->getAuthor();?>
</h3>
                                <p class="card-text mb-auto"><?php echo $_smarty_tpl->tpl_vars['comm']->value->getText();?>
</p>
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
