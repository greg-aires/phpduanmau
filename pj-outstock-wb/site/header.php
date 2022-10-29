<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="short icon" href="//cdn.shopify.com/s/files/1/1573/5553/files/icon_77100d4d-857c-43ad-8f83-a543a7e2e4b9_32x32.png?v=1613719979">
      <!-- Link FontAwesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
      <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
      <!-- Custom Link CSS file -->
      <link rel="stylesheet" href="./public/styles/index.css">
      <link rel="stylesheet" href="./public/styles/grid.css">
</head>

<body>
      <!--  VIEW CART  -->
      <aside class="cart-drawer">
            <div class="cart-drawer-closing">
                  <a class="cart-drawer-close">
                        <i class="fa-solid fa-x"></i>
                  </a>
            </div>
            <h3 class="cart-drawer-title">
                  <span>Shopping cart</span>
            </h3>
            <div class="cart-drawer-container">
                  <form action="checkout.php" class="cart-drawer-form" method="POST">
                        <div class="cart-drawer-inner">
                              <div class="cart-drawer-product">
                                    <?php 
                                    $i =0;
                                    $total = 0;
                                          foreach ($_SESSION['viewcart'] as $value) {
                                                
                                                $total_price = $value[2] * $value[4];
                                                $total += $total_price;
                                          echo'
                                          <div class="drawer-product">
                                                <div class="drawer-product-image">
                                                      <a href="#" class="drawer-product-link">
                                                            <img class="drawer-image" src="'.$value[3].'" alt="">
                                                      </a>
                                                </div>
                                                <div class="drawer-product-content">
                                                      <div class="drawer-product-title">
                                                            <a href="#">'.$value[1].'</a>
                                                      </div>
                                                      <div class="drawer-product-price">
                                                            <div class="drawer-price-product">
                                                                  <span class="money">$'.$value[2].'</span>
                                                            </div>
                                                      </div>
                                                      <div class="drawer-product-delete">
                                                            <a href="./index.php?act=delonecart&id=' . $i . '">
                                                                  <span>Remove</span>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>';
                                          $i++;
                                          }

                                    ?>
                                    
                                    <div class="drawer-note">
                                          <div class="drawer-note-cart">
                                                <a class="drawer-note-btn" href="#">
                                                      <i class="fa fa-times"></i>
                                                      add order note
                                                </a>
                                          </div>
                                    </div>
                                    <div class="drawer-cart-footer">
                                          <div class="drawer-cart-content">
                                                <div class="drawer-sub-total">
                                                      <span class="drawer-subtotal-heading">Subtotal</span>
                                                      <span class="drawer-subtotal-price">
                                                            <span class="money">$
                                                                  <?= $total ?>
                                                            </span>
                                                      </span>
                                                </div>
                                                <div class="drawer-shipping">
                                                      Shipping, taxes, and discounts will be calculated at checkout.
                                                </div>
                                                <div class="drawer-button">
                                                      <div class="drawer-button-box">
                                                            <a href="index.php?act=view_cart" type="submit" class="btn btn-drawer">View Cart</a>
                                                      </div>
                                                      <div class="drawer-button-box">
                                                            <a href="checkout.php" type="submit" class="btn btn-checkout">Check Out</a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <input type="hidden" name="total" value="<?= $total?>">
                  </form>
            </div>
      </aside>

      <!-- MAIN  -->

      <div class="app">
            <header class="header">
                  <div class="container">
                        <div class="header-main row-flex row-flex-margin align-items">
                              <div class="header-logo col c-2">
                                    <a href="index.php">
                                          <img src="./public/images/logo_dark.svg" alt="Logo Outstock">
                                    </a>
                              </div>
                              <ul class="header-navbar col c-7">
                                    <li>
                                          <a class="active" href="index.php">
                                                <span>Home</span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="index.php?act=product">
                                                <span>Shop</span>
                                          </a>
                                    </li>
                                    <li class="has-dropdown">
                                          <a href="index.php?act=collection">
                                                <span>Collection</span>
                                          </a>
                                          <div class="collection-dropdown">
                                                <div class="container">
                                                      <div class="coll-dropdown">
                                                            <h3 class="coll-title-list">
                                                                  List collection
                                                            </h3>
                                                            <div class="row-flex row-flex-margin">
                                                                  <div class="coll-list">
                                                                        <div class="coll-item">
                                                                              <a class="coll-image" href="#">
                                                                                    <img src="./public/images/collections-2.webp" alt="Decor Art">
                                                                              </a>
                                                                              <h5 class="coll-title">
                                                                                    <a href="#">Decor Art</a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="coll-item">
                                                                              <a class="coll-image" href="#">
                                                                                    <img src="./public/images/collections-3.webp" alt="Decor Art">
                                                                              </a>
                                                                              <h5 class="coll-title">
                                                                                    <a href="#">Furniture</a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="coll-item">
                                                                              <a class="coll-image" href="#">
                                                                                    <img src="./public/images/collections-5.webp" alt="Decor Art">
                                                                              </a>
                                                                              <h5 class="coll-title">
                                                                                    <a href="#">Kitchen Things</a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="coll-item">
                                                                              <a class="coll-image" href="#">
                                                                                    <img src="./public/images/collections-6.webp" alt="Decor Art">
                                                                              </a>
                                                                              <h5 class="coll-title">
                                                                                    <a href="#">Illumination</a>
                                                                              </h5>
                                                                        </div>
                                                                        <div class="coll-item">
                                                                              <a class="coll-image" href="#">
                                                                                    <img src="./public/images/collections-8.webp" alt="Decor Art">
                                                                              </a>
                                                                              <h5 class="coll-title">
                                                                                    <a href="#">Sale Off</a>
                                                                              </h5>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </li>
                                    <li>
                                          <a href="index.php?act=blog">
                                                <span>Blog</span>
                                          </a>
                                    </li>
                                    <li>
                                          <a href="index.php?act=contact">
                                                <span>Contact</span>
                                          </a>
                                    </li>
                              </ul>
                              <div class="header-item col c-3">
                                    <a class="header-item__search">
                                          <span>
                                                <svg version="1.1" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' xml:space='preserve'>
                                                      <path d="M344.5,298c15-23.6,23.8-51.6,23.8-81.7c0-84.1-68.1-152.3-152.1-152.3C132.1,64,64,132.2,64,216.3c0,84.1,68.1,152.3,152.1,152.3c30.5,0,58.9-9,82.7-24.4l6.9-4.8L414.3,448l33.7-34.3L339.5,305.1L344.5,298z M301.4,131.2c22.7,22.7,35.2,52.9,35.2,85c0,32.1-12.5,62.3-35.2,85c-22.7,22.7-52.9,35.2-85,35.2c-32.1,0-62.3-12.5-85-35.2c-22.7-22.7-35.2-52.9-35.2-85c0-32.1,12.5-62.3,35.2-85c22.7-22.7,52.9-35.2,85-35.2C248.5,96,278.7,108.5,301.4,131.2z">
                                                      </path>
                                                </svg>
                                          </span>
                                          <span>Seach</span>
                                    </a>

                                    <div class="header-item__card">
                                          <a href="#" class="item__card-link onclickBtn">
                                                <i>
                                                      <svg version="1.1" xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 512 512' style="enable-background:new 0 0 512 512;" xml:space='preserve'>
                                                            <path d="M448,160h-64v-4.5C384,87,329,32,260.5,32h-8C184,32,128,87,128,155.5v4.5H64L32,480h448L448,160z M160,155.5c0-50.7,41.8-91.5,92.5-91.5h7.5h0.5c50.7,0,91.5,40.8,91.5,91.5v4.5H160V155.5z M67.8,448l24.9-256H128v36.3c-9.6,5.5-16,15.9-16,27.7c0,17.7,14.3,32,32,32s32-14.3,32-32c0-11.8-6.4-22.2-16-27.7V192h192v36.3c-9.6,5.5-16,15.9-16,27.7c0,17.7,14.3,32,32,32s32-14.3,32-32c0-11.8-6.4-22.2-16-27.7V192h35.4l24.9,256H67.8z">
                                                            </path>
                                                      </svg>
                                                </i>
                                                <span>Cart</span>
                                                (
                                                <span id="CartCount">
                                                      <?php
                                                      echo (isset($_SESSION['viewcart']) && count($_SESSION['viewcart'])) > 0 ? count($_SESSION['viewcart']) : '0';
                                                      
                                                      
                                                      ?>
                                                </span>
                                                )
                                          </a>
                                    </div>

                                    <div class="header-bars">
                                          <i class="fa-solid fa-bars"></i>
                                          <ul class="header-bars-list">
                                                <li class="header-bars-item">
                                                      <a href="index.php?act=login">Login</a>
                                                </li>
                                                <li class="header-bars-item">
                                                      <a href="register-account.php">Register</a>
                                                </li>
                                          </ul>
                                    </div>
                              </div>
                        </div>
                  </div>
            </header>
      </div>
</body>