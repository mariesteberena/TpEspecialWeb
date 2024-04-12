<?php
/* Smarty version 3.1.39, created on 2024-04-12 19:18:32
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\section\sectionUsersAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66196ce8885bf4_04384250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e72b79d6dd4e6c4c5a721027819a8fec2504197' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\section\\sectionUsersAdmin.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:table/tableUsers.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66196ce8885bf4_04384250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['users']->value) {?>
    <div class="d-flex justify-content-center">
        <h3 class="p-3">Administrar usuarios</h2>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:table/tableUsers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
