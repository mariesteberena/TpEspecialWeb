<?php
/* Smarty version 3.1.39, created on 2024-04-14 23:52:57
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formModifyProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661c5039746ec0_16524290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78d368c73d4d0b5fb6478c7f4bd091de2dd538af' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formModifyProd.tpl',
      1 => 1713126009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form/selectCategory.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_661c5039746ec0_16524290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="confirmar" class="form-group" method="POST" enctype="multipart/form-data">
    <div class="d-flex justify-content-center">

        <div class="border border-radius w-50 p-2 px-5 ">
            <h4 class="h4 my-4 text-center">Modificar producto</h4>
            <div class="p-2">
                <input type="text" class="form-control mt-2" name="producto" placeholder="Nombre de producto">
                <input type="number" class="form-control mt-2" name="precio" placeholder="Precio">
                <input type="text" class="form-control mt-2" name="detalle" placeholder="Detalle del producto">
                <div class="d-flex flex-row align-items-center">
                    <label for="imagen" class="label-form m-2"> Cargar Imagen</label>
                    <input type="file" name="imagen" id="imageToUpload" class="col form-control my-2">
                </div>

                <?php $_smarty_tpl->_subTemplateRender("file:form/selectCategory.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="d-flex flex-row justify-content-center">

                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="form-control " name="id">
                    <button type="submit" class="btn btn-outline-success col-auto m-2">Confirmar</button>
                    <a href="admin" class="btn btn-danger  col-auto m-2">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
