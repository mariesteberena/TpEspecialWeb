<?php
/* Smarty version 3.1.39, created on 2024-04-15 20:35:20
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\selectCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d7368c454f5_48512150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f26a852b73397a0eb63ad05918214a910e437d7c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\selectCategory.tpl',
      1 => 1713206117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d7368c454f5_48512150 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select name="categoria" id="select" class="form-select my-1 w-100 ">
    <option disabled selected>Seleccionar categoría</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
</select><?php }
}
