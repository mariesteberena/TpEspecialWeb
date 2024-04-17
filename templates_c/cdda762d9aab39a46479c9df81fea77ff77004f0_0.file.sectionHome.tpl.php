<?php
/* Smarty version 3.1.39, created on 2024-04-17 19:25:09
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\section\sectionHome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_662005f5a3bd63_67140757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdda762d9aab39a46479c9df81fea77ff77004f0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\section\\sectionHome.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form/formAdvSearch.tpl' => 1,
    'file:templates/table/tableProducts.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_662005f5a3bd63_67140757 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-sm-flex container m-3 ">
    <?php $_smarty_tpl->_subTemplateRender("file:templates/form/formAdvSearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php if ($_smarty_tpl->tpl_vars['no_products']->value === null) {?>
        <?php $_smarty_tpl->_subTemplateRender("file:templates/table/tableProducts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <div class ="alert alert-secondary m-3 p-3">
            No hay productos que mostrar! 
        </div>
    <?php }?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
