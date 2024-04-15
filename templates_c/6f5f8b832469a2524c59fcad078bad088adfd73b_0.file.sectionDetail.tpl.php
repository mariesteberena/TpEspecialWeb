<?php
/* Smarty version 3.1.39, created on 2024-04-15 20:15:16
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\section\sectionDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d6eb4350f58_82534789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f5f8b832469a2524c59fcad078bad088adfd73b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\section\\sectionDetail.tpl',
      1 => 1713204914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/commentsVue.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661d6eb4350f58_82534789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="d-flex justify-content-center">
    <div class="container m-2">
        <div class="alert alert-light">
            <div class="d-flex flex-row m-3 justify-content-between">
                <div class="flex-column justify-content-center">
                    <h1> <?php echo $_smarty_tpl->tpl_vars['infoProducto']->value->nombre;?>
 $<?php echo $_smarty_tpl->tpl_vars['infoProducto']->value->precio;?>
 </h1>
                    <h5>Categoria: <?php echo $_smarty_tpl->tpl_vars['infoProducto']->value->nombre_categoria;?>
</h5>
                    <h5>Detalle de producto</h5>
                    <h6><?php echo $_smarty_tpl->tpl_vars['infoProducto']->value->detalle;?>
</h6>
                    <?php if ((isset($_smarty_tpl->tpl_vars['infoProducto']->value->imagen))) {?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['infoProducto']->value->imagen;?>
" class="img-fluid m-2 border border-light rounded" />
                    <?php }?>
                    <div class="flex-row">
                        <a href="home" type="button" class="btn btn-outline-dark mt-4">HOME</a>
                    </div>
                </div>


                <div class=" d-flex  flex-column ">                    
                    <div class="list-group w-75" id="user-info-div" id-producto=<?php echo $_smarty_tpl->tpl_vars['id_producto']->value;?>

                        id-usuario=<?php echo $_SESSION['USER_ID'];?>
>
                        <h2 class="p-2 h2 pt-3 border-bottom text-center">Nuestros clientes dicen:</h2>
                        <?php $_smarty_tpl->_subTemplateRender("file:vue/commentsVue.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/comment.js"><?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
