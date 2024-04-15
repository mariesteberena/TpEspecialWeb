<?php
require_once('view/ErrorView.php');
//FUNCIONES DE ABM DE CATEGORIAS (y renderización necesaria)

    class CategAdminController{
    private $categoryModel;
    private $productView;
    private $errorView;
    private $authHelper;

    public function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->productView = new ProductView();
        $this->errorView = new ErrorView();
        $this->categoryModel = new CategoryModel();
    }

    function insertCateg()
    {
        $access_level = "1";
        $this->authHelper->getPermission($access_level);

        if (!empty($_GET['nombre_categoria']) && isset($_GET['nombre_categoria'])) {

            $category = $_GET['nombre_categoria'];
            $this->categoryModel->insert($category);

            header("Location: " . ADMIN);
        } else {
            $this->errorView->render("Ingreso inválidos");
        }
    }

    function deleteCateg($id)
    {
        $access_level = "1";
        $this->authHelper->getPermission($access_level);
        $category = $this->categoryModel->getCategory($id);
        if ($category) {
            $this->categoryModel->delete($id);
            header("Location: " . ADMIN);
        } else {
            $this->errorView->render("La categoría no existe");
        }
    }

    function modifyCateg()
    {
        $access_level = "1";
        $this->authHelper->getPermission($access_level);
        
        if (
            !empty($_REQUEST['categoria']) && !empty($_REQUEST['id'])
            && isset($_REQUEST['categoria']) && isset($_REQUEST['id'])
        ) {

            $id = $_REQUEST['id'];
            $newCat = $_REQUEST['categoria'];
            $this->categoryModel->modify($newCat, $id);
            header("Location: " . ADMIN);            
        } else {
           $this->errorView->render("Ingreso inválido");
        }
    }

    function renderModifyCateg($id)
    {
        $access_level = "1";
        $this->authHelper->getPermission($access_level);
        $categories = $this->categoryModel->getAll();
        $this->productView->renderCategoriesForm($id, $categories);
    }
    
}
