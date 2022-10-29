<?php
include '../Moduel/connectdb.php';
include '../Moduel/moduel_cate.php';
include '../Moduel/moduel_pro.php';
include '../Moduel/moduel_user.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="dashboarhport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link rel="stylesheet" href="./css/styles.css">
      <link rel="stylesheet" href="./css/Grid.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
      <div class="admin__app">
            <?php
            include './view/nav.php';
            include '../controllers/control_cate.php';
            include '../controllers/control_pro.php';
            include '../controllers/control_login.php';
            if (isset($_GET['act'])) {
                  switch ($_GET['act']) {
                        case 'product_db':
                              include './view/product.php';
                              break;
                        case 'user_db':
                              include './view/user.php';
                              break;
                        case 'chart':
                              include './view/chart.php';
                              break;
                        case 'cate_db':
                              include './view/category.php';
                              break;
                        case 'home':
                              include './view/home.php';
                              break;
                        case 'logout':
                              if (isset($_SESSION['user_name'])) {
                                    unset($_SESSION['user_name']);
                              }
                              header('location:../site/index.php');
                              // echo'đăng xuất thành công';
                              break;
                  }
            } else {
                  include './view/home.php';
            }
            ?>

      </div>
      <script src="./js/srcipt.js"></script>
</body>

</html>