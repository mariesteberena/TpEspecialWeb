<?php
/* Smarty version 3.1.39, created on 2024-04-15 21:13:14
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\table\tableProductsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d7c4a5eeb32_61358145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2fe12ffa0975ef02870332dc33d672893492b83' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\table\\tableProductsAdmin.tpl',
      1 => 1713208391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form/selectCategory.tpl' => 1,
  ),
),false)) {
function content_661d7c4a5eeb32_61358145 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-5">
    <table class="table table-hover table-responsive table-light">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
</td>
                        <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                        <td>
                            <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn btn-outline-success">Ver detalle</a>
                        </td>
                        <td>
                            <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                        <td>
                            <a href="modificar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn btn-outline-warning">Modificar</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
</div>
<div class="container mt-5 mb-5">
    <?php if ((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == "1") {?>
        <div class="container">
            <h3>Agregar un Producto</h3>
            <form class="form-group" action="agregar-producto" method="POST" enctype="multipart/form-data">
                <tr>
                    <td><?php $_smarty_tpl->_subTemplateRender("file:form/selectCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></td>
                    <td><input type="text" class="form-control" required="required" placeholder="Nombre de producto"
                            name="producto"></td>
                    <td><input type="number" class="form-control" required="required" placeholder="Precio" name="precio">
                    </td>
                    <td>
                        <input type="text" class="form-control" required="required" placeholder="Detalle" name="detalle">
                    </td>
                    <td>
                        <input type="file" name="imagen" id="imageToUpload" class="form-control">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success mt-3 mb-5">Agregar</button>
                    </td>
                </tr>
            </form>
        <?php }?>
</div><?php }
}
