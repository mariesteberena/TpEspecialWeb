<?php
/* Smarty version 3.1.39, created on 2024-04-12 17:30:51
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\navPagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661953ab9982b8_63900121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f005639e88a55732dc9f54742324009076953deb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\navPagination.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661953ab9982b8_63900121 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['totalPages']->value != null) {?>

<nav class="d-flex justify-content-center" aria-label="Page navigation example">
    <ul class="pagination">
    <?php if ($_smarty_tpl->tpl_vars['actualPage']->value == 1) {?>
        <li class="page-item disabled"><a class="page-link " href="paginar/5/<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
">Previous</a></li>
        
    <?php } else { ?>
        <li class="page-item"><a class="page-link" href="paginar/5/<?php echo $_smarty_tpl->tpl_vars['previousPage']->value;?>
">Previous</a></li>
        
    <?php }?>
        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['totalPages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['totalPages']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                <li class="page-item"><a class="page-link" href="paginar/5/<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
        <?php }
}
?>

    <?php if ($_smarty_tpl->tpl_vars['actualPage']->value == $_smarty_tpl->tpl_vars['totalPages']->value) {?>
        <li class="page-item disabled"><a class="page-link " href="paginar/5/<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">Next</a></li>
        
    <?php } else { ?>
        <li class="page-item"><a class="page-link" href="paginar/5/<?php echo $_smarty_tpl->tpl_vars['nextPage']->value;?>
">Next</a></li>
        
    <?php }?>
    </ul>
</nav>
<?php }
}
}
