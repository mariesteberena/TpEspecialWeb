<?php
/* Smarty version 3.1.39, created on 2024-04-12 19:18:32
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\table\tableUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66196ce88c2b73_71979876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ee2fcbb41170813f2c1612c5666c44449abcb02' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\table\\tableUsers.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66196ce88c2b73_71979876 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <table class="table table-hover table-responsive">
        
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th></th>
                <th>Modificar</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table table-responsive">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
</td>
                <form action="cambiarRol" method="post">
                    <td>
                        <input hidden type="hidden" name="user-id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
"></input>
                        <select name="rol-id" id="" class="form-select">
                            <option selected=<?php echo $_smarty_tpl->tpl_vars['user']->value->id_rol;?>
><?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
</option>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->id_rol == 1) {?>
                            <option value="2">User</option>
                            <?php } else { ?>
                            <option value="1">Admin</option>
                            <?php }?>
                        </select>
                    </td>
                    <td>
                        <button href="cambiarRol" class="btn btn-outline-danger">Guardar cambio</button>
                    </td>
                </form>
                <td>
                    <a href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" class="btn btn-outline-danger">Eliminar</a>
                </td>

            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
