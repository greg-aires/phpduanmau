<?php 
session_start();
ob_start();
?>
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
      <?php
      if (isset($_POST['checkout'])) {
            $total = $_POST['total'];
      }
      $tax = round((0.1 * $total), 1);
      $ship = 10;
      $bill = round(($total + $tax + $ship), 1);
      ?>
      <div class="checkout">
            <div class="container">
                  <div class="row-flex">
                        <div class="c-7 col">
                              <div class="checkout-header">
                                    <a href="#" class="header__logo">
                                          <img class="header__image-logo" src="./public/images/logo_dark.svg" alt="">
                                    </a>
                                    <ul class="header__list">
                                          <li>
                                                <a href="#">Cart</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="#">Information</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="#">Shipping</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                          <li>
                                                <a href="#">Payment</a><i class="fa-solid fa-angle-right"></i>
                                          </li>
                                    </ul>
                              </div>
                              <div class="checkout-main">
                                    <div class="main__info">
                                          <div class="info__header">
                                                <h2 class="info__header-title">
                                                      Contact information
                                                </h2>
                                                <p class="info__header-account">
                                                      Already have an account?
                                                      <a href="#">Log in</a>
                                                </p>
                                          </div>
                                          <div class="info__content">
                                                <div class="info__field-set">
                                                      <input type="email" placeholder="Email" aria-required="true">
                                                </div>
                                                <div class="info__content-desc">
                                                      <input id="checkbox__contact-info" type="checkbox">
                                                      <label for="checkbox__contact-info">
                                                            Email me with news and offers
                                                      </label>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="main__shipping">
                                          <div class="shipping__header">
                                                <h2 class="shipping__header-title">
                                                      Shipping address
                                                </h2>
                                          </div>
                                          <div class="shipping__content">
                                                <form action="#" method="post" class="shipping__form">
                                                      <div class="field">
                                                            <label for="select-place">Country/region</label>
                                                            <select name="" id="select-place">
                                                                  <option value="Qatar">Qatar</option>
                                                            </select>
                                                      </div>
                                                      <div class="field__double">
                                                            <div class="field field__first">
                                                                  <input type="text" placeholder="First name (optional)">
                                                            </div>
                                                            <div class="field field__last">
                                                                  <input type="text" placeholder="Last name">
                                                            </div>
                                                      </div>
                                                      <div class="field">
                                                            <input type="text" placeholder="Address">
                                                      </div>
                                                      <div class="field">
                                                            <input type="text" placeholder="Apartment, suite, etc. (optional)">
                                                      </div>
                                                      <div class="field">
                                                            <input type="text" placeholder="City">
                                                      </div>
                                                      <div class="field__save">
                                                            <input type="checkbox" id="checkbox__save-remember">
                                                            <label for="checkbox__save-remember">
                                                                  Save this information for next time
                                                            </label>
                                                      </div>
                                                </form>
                                          </div>
                                          <div class="shipping__footer">
                                                <a href="./view-cart.php" class="shipping__link-back">
                                                      <i class="fa-sharp fa-solid fa-angle-left"></i>
                                                      Return to cart
                                                </a>
                                                <button class="btn btn-shipping">Continue to shipping</button>
                                          </div>
                                    </div>
                              </div>
                              <div class="checkout-footer">
                                    <ul class="footer__policy-list">
                                          <li><a href="">Refund policy</a></li>
                                          <li><a href="">Shipping policy</a></li>
                                          <li><a href="">Privacy policy</a></li>
                                          <li><a href="">Terms of service</a></li>
                                    </ul>
                              </div>
                        </div>


                        <!-- ASIDE  -->
                        <div class="c-5 col">
                              <div class="sidebar-content">
                                    <?php 
                                    foreach ($_SESSION['viewcart'] as  $value) {
                                          echo'<table class="sidebar__table">
                                          <tr class="product__item">
                                                <td class="product__image">
                                                      <img src="' . $value[3] . '" alt="">
                                                </td>
                                                <td class="product__desc">
                                                      ' . $value[1] . '
                                                </td>
                                                <td class="product__price">
                                                      <span>$' . $value[2] . '</span>
                                                </td>
                                          </tr>
                                    </table>';
                                    }
                                    ?>




                                    <!-- BILL  -->
                                    <div class="sidebar__order">
                                          <table class="sibar__table-order">
                                                <tbody>
                                                      <tr class="total subtotal">
                                                            <th>Subtotal</th>
                                                            <td><?= $total ?></td>
                                                      </tr>
                                                      <tr class="total shipping">
                                                            <th>Shipping</th>
                                                            <td><?= $ship ?></td>
                                                      </tr>
                                                      <tr class="total taxes">
                                                            <th>
                                                                  Taxes (estimated)
                                                            </th>
                                                            <td><?= $tax ?></td>
                                                      </tr>
                                                </tbody>
                                                <tfoot>
                                                      <tr class="total">
                                                            <th>Total</th>
                                                            <td>
                                                                  <span>USD</span>
                                                                  <span>
                                                                        <?= $bill ?>
                                                                  </span>
                                                            </td>
                                                      </tr>
                                                </tfoot>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</body>

</html>