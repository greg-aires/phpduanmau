<?php 
    function getall_pro(){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM product ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
    function getone_pro($id_pro){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM product WHERE id = '$id_pro'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
    function del_pro($id_pro){
        $conn = connect_db();
        $sql = "DELETE FROM product WHERE id =".$id_pro;
        // $sql =`DELETE FROM product WHERE id = $id_cate`;
        $conn->exec($sql);
    }
    function edit_pro($id_pro, $name_pro,$status, $price_pro ,$img ){
        $conn = connect_db();
        $sql = "UPDATE product SET img = '".$img."', price = '".$price_pro."' ,name_pro ='".$name_pro."',status ='".$status."'WHERE id =".$id_pro;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }
    function add_pro($name_pro,$price_pro,$img_pro,$valu_cate){
        $conn =  connect_db();
        $sql = "INSERT INTO product (name_pro,price,img,name_cate) VALUES ('$name_pro','$price_pro','$img_pro','$valu_cate')";
        $conn->exec($sql);
    }
    function count_pro(){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT COUNT(*) FROM product WHERE status = 1 ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchColumn();
        return $kq;
    }
    function get_pro($from_pro,$per_page){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM product LIMIT $from_pro,$per_page ");
        // $stmt = $conn->prepare("SELECT * FROM product LIMIT $per_page OFFSET 0");
        // hiện 5 sản phẩm từ sản phẩm thứ 0
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
    
    function get_top(){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM product LIMIT 4 ");
        // $stmt = $conn->prepare("SELECT * FROM product LIMIT $per_page OFFSET 0");
        // hiện 5 sản phẩm từ sản phẩm thứ 0
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
     
?>