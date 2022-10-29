<?php 
    function getall_cate(){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM category");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
    function getone_cate($id_cate){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM category WHERE id = '$id_cate'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
    function del_cate($id_cate){
        $conn = connect_db();
        $sql = "DELETE FROM category WHERE id =".$id_cate;
        // $sql =`DELETE FROM category WHERE id = $id_cate`;
        $conn->exec($sql);
    }
    function edit_cate($id_cate, $name_cate,$status){
        $conn = connect_db();
        $sql = "UPDATE category SET name_cate ='".$name_cate."',status ='".$status."'WHERE id =".$id_cate;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function add_cate($name_cate){
        $conn =  connect_db();
        $sql = "INSERT INTO category (name_cate) VALUES ('$name_cate')";
        $conn->exec($sql);
     }
     
?>