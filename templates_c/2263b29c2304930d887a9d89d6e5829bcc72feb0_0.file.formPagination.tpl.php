<?php
/* Smarty version 3.1.39, created on 2024-04-15 21:37:35
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formPagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d81ffb0cdf9_39883812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2263b29c2304930d887a9d89d6e5829bcc72feb0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formPagination.tpl',
      1 => 1713209853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d81ffb0cdf9_39883812 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="sendPages" method="get">
    <div v-if="paginate == true" class="container">
        <a href="paginar/5" class="btn btn-dark m-4">Recorrer de forma paginada</a>
    </div>
</form><?php }
}
