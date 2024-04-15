<?php
/* Smarty version 3.1.39, created on 2024-04-15 21:32:38
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formRegister.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d80d66b1831_88476935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a780b9fad495917cd206cdbeba9a0bac738e6d06' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formRegister.tpl',
      1 => 1713209554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661d80d66b1831_88476935 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<div class="mt-5 w-25 mx-auto">
 <h3 class="text-center">Registrate!</h3>

    <form action="registro" method="post" >
        <div class="form-group">
            <!-- <div class="input-group-prepend">
                <input class="form-control mt-3 mb-3 " type="text" required="required" placeholder="Nombre" name="nombre">
            </div> -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" required="required" placeholder="nombre" name="nombre">
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control"  id="floatingInputValue" placeholder="pepe@example.com" value="pepe@example.com" required="required" name="usuario">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" required="required" placeholder="Contraseña" name="password-1">
                <label for="floatingInput">Contraseña</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" required="required" placeholder="Repetir Contraseña" name="password-2">
                <label for="floatingInput">Repetir Contraseña</label>
            </div>
            <div class="d-flex justify-content-center">
            <button class="btn btn-dark mt-3 w-50" type="submit">Registrame</button>
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
