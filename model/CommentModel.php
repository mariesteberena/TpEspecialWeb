<?php
    class CommentModel
    {
        private $db;
        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_menu;charset=utf8', 'root', '');
        }

        function getAll($id_product){
            $query = $this->db->prepare('SELECT U.nombre, C.id_comentario, C.comentario, C.puntuacion,C.fecha
            FROM usuarios AS U
            RIGHT JOIN comentarios AS C
            ON U.id_usuario = C.id_usuario
            LEFT JOIN productos AS P 
            ON C.id_producto = P.id_producto WHERE C.id_producto = ?');
            $query->execute([$id_product]);
            $comments = $query->fetchAll(PDO::FETCH_OBJ);
            return $comments;
        }


        function delete($id_comment){
            $query = $this->db->prepare('DELETE FROM comentarios WHERE id_comentario=?');
            $query->execute([$id_comment]);
        }
        
        function insert($id_prod, $comment, $id_user, $score){
            $query = $this->db->prepare('INSERT INTO `comentarios` 
            (`id_comentario`, `id_producto`, `id_usuario`, `comentario`, `puntuacion`,`fecha`)
             VALUES (NULL, ?, ?, ?, ?,NOW())');
            $query->execute([$id_prod, $id_user, $comment, $score]);            
            return $this->db->lastInsertId();
        }

        public function getComment($id_comment){
            $query = $this->db->prepare('SELECT C.id_comentario,C.id_producto,C.comentario,C.puntuacion,U.nombre,C.fecha 
            FROM `comentarios` AS C 
            INNER JOIN usuarios As U
             ON C.id_usuario = U.id_usuario 
             WHERE C.id_comentario = ?');
            $query->execute([$id_comment]);
            $comment = $query->fetch(PDO::FETCH_OBJ);
            return $comment;
        }

        //Obtener por orden ascendente o descendente y filtrando por puntaje
        public function getSorted($id_product, $sortBy, $order, $score='%'){
            $sql = 'SELECT U.nombre, C.id_comentario, C.comentario, C.puntuacion
            FROM usuarios AS U
            RIGHT JOIN comentarios AS C
            ON U.id_usuario = C.id_usuario
            LEFT JOIN productos AS P 
            ON C.id_producto = P.id_producto 
            WHERE C.id_producto = ? AND C.puntuacion LIKE ?
            ORDER BY '.$sortBy. ' '.$order;
            $query = $this->db->prepare($sql);
            $query->execute([$id_product, $score]);
            $comments = $query->fetchAll(PDO::FETCH_OBJ);
            return $comments;
        }
        
    }