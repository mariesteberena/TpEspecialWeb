<?php
/* Smarty version 3.1.39, created on 2024-04-12 17:58:46
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\table\tableCategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66195a3696f698_70946876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8373dbb9e67d693b1eb86db036af72b07b0ab93e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\table\\tableCategories.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66195a3696f698_70946876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <table class="table table-hover w-75">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Acciones</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form class="form-group" action="agregar-categoria">
                    <td>
                        <input type="text" class="form-control w-75" required="required" placeholder="Nombre de categoria" name="nombre_categoria">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </td>
                </form>
            </tr>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <tr>
                        
                         <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</td>
                         <td><a href="borrarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" class = "btn btn-outline-danger">Eliminar</a></td>
                         <td><a href="modificarCategorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
" class = "btn btn-outline-danger">Modificar</a></td>
                    </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>    
    </table>
</div>

<?php }
}
