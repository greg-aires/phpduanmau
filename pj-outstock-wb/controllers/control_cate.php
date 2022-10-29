<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'del_cate':
            if (isset($_GET['id'])) {
                $id_cate = $_GET['id'];
                del_cate($id_cate);
            }
            include '../admin/view/category.php';
            break;
        case 'edit_cate':
            if (isset($_GET['id'])) {
                $id_cate = $_GET['id'];
                $kq = getone_cate($id_cate);
                include '../admin/view/update_cate.php';
            }
            if (isset($_POST['update_cate'])) {
                $id_cate = $_POST['id'];
                $name_cate = $_POST['name_cate'];
                $status = $_POST['active'];
                edit_cate($id_cate, $name_cate, $status);
                include '../admin/view/category.php';
            }
            break;
        case 'add_cate':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $name_cate = $_POST['name_cate'];
                add_cate($name_cate);
                include '../admin/view/category.php';
            }
            break;
        
        
    }   
}
