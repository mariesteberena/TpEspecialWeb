<?php
/* Smarty version 3.1.39, created on 2024-04-17 19:34:34
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6620082abfd737_88456135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f95797bb1b14741b358c495fe567bce4a3d46a7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formLogin.tpl',
      1 => 1713209594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6620082abfd737_88456135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="mt-5 w-25 mx-auto">
    <h4 class="p-3">Ingresá tu usuario y contraseña</h4> 
    <form action="login" method="post" >
            <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" required="required" placeholder="Usuario" name="usuario">
                <label for="floatingInput">Usuario</label>
              </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" required="required" placeholder="Contraseña" name="password">
                <label for="floatingInput">Contraseña</label>
              </div>
            <div class="d-flex justify-content-center">
                <button class="form-control btn btn-dark mt-3 w-50 " type="submit">Ingresar</button>
            </div>  
        </div>
    </form>
</div>

<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-danger m-4">
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            </div>
        </div>
    </div>
</div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
