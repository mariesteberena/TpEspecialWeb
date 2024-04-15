<?php
/* Smarty version 3.1.39, created on 2024-04-15 23:08:48
  from 'D:\xampp\htdocs\Proyectos\Web II\TPE2024\templates\vue\commentsVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_661d97605413b3_12802034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '303e239667c28abf113492e3eefab4a9a906e068' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Proyectos\\Web II\\TPE2024\\templates\\vue\\commentsVue.tpl',
      1 => 1713215302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form/formInsertComment.tpl' => 1,
  ),
),false)) {
function content_661d97605413b3_12802034 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="comments">

        <div class="container   p-4 mb-4 bg-light border border-dark rounded list-group-item">
            <div v-if="empty">
                <h3>{{empty}}</h3>

            </div>
            <div v-else>
                <div>
                    <div class="d-flex m-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input mx-1" name="order-check" v-model="order"
                                true-value="yes" false-value="no">
                            <label for="checkbox" class="form-check-label mx-1">Ordenar</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input mx-1" name="score-filter" id="score-filter-radio"
                                v-model="scoreFilter" true-value="yes" false-value="no">
                            <label for="score-filter" class="form-check-label mx-1">Filtrar por puntaje</label>
                        </div>
                    </div>
                    <div v-if="scoreFilter == 'yes'" class="container m-2">
                        <h5 class="h5">Filtrar por puntaje</h5>

                        <select name="filterBy" class="form-select" id="filterBy-select">
                            <option v-for="n in 5" v-bind:value="n">{{n}}</option>
                        </select>
                        <button v-if="order == 'no'" class="btn btn-secondary m-2" v-on:click.prevent="filterComments()">
                            Filtrar
                        </button>
                    </div>
                    <div v-if="order == 'yes'" class="container m-2">
                        <h5 class="h5">Ordenar por</h5>
                        <select name="sortBy" class='form-select' id="sortBy-select" v-model="sortBy">
                            <option value="puntuacion">Puntaje</option>
                            <option value="id">Antiguedad</option>
                        </select>
                        <button class="btn btn-secondary m-2" v-on:click.prevent="sortComments('ASC')">
                            Ascendente
                        </button>
                        <button class="btn btn-secondary  m-2" v-on:click.prevent="sortComments('DESC')">
                            Descendente
                        </button>
                        <button class="btn btn-secondary  m-2" v-on:click="renderComments">
                            Quitar orden
                        </button>
                    </div>
                    <div v-if="order=='yes' && sortBy == 'puntuacion' && scoreFilter == 'yes'" class="alert alert-danger">
                        Si se filtra por puntaje el ordenamiento por puntaje no tendrá efecto!
                    </div>


                </div>
                <div v-show="status == true" class="alert alert-success m-1">
                    {{message}}
                </div>
                <div v-show="status == false" class="alert alert-danger m-1">
                    {{message}}
                </div>


                <div v-if="notFound">
                    <h3 class="h3 m-1">{{notFound}}</h3>
                </div>
                <div v-else>
                    <div class="list-group-item bg-light" v-for="comment in comments" :key="comment.id">
                        <div class="m-2 p-2">
                            <div
                                class="row row-no-gutters justify-content-between align-items-center bg-white border border-dark rounded bottom p-2">
                                <h3 class="col-auto  text-capitalize px-2">{{comment.nombre}}</h3>
                                <div class="col-sm-auto">
                                    <span v-for="n in parseInt(comment.puntuacion)">⭐</span>
                                </div>
                                <div class="h5 border-right p-3 text-center">{{comment.comentario}}</div>
                                <p>{{comment.fecha}}</p>
                            </div>
                            <div class="row">
                            
                            <?php if (((isset($_SESSION['USER_ROL'])) && $_SESSION['USER_ROL'] == "1")) {?>
                                
                                    <div class="col-20 justify-content-end">
                                        <button type="button" class="btn btn-sm btn-danger m-2 w-25" name="delete"
                                            v-on:click="delComment(comment.id)" v-bind:comment-id="comment.id">Borrar</button>
                                    
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        
            <div v-show="status == true" class="alert alert-success m-1">
                {{message}}
            </div>
            <div v-show="status == false" class="alert alert-danger m-1">
                {{message}}
            </div>
        


    </div>


    <?php $_smarty_tpl->_subTemplateRender("file:form/formInsertComment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><?php }
}
