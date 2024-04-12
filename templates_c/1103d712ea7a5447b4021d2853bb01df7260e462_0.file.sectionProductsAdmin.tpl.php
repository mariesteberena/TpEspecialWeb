<?php
/* Smarty version 3.1.39, created on 2024-04-12 17:58:46
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\section\sectionProductsAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66195a36914b46_61882918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1103d712ea7a5447b4021d2853bb01df7260e462' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\section\\sectionProductsAdmin.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:table/tableProducts.tpl' => 1,
    'file:table/tableCategories.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66195a36914b46_61882918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:table/tableProducts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <?php $_smarty_tpl->_subTemplateRender("file:table/tableCategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
