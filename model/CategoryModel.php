<?php
// -------- HELPER
require_once 'helpers/AuthHelper.php';
// -------- PRODUCTOS
//require_once 'view/CategoryView.php';
require_once 'model/CategoryModel.php';
class CategoryModel{
    private $db;
    public function __construct(){ 
       $this->db = new PDO('mysql:host=localhost;'.'dbname=db_menu;charset=utf8', 'root', '');
    }
    
    function getAll(){  
        $query =  $this->db->prepare('SELECT nombre_categoria AS nombre, id_categoria AS id FROM categorias');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function insert($category){
        $query =  $this->db->prepare('INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES (NULL, ?)');
        $query->execute([$category]);
    }

    function delete($category){
        $query =  $this->db->prepare('DELETE FROM `categorias` WHERE id_categoria= ?');
        $query->execute([$category]);
    }

    function modify($newCategory,$id){
        $query =  $this->db->prepare("UPDATE `categorias` SET `nombre_categoria` = ? WHERE `id_categoria` = ?");
        $query->execute([$newCategory,$id]);
    }

    function getCategory($id){
        $query = $this->db->prepare('SELECT * FROM `categorias` WHERE id_categoria = ? ');
        $query->execute([$id]);
        $category = $query->fetchAll(PDO::FETCH_OBJ);
        return $category;
    }
}