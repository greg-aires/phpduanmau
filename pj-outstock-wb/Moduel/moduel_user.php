<?php 
    function getall_user(){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT id, CONCAT(first_name,' ',last_name) AS 'full_name',email,pass,position FROM member");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchAll();
        return $kq;
    }
    function add_user($first_name,$last_name,$email_user,$pass_user){
        $conn =  connect_db();
        $sql = "INSERT INTO member (first_name,last_name,email,pass) VALUES ('$first_name','$last_name','$email_user','$pass_user')";
        $conn->exec($sql);
    }
    function del_user($id_user){
        $conn = connect_db();
        $sql = "DELETE FROM member WHERE id =".$id_user;
        // $sql =`DELETE FROM category WHERE id = $id_cate`;
        $conn->exec($sql);
    }
    function check_user($email_login,$pass_login){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM member WHERE email ='".$email_login."' AND pass = '".$pass_login."' ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt -> fetchColumn();
        return $kq;
    }
    function check_typeuser($email_login,$pass_login){
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM member WHERE email ='".$email_login."' AND pass = '".$pass_login."' ");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $checkq = $stmt -> fetchAll();
        return $checkq;
    }
