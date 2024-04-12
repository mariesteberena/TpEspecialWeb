<?php
/* Smarty version 3.1.39, created on 2024-04-12 17:30:00
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\table\tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66195378977e93_42828453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61a4105f9fa3c336805a7c047873331d4283a17' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\table\\tableProducts.tpl',
      1 => 1712935798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form/selectCategory.tpl' => 1,
  ),
),false)) {
function content_66195378977e93_42828453 (Smarty_Internal_Template $_smarty_tpl) {
if (($_SERVER['REQUEST_URI'] == ((dirname($_SERVER['PHP_SELF'])).("/admin")))) {?>
<div class="container">
    <?php } else { ?>
    <div class="container col-sm-8 m-4">
        <?php }?>
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th>Categoria</th>
                    <th>Producto</th>
                    <th>Precio</th>                    
                    <?php if (($_SERVER['REQUEST_URI'] == ((dirname($_SERVER['PHP_SELF'])).("/admin")))) {?>
                    <th></th>
                    <th></th>

                    <th>Acciones</th>
                    <th></th>
                    <?php } else { ?>
                    <th>Acciones</th>
                    <?php }?>

                </tr>
            </thead>
            <tbody>
                <!-- Pregunta si está en la sección admin para mostrar la edición -->
                <?php if (($_SERVER['REQUEST_URI'] == ((dirname($_SERVER['PHP_SELF'])).("/admin")) && (isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == "1")) {?>
                <tr>
                    <form class="form-group" action="agregar-producto" method="POST" enctype="multipart/form-data">
                        <td>
                            <input type="text" class="form-control" required="required" placeholder="Nombre de producto"
                                name="producto">
                        </td>
                        <td>
                            <input type="number" class="form-control" required="required" placeholder="Precio"
                                name="precio">
                        </td>
                        <td>
                            <?php $_smarty_tpl->_subTemplateRender("file:form/selectCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </td>
                        <td>
                            <input type="text" class="form-control" required="required" placeholder="Detalle"
                                name="detalle">
                        </td>
                        <td class=" col-sm-2">
                            <input type="file" name="imagen" id="imageToUpload" class="form-control">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-success">Agregar</button>
                        </td>
                    </form>
                </tr>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['productos']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                <tr>
                    <div class="d-flex flex-row justify-content-center">
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_producto;?>
</td>
                        <td>$<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                        <td class=" m-auto p-3 justify-content-center">
                            <a href="detalle/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
" class="btn btn-outline-success ">Ver detalle</a>
                        </td>
                        <?php if (($_SERVER['REQUEST_URI'] == ((dirname($_SERVER['PHP_SELF'])).("/admin")) && (isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == "1")) {?>
                        <td class=" m-auto p-3 d-flex inline justify-content-center"><a href="borrar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
"
                                class="btn btn-outline-danger">Eliminar</a></td>
                        <td><a href="modificar/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
" class="btn btn-outline-danger">Modificar</a>
                        </td>
                        <?php if ((isset($_smarty_tpl->tpl_vars['producto']->value->imagen))) {?>
                        <td><a href="borrarImagen/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
"
                                class="btn btn-sm btn-outline-danger">Eliminar Imagen</a>
                        </td>
                        <?php }?>
                    </div>
                    <?php }?>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </tbody>
        </table>
    </div><?php }
}
