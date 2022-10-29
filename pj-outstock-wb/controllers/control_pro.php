<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'del_pro':
            if (isset($_GET['id'])) {
                $id_pro = $_GET['id'];
                del_pro($id_pro);
            }
            $kq = getall_pro();
            include '../admin/view/product.php';
            break;
        case 'edit_pro':
            if (isset($_GET['id'])) {
                $id_pro = $_GET['id'];
                $kq = getone_pro($id_pro);
                include '../admin/view/pro_update.php';
            }
            if (isset($_POST['update_pro'])) {
                $id_pro = $_POST['id'];
                $name_pro = $_POST['name_pro'];
                $status = $_POST['active'];
                // $img_pro = $_POST['img_pro'];
                $price_pro = $_POST['price_pro'];

                // xử lý file img 
                if ($_FILES['img_pro']['name'] != null) {
                    $target_dir = "../upload/";
                    $img = $_FILES["img_pro"]["name"];
                    $target_file = $target_dir . basename($img);
                    $img_pro = $target_file;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    move_uploaded_file($_FILES['img_pro']['tmp_name'], $target_file);
                }
                else {
                    $img_pro = $_POST['name_img_pro'];
                }
                edit_pro($id_pro, $name_pro, $status, $price_pro, $img_pro);
                $kq = getall_pro();
                include '../admin/view/product.php';
            }
                // $_FILES['img_pro']['name'] !== null ? $img_pro = $_POST['name_img_pro'] : $img_pro = $_FILES['img_pro']['name'];
            break;
        case 'add_pro':
            if (isset($_POST['themmoi'])) {
                include '../admin/view/pro_add.php';
            }
            if (isset($_POST['them_pro'])) {
                $name_pro = $_POST['name_pro'];
                $price_pro = $_POST['price_pro'];
                $valu_cate = $_POST['valu_cate'];
                // Hiển thị img 
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img_pro"]["name"]);
                $img = $target_file;
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // check file img


                move_uploaded_file($_FILES['img_pro']['tmp_name'], $target_file);


                // if ($_FILES['img_pro']['name'] != "") $img = $_FILES['img_pro']['name'];
                // else $img = "";
                add_pro($name_pro, $price_pro, $img, $valu_cate);
                $kq = getall_pro();
                include '../admin/view/product.php';
            }

            break;
    }
}
