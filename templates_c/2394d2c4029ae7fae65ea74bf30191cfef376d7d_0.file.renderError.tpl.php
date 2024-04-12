<?php
/* Smarty version 3.1.39, created on 2024-04-12 18:35:05
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\renderError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661962b943a4d0_71946334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2394d2c4029ae7fae65ea74bf30191cfef376d7d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\renderError.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661962b943a4d0_71946334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="d-flex justify-content-around ">
        <div class="row w-75 h-100">
            <div class=" alert alert-danger m-2 "> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <div class="col">
                <a href="home" type="button" class=" btn btn-dark m-1 w-50">HOME</a>
            </div>    
            <div class="col">
                <button id="go-back-btn" class="btn btn-dark m-1 w-50">Volver atrás</button>
            </div>    
        </div>
    </div>
    <?php echo '<script'; ?>
 src="js/goBack.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
