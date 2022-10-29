
<main class="main-content" role="main">
      <div class="banner-pages">
            <div class="banner-content">
                  <div class="banner-images">
                        <img src="./public/images/banner-pages.webp" alt="banner-pages">
                  </div>
                  <nav class="banner-navbar container">
                        <div class="banner-navbar__wrap">
                              <h1>Your Shopping Cart</h1>
                              <ol class="banner-list">
                                    <li class="banner-list-item">
                                          <a href="#">
                                                <span>Home</span>
                                          </a>
                                    </li>
                                    <li class="banner-list-item active">
                                          <span>Your Shopping Cart</span>
                                    </li>
                              </ol>
                        </div>
                  </nav>
            </div>
      </div>
      <section class="shopping-cart">
            <div class="container">
                  <div class="cart-container">
                        <h1 class="cart-title">
                              Shopping cart
                        </h1>
                        <div class="cart-content">
                              <?php
                              $i = 0;
                              if (isset($_SESSION['viewcart']) && count($_SESSION['viewcart']) > 0) {
                                    echo '<form action="checkout.php" method="POST" novalidate class="cart-form">
                                                <div class="cart-table">
                                                      <div class="cart-header-label">
                                                            <div class="c-2">
                                                                  Image
                                                            </div>
                                                            <div class="c-8">
                                                                  Product
                                                            </div>
                                                            <div class="c-2 text-right">
                                                                  Total
                                                            </div>
                                                      </div>';
                                    $total = 0;
                                    foreach ($_SESSION['viewcart'] as  $value) {
                                          $total_price = $value[2] * $value[4];
                                          $total += $total_price;
                                          
                                          echo '
                                                      <div class="cart-item-wrap">
                                                            <div class="row-flex no-gutter">
                                                            
                                                                  <div class="c-2">
                                                                        <a href="#" class="cart-image">
                                                                              <img src="' . $value[3] . '" alt="">
                                                                        </a>
                                                                  </div>
                                                                  <div class="c-8">
                                                                        <a href="#" class="cart-name">
                                                                              ' . $value[1] . '
                                                                        </a>
                                                                        <p>velatheme</p>
                                                                        <div class="cart-price">
                                                                              <span class="cart-price-product text-right">
                                                                                    <span class="money">$' . $value[2] . '</span>
                                                                              </span>
                                                                        </div>
                                                                        <div class="cart-group row-flex align-items" data-label="Quantity">
                                                                              <div class="cart-quantity">
                                                                                    <button class="cart-qty-minus">
                                                                                          <span>-</span>
                                                                                    </button>
                                                                                    <input type="text" value="1" min="1" pattern="[0-9]*">
                                                                                    <button class="cart-qty-plus">
                                                                                          <span>+</span>
                                                                                    </button>
                                                                              </div>
                                                                              <input type="submit" name="update" class="btn btn-update-cart" value="Update Cart">
                                                                              <a class="cart-remove" href="./index.php?act=delonecart&id=' . $i . '">Remove</a>
                                                                        </div>
                                                                  </div>
                                                                  <div class="c-2 text-right">
                                                                        <span class="cart-total">
                                                                              <span class="money">$' . $total_price . '</span>
                                                                        </span>
                                                                  </div>
                                                            </div>
                                                      </div>';
                                                $i++;
                                    }
                                    echo '</div>
                                                <div class="function-cart row-flex">
                                                      <div class="c-7 col">
                                                            <div class="cart-btn-note">
                                                                  <a href="#" class="btn-cart-note" data-toggle="collapse">
                                                                        <i class="fa fa-times"></i>
                                                                        add order note
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="c-5 col text-right">
                                                            <div class="cart-box-subtotal">
                                                                  <span class="cart-subtotal-title">
                                                                        Subtotal:
                                                                  </span>
                                                                  <span class="cart-subtotal">
                                                                        <div class="money">$'.$total.'</div>
                                                                  </span>
                                                            </div>
                                                            <div class="cart-shipping">
                                                                  Shipping, taxes, and discounts will be calculated at checkout.
                                                            </div>
                                                            <div class="function-cart-button">
                                                                  <input type="submit" name="update" class="btn btn-update-cart" value="Update Cart">
                                                                  
                                                                  <a href="index.php?act=checkout"><input type="submit" name="checkout" class="btn btn-checkout-cart" value="Check Out"></a>
                                                                  
                                                                  
                                                            </div>
                                                      </div>
                                                </div>

                                                <input type="hidden" name="total" value="'.$total.'">
                                            </form>';
                              } else{
                                    echo'<p>Your cart is currently empty.</p>';
                              }
                              ?>
                        </div>
                  </div>
            </div>
      </section>
</main>
