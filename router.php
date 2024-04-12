<?php

require_once('controller/MenuController.php');
require_once('controller/ProductAdminController.php');
require_once('controller/UserAdminController.php');

//Controladores

$productAdminController = new ProductAdminController();
$userAdminController = new UserAdminController();
$menuController = new MenuController();
$authHelper = new AuthHelper();

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('ADMIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/admin');
define('USERS', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/usuarios');
define('DENIED_ACCESS', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/acceso-denegado');

// Verifico si action no esta vacío, si lo está redirige a home
$action = !empty($_GET['action']) ? $_GET['action'] : 'home';

// Divido el valor separando por '/'
$params = explode('/', $action);

// Creo un diccionario que asocie las acciones con los métodos correspondientes de los controladores
$actions = [
    'home' => ['controller' => $menuController, 'method' => 'renderHome'],
    'menu' => ['controller' => $menuController, 'method' => 'renderMenu'],
    'nombre_categoria' => ['controller' => $menuController, 'method' => 'filterByCat'],
    'detalle' => ['controller' => $menuController, 'method' => 'renderDetail'],
    'admin' => ['controller' => $productAdminController, 'method' => 'renderProductAdmin'],
    'usuarios' => ['controller' => $userAdminController, 'method' => 'renderUsersAdmin'],
    'cambiarRol' => ['controller' => $userAdminController, 'method' => 'modifyUserRole'],
    'borrarUsuario' => ['controller' => $userAdminController, 'method' => 'deleteUser'],
    'registro' => ['controller' => $userAdminController, 'method' => 'createUser'],
    'agregar-producto' => ['controller' => $productAdminController, 'method' => 'insertProd'],
    'agregar-categoria' => ['controller' => $productAdminController, 'method' => 'insertCateg'],
    'borrar' => ['controller' => $productAdminController, 'method' => 'deleteProd'],
    'modificar' => ['controller' => $productAdminController, 'method' => 'modifyProd'],
    'modificarCategorias' => ['controller' => $productAdminController, 'method' => 'modifyCateg'],
    'borrarCategoria' => ['controller' => $productAdminController, 'method' => 'deleteCateg'],
    //'confirmar' => ['controller' => $productAdminController, 'method' => 'confirmModifyProd'],
    'login' => ['controller' => $userAdminController, 'method' => 'login'],
    'logout' => ['controller' => $userAdminController, 'method' => 'logout'],
    'acceso-denegado' => ['controller' => $userAdminController, 'method' => 'renderDeniedAccess'],
    'searchProducts' => ['controller' => $menuController, 'method' => 'searchProduct'],
    'borrarImagen' => ['controller' => $productAdminController, 'method' => 'deleteImage'],
    'paginar' => ['controller' => $menuController, 'method' => 'renderPaginated']
];

// Verifico que la acción este definida
if (array_key_exists($params[0], $actions)) {
    $controller = $actions[$params[0]]['controller'];
    $method = $actions[$params[0]]['method'];
    
    // Verificamos si se proporciona un parámetro adicional
    $param = isset($params[1]) ? $params[1] : null;
    
    // Llamamos al método correspondiente del controlador
    $controller->$method($param);
} else {
    // Si la acción no está definida, mostramos un mensaje de error
    echo "404 - Página no encontrada";
}