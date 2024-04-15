<?php
/* Smarty version 3.1.39, created on 2024-04-15 23:09:12
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\form\formInsertComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d9778f343d2_69805479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e824c4077b71fbc13d060db1fc442d03d40530bd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\form\\formInsertComment.tpl',
      1 => 1713215346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d9778f343d2_69805479 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container border border-dark rounded list-group-item">

    <form action="comentar" method="post" id="post-comment-f">
        <?php if ((isset($_SESSION['USER_ROL']))) {?>
            <?php if ($_SESSION['USER_ROL'] == 2) {?>
                <h4>Ingrese comentario</h4>

                <div class="form-group">
                    <div class="input-group-prepend">
                        <label for="Comentario" class="mt-2">Comentario</label>
                        <input type="text" class="form-control" required="required" placeholder="Ingrese su comentario"
                            name="comentario">
                    </div>
                    <div class="input-group-prepend">
                        <label for="puntuacion" class="mt-2">Puntuacion</label>
                        <select name="puntuacion" id="puntuacion">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="input-group-prepend mt-2">
                        <button class="btn btn-dark" type="submit">
                            Comentar
                        </button>
                    </div>

                </div>
            <?php } elseif ($_SESSION['USER_ROL'] == 1) {?>
            </form>
            <div class="container">
                <h3>Ingresá como usuario para comentar!</h3>
                <a href="logout" type="button" class="btn btn-secondary m-1">Cerrar sesión</a>
            </div>
        <?php }?>
    <?php } else { ?>
        <div class="container">
            <h3>Ingresá como usuario para comentar!</h3>
            <a href="registro" type="button" class="btn btn-primary m-1"> Registrarse</a>
            <a href="login" type="button" class="btn btn-primary m-1"> Ingresar</a>
        </div>

    <?php }?>

</div><?php }
}
