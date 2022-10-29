<?php
session_start();
ob_start();
include '../Moduel/connectdb.php';
include '../Moduel/moduel_user.php';
include '../Moduel/moduel_pro.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="hidden" value="">
<?php
    include './header.php';
    if (isset($_GET['act'])) {
        switch ($_GET['act']) {
            case 'home':
                include './home.php';
                break;
            case 'product':
                include './product.php';
                break;
            case 'collection':
                include './collections.php';
                break;
            case 'blog':
                include './blog.php';
                break;
            case 'contact':
                include './contact-us.php';
                break;
            case 'detail':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kq=getone_pro($id);
                }
                include './detail.php';
                break;
            case 'login':
                include './login-account.php';
                break;
            case 'view_cart':
                if ( isset($_POST['add-cart'])) {
                    $id = $_POST['id'];
                    $name_cart = $_POST['namepro-sell'];
                    $price_cart = $_POST['pricepro-sell'];
                    $img_cart = $_POST['imgpro-sell'];
                    if (!isset($_POST['amountpro-sell'])) {
                          $amount = 1;
                         
                    }else {
                          $amount = $_POST['amountpro-sell']; 
                    }
                    $arr = array($id, $name_cart, $price_cart, $img_cart, $amount);
                        $_SESSION['viewcart'][] = $arr;
                }
                include './view-cart.php';
                break;
            case 'delonecart':
                if (isset($_GET['id'])) {
                    // $id_pro = $_GET['id'];
                    array_splice($_SESSION['viewcart'],$_GET['id'],1);
                }else{
                    unset($_SESSION['viewcart']);
                }
                include './view-cart.php';
                // header('location: view-cart.php');
                break;
            case 'checkout':
                header('location: checkout.php');
        }
    } else {
        include './home.php';
    }
    include './footer.php';
    ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="./public/javascript/Slide-show.js"></script>
    <script src="./public/javascript/Slider-card.js"></script>
    <script src="./public/javascript/Slide-logo.js"></script>
    <script src="./public/javascript/Slide-blog.js"></script>
    <script src="./public/javascript/Tab-Form.js"></script>
    <script src="./public/javascript/Show-hide.js"></script>
    <script src="./public/javascript/Script.js"></script>
</html>