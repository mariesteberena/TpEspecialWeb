<?php
class ProductModel{
    private $db;
    public function __construct(){ 
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_menu;charset=utf8', 'root', '');
    }

    public function getAll(){
        $query = $this->db->prepare('SELECT p.nombre_producto, p.precio, p.id_producto,
         p.id_categoria, p.imagen,c.nombre_categoria, c.id_categoria 
        FROM productos p 
        INNER JOIN categorias c 
        ON p.id_categoria = c.id_categoria');
        $query->execute(); 
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
    function insert($product,$price, $detail,$category, $pathImg = null){
        
        $query = $this->db->prepare('INSERT INTO productos(nombre_producto,precio, detalle,id_categoria,imagen) 
        VALUES (?,?,?,?,?)');
        $query->execute([$product,$price, $detail,$category,$pathImg]);        
    }
    

    function delete($id) {
        $query = $this->db->prepare('DELETE FROM productos WHERE id_producto=?');
        return $query->execute([$id]);
    }

    function modify($category,$product, $detail,$price, $pathImg=null,$id) {
        $query =  $this->db->prepare('UPDATE `productos` 
        SET `id_categoria` = ?,
        `nombre_producto` = ?, 
        `detalle` = ?,
        `precio` = ?,
        `imagen` = ?
        WHERE `productos`.`id_producto` = ?'); 
        return $query->execute([$category,$product, $detail,$price, $pathImg,$id]);
    }

    function uploadImage($image){
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }

    function deleteImage($pathImg){ //Elimina la imagen del servidor (../img/..) retorna el resultado (T/F)
        $unlinked = unlink($pathImg);
        return $unlinked;
    }

    function unbindImage($id_product){ //Elimina el path de la imagen asociada al producto en la DB
        $query = $this->db->prepare('UPDATE producto 
            SET imagen = NULL
            WHERE producto.id_productos = ?');
        return $query ->execute([$id_product]);
    }

    function getProduct($id){
        $query =  $this->db->prepare(
            'SELECT p.nombre_producto AS nombre,
            p.precio AS precio,
            p.detalle AS detalle, 
            p.imagen AS imagen,
            c.nombre_categoria
            FROM productos p 
            INNER JOIN categorias c
            ON c.id_categoria = p.id_categoria 
            WHERE id_producto= ?');
        $query->execute([$id]);
        $detalle = $query ->fetch(PDO::FETCH_OBJ);
        return $detalle;
    }

//Filtra productos por categoría. Recibe por parámetro el nombre de categoria 
    function filterByCateg($category){
        $query =  $this->db->prepare(
        'SELECT `productos`.*,`categorias`.* FROM `productos` 
        INNER JOIN `categorias` ON `categorias`.`id_categoria`= `productos`.`id_categoria`
        WHERE nombre_categoria = ?');
        $query->execute([$category]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    //Realiza búsqueda de productos en base a nombre,categoria, o precios (max o min)
    function advancedSearch($lowLim=NULL, $uppLim=null, $prodName='%',$categName='%'){
        $query = $this->db->prepare('SELECT p.nombre_producto, p.precio, p.id_producto,
        p.id_categoria, c.nombre_categoria, c.id_categoria 
       FROM productos AS p 
       INNER JOIN categorias AS c 
       ON p.id_categoria = c.id_categoria
       WHERE p.precio BETWEEN IFNULL(? ,0) AND IFNULL(?,99999) AND
       p.nombre_producto LIKE ? AND
       c.nombre_categoria LIKE ?');
       $query->execute([$lowLim, $uppLim, $prodName, $categName]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function countProducts(){
        $query  = $this->db->prepare('SELECT COUNT(id_producto) AS prod_num
        FROM productos');
        $query->execute();
        $count = $query->fetch(PDO::FETCH_OBJ);
        return $count;
    }

    function getPage($numInPage, $offset=0){
        $query = $this->db->prepare('SELECT p.nombre_producto, p.precio, p.id_producto,
        p.id_categoria, c.nombre_categoria, c.id_categoria 
        FROM productos p 
        INNER JOIN categorias c 
        ON p.id_categoria = c.id_categoria
        ORDER BY p.nombre_producto
        LIMIT '.$numInPage.' OFFSET ' .$offset); //Ambos valores son chequeados en el controller
        $query->execute([]);
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

}