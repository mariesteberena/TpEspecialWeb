<?php

require_once('controller/MenuController.php');
require_once('controller/ProductAdminController.php');
require_once('controller/UserAdminController.php');
require_once('controller/CategAdminController.php');

//Controladores
$productAdminController = new ProductAdminController();
$categAdminController = new CategAdminController();
$userAdminController = new UserAdminController();
$menuController = new MenuController();
$authHelper = new AuthHelper();

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');
define('ADMIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/admin');
define('USERS', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/usuarios');
define('DENIED_ACCESS', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/acceso-denegado');


// Verificar la acción y los parámetros
$action = !empty($_GET['action']) ? $_GET['action'] : 'home';
$params = explode('/', $action);

// Asociar acciones con controladores y métodos correspondientes
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
    'agregar-categoria' => ['controller' => $categAdminController, 'method' => 'insertCateg'],
    'borrar' => ['controller' => $productAdminController, 'method' => 'deleteProd'],
    'modificar' => ['controller' => $productAdminController, 'method' => 'renderModifyProd'],
    'confirmarCateg' => ['controller' => $categAdminController, 'method' => 'modifyCateg'],
    'modificarCategorias' => ['controller' => $categAdminController, 'method' => 'renderModifyCateg'],
    'borrarCategoria' => ['controller' => $categAdminController, 'method' => 'deleteCateg'],
    'confirmar' => ['controller' => $productAdminController, 'method' => 'modifyProd'],
    'login' => ['controller' => $userAdminController, 'method' => 'login'],
    'logout' => ['controller' => $userAdminController, 'method' => 'logout'],
    'acceso-denegado' => ['controller' => $userAdminController, 'method' => 'renderDeniedAccess'],
    'searchProducts' => ['controller' => $menuController, 'method' => 'searchProduct'],
    'borrarImagen' => ['controller' => $productAdminController, 'method' => 'deleteImage'],
    'paginar' => ['controller' => $menuController, 'method' => 'renderPaginated']
];

// Verificar si la acción está definida
if (array_key_exists($params[0], $actions)) {
    $controller = $actions[$params[0]]['controller'];
    $method = $actions[$params[0]]['method'];

    // Verificar el método HTTP y los parámetros adicionales
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $param = $_POST ?? null;
    } else {
        $param = isset($params[1]) ? $params[1] : null;
    }
    if(isset ($params[2])){
        $controller->$method($params[1],$params[2]);
        return;
    }
    // Llamar al método correspondiente del controlador con los parámetros
    $controller->$method($param);
} else {
    // Si la acción no está definida, mostrar un mensaje de error
    echo "404 - Página no encontrada";
}

