<?php
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        // case 'login':
            
        //     break;
        case 'del_user':
            if (isset($_GET['id'])) {
                $id_user = $_GET['id'];
                del_user($id_user);
            }
            include '../admin/view/user.php';
            break;
    }
}
