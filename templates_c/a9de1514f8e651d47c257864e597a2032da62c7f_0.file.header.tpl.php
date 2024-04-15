<?php
/* Smarty version 3.1.39, created on 2024-04-15 21:50:09
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d84f1915be2_47185716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9de1514f8e651d47c257864e597a2032da62c7f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\header.tpl',
      1 => 1713210607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d84f1915be2_47185716 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text-css" href="css/style.css">

    <!-- development version, includes helpful console warnings -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"><?php echo '</script'; ?>
>

    <title>MenuApp</title>

</head>

<body class="bg-light-bg-subtle">
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class=" d-flex justify-content-around container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item  ">
                            <a href="menu" class="nav-link">Menu</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>

                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                    <li>
                                        <a href="nombre_categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
"
                                            class="dropdown-item"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>

                        </li>
                        <?php if (($_SESSION['USER_ROL'] == 1)) {?>
                            <li class="nav-item ">
                                <a href="admin" class="nav-link me-2">Administrar Categorias y Productos</a>
                            </li>
                            <li class="nav-item ">
                                <a href="usuarios" class="nav-link me-2">Administrar Usuarios</a>
                            </li>
                        <?php }?>

                        <?php if ((isset($_SESSION['USER_ID']))) {?>
                            <li class="nav-item ">
                                <a href="logout" class="nav-link">Cerrar sesión(<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item ">
                                <a href="registro" class="nav-link">Registro</a>
                            </li>
                            <li class="nav-item ">
                                <a href="login" class="nav-link">Ingresar</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>

</header><?php }
}
