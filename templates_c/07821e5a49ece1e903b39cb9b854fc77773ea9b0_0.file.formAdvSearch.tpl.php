<?php
/* Smarty version 3.1.39, created on 2024-04-12 17:26:12
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formAdvSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66195294ae3ef4_73307845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07821e5a49ece1e903b39cb9b854fc77773ea9b0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formAdvSearch.tpl',
      1 => 1711922392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66195294ae3ef4_73307845 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container col-auto">
    <form action="searchProducts" method="get" class="form-group">
        <div class="container m-3 col-sm-auto w-100">
            <h4 class="h4 m-2">Buscá lo que quieras!</h4>
            <div class="col-10">
                <small class="form-text text-muted m-2">Ingresá palabras claves (o algunas letras que recuerdes)</small>
            </div>
            <div class="col-12">
                <input type="text" name="prod-name" class=" form-control m-2 w-75" placeholder="Producto">
            </div>
            <div class="col-12">
                <input type="number" name="lowerLim-price" class="form-control m-2 w-75" placeholder="Precio mínimo">
            </div>
            <div class="col-12">
                <input type="number" name="upperLim-price" class="form-control m-2 w-75" placeholder="Precio máximo">
            </div>
            <div class="d-flex form-row">
                <div class="col-12">
                    <input type="text" name="categ-name" class="form-control m-2 w-75" placeholder="Categoría ">
                </div>
            </div>
            <div class="d-flex justify-content-start form-row">

                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-dark px-4 m-2">Buscar</button>
                </div>
                <div class="col-auto">
                    <a type=button href="home" class="btn btn-outline-dark px-4 m-2">Volver</a>
                </div>
            </div>

        </div>

    </form>
</div><?php }
}