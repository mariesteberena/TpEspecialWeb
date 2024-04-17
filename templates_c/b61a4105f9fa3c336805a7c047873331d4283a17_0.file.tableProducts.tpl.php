<?php
/* Smarty version 3.1.39, created on 2024-04-17 19:25:09
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\table\tableProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_662005f5b36234_05147529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61a4105f9fa3c336805a7c047873331d4283a17' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\table\\tableProducts.tpl',
      1 => 1713209777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662005f5b36234_05147529 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container col-sm-8 m-4">
    <table class="table table-hover table-responsive table-light">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
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
" class="btn btn-dark">Ver detalle</a>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </tbody>
    </table>
</div><?php }
}
