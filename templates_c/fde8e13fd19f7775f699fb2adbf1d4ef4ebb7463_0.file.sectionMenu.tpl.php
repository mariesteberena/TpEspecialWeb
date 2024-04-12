<?php
/* Smarty version 3.1.39, created on 2024-04-12 17:30:51
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\section\sectionMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661953ab903c40_94140593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde8e13fd19f7775f699fb2adbf1d4ef4ebb7463' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\section\\sectionMenu.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/form/formPagination.tpl' => 1,
    'file:templates/navPagination.tpl' => 1,
    'file:templates/table/tableProducts.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_661953ab903c40_94140593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="d-flex justify-content-center ">
    <div class="row w-100 mx-5 d-flex justify-content-center">
            <?php $_smarty_tpl->_subTemplateRender("file:templates/form/formPagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:templates/navPagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("file:templates/table/tableProducts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
