<?php
/* Smarty version 3.1.39, created on 2024-04-15 01:15:41
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formModifyCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661c639dd712c9_72170589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0545f3ede8dc89cf5a7950b162bc4d764ba3c474' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formModifyCategory.tpl',
      1 => 1713136537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661c639dd712c9_72170589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h3 class="m-5">Modificar nombre de categoría</h3>
<form action="confirmarCateg" class="form-group m-5 w-75" method="POST">
    <input type="text" class="form-control w-75 m-2" name="categoria" placeholder="Modificar nombre de categoria">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-control m-2 " name="id">
    <button type="submit" class="btn btn-outline-success m-2">Confirmar</button>
    <a href="admin" class="btn btn-danger m-2" >Cancelar</a>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
