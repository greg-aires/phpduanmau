<main class="main-content" role="main">
      <div class="vela-path">
            <div class="container">
                  <ol class="vela-path-list">
                        <li>
                              <a href="#">
                                    <span>Home</span>
                              </a>
                        </li>
                        <?php
                              foreach ($kq as  $value) {
                                    echo '
                              <li>
                                    <a href="#">
                                          <span>
                                          ' . $value['name_cate'] . '
                                          </span>
                                    </a>
                              </li>
                              <li>
                                    <span>
                                          ' . $value['name_pro'] . ';
                                    </span>
                              </li>';
                              }
                        ?>
                  </ol>
            </div>
      </div>
      <div class="vela-detail">
            <div class="container">
                  <div class="row-flex row-flex-margin">
                        <div class="c-6 col">
                              <div class="detail-image">
                                    <div class="detail-image-feature">
                                          <?php
                                          foreach ($kq as  $value) {
                                                echo '<img class="detail-current-image" src="' . $value['img'] . '" alt="detail-image-product">';
                                          }
                                          ?>

                                    </div>
                                    <?php
                                    foreach ($kq as  $value) {
                                          echo '
                                    <div class="detail-thumb-list">
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart1'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart2'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart3'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                          <div class="detail-thumb-item">
                                                <img src="' . $value['img_cart4'] . '" alt="detail-thumb-image" class="thumb-image">
                                          </div>
                                    </div>';
                                    }
                                    ?>
                              </div>
                        </div>
                        <div class="c-6 col">
                              <div class="detail-product-info">
                                    <?php
                                    foreach ($kq as  $value) {
                                          $value['name_pro'];
                                    }
                                    ?>
                                    <div class="detail-product-review">
                                          <span class="detail-review">
                                                <span class="detail-rating">
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                      <i class="fa-solid fa-star"></i>
                                                </span>
                                                <span class="detail-review-count">
                                                      4 reviews
                                                </span>
                                          </span>
                                    </div>
                                    <div class="detail-product-price">
                                          <div class="row-flex align-items">
                                                <?php
                                                foreach ($kq as  $value) {
                                                      echo '
                                                <span class="detail-price-old">
                                                      <span class="money">$' . $value['price'] . '</span>
                                                </span>
                                                <span class="detail-price-sale">
                                                      <span class="money">$' . $value['price_sale'] . '</span>
                                                </span>';
                                                }
                                                ?>


                                          </div>
                                    </div>
                                    <div class="detail-product-desc">
                                          <p>Sapien luctus id justo suscipit nonummy eget hymenaeos phasellus felis enim, dolor tortor cras nonummy sit amet nam wisi suspendisse mattis mi vel leo.</p>
                                    </div>
                                    <div class="detail-product-wrapper">
                                          <form class="detail-product-addcart" action="#" method="POST">
                                                <div class="addcard">
                                                      <div class="addcard-group">
                                                            <div class="addcard-quantity">
                                                                  <div class="addcard-qty">
                                                                        <button type="button" class="addcard-qty-minus">
                                                                              <span>-</span>
                                                                        </button>
                                                                        <input type="text" value="1" min="1" pattern="[0-9]*">
                                                                        <button type="button" class="addcard-qty-plus">
                                                                              <span>+</span>
                                                                        </button>
                                                                  </div>
                                                            </div>
                                                            <button type="button" class="btn btn-addcard">
                                                                  <i class="icons">
                                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                                                              <g>
                                                                                    <g>
                                                                                          <path d="M416,277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416V277.333z"></path>
                                                                                    </g>
                                                                              </g>
                                                                        </svg>
                                                                  </i>
                                                                  <span id="addcard-text">Add to Cart</span>
                                                            </button>
                                                      </div>
                                                </div>
                                          </form>
                                          <div class="detail-product-atribute">
                                                <p class="atribute">
                                                      <label>Availability:</label>
                                                      In Stock
                                                </p>
                                                <p class="atribute">
                                                      <label>Vendor:</label>
                                                      velatheme
                                                </p>
                                                <p class="atribute">
                                                      <label>SKU:</label>
                                                      N/A
                                                </p>
                                                <div class="atribute atribute-categories">
                                                      <label>Collections:</label>
                                                      <a href="#" title="Best Sellter">Best Sellter</a>,
                                                      <a href="#" title="Decor Art">Decor Art</a>,
                                                      <a href="#" title="Furniture">Furniture</a>,
                                                      <a href="#" title="Home page">Home page</a>,
                                                      <a href="#" title="Kitchen Things">Kitchen Things</a>,
                                                      <a href="#" title="New Products">New Products</a>,
                                                </div>
                                          </div>
                                          <div class="detail-product-share">
                                                <div class="share-title">
                                                      Share:
                                                </div>
                                                <ul class="share-socials-list">
                                                      <li>
                                                            <a href="#">
                                                                  <i class="fa-brands fa-twitter"></i>
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  <i class="fa-brands fa-facebook-f"></i>
                                                            </a>
                                                      </li>
                                                      <li>
                                                            <a href="#">
                                                                  <i class="fa-brands fa-pinterest-p"></i>
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class="vela-detail-info">
            <div class="container">
                  <div class="detail-heading">
                        <ul class="detail-navbar-list">
                              <li class="tab-item active" onclick="tabs(event, 'Description')">
                                    <a aria-expanded="true">Description</a>
                              </li>
                              <li class="tab-item" onclick="tabs(event, 'ShippingandReturn')">
                                    <a aria-expanded="true">Shipping and Return</a>
                              </li>
                              <li class="tab-item" onclick="tabs(event, 'Reviews')">
                                    <a aria-expanded="true">Reviews</a>
                              </li>
                        </ul>
                  </div>
                  <div class="tabs-content">
                        <div id="Description" class="tab-pane active">
                              <div class="rte">
                                    <?php
                                    foreach ($kq as  $value) {
                                          echo '<p>' . $value['description'] . '</p>';
                                    }
                                    ?>
                                    <p>Don't ever play yourself. The weather is amazing, walk with me through the pathway of more success. Take this journey with me, Lion! The other day the grass was brown, now it’s green because I ain’t give up. Never surrender</p>
                                    <ul>
                                          <li>Claritas est etiam processus dynamicus.</li>
                                          <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                          <li>Claritas est etiam processus dynamicus.</li>
                                          <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                          <li>Claritas est etiam processus dynamicus.</li>
                                          <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                    </ul>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                              </div>
                        </div>
                        <div id="ShippingandReturn" class="tab-pane ">
                              <div class="rte">
                                    <h4>Returns Policy</h4>
                                    <p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).</p>
                                    <p>
                                          You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper
                                          (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).
                                    </p>
                                    <p>
                                          If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the
                                          returned
                                          item.
                                    </p>
                                    <h4>Shipping</h4>
                                    <p>We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.</p>
                                    <p>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes
                                          page.</p>
                                    <p>Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.</p>
                              </div>
                        </div>
                        <div id="Reviews" class="tab-pane">
                              <div class="tab-product-review">
                                    <div class="spr-container">
                                          <div class="spr-header">
                                                <h2 class="spr-header-title">
                                                      Customer Reviews
                                                </h2>
                                                <span class="spr-rating">
                                                      <i class="fa-regular fa-star"></i>
                                                      <i class="fa-regular fa-star"></i>
                                                      <i class="fa-regular fa-star"></i>
                                                      <i class="fa-regular fa-star"></i>
                                                      <i class="fa-regular fa-star"></i>
                                                </span>
                                                <span class="spr-review-count">
                                                      Based on 4 reviews
                                                </span>
                                                <span class="spr-action">
                                                      <a href="#">Write a review</a>
                                                </span>
                                          </div>
                                          <div class="spr-content">
                                                <div class="spr-form">
                                                      <div class="spr-reviews">
                                                            <div class="spr-review">
                                                                  <div class="spr-review-header">
                                                                        <span class="spr-review-header-star">
                                                                              <i class="fa-regular fa-star"></i>
                                                                              <i class="fa-regular fa-star"></i>
                                                                              <i class="fa-regular fa-star"></i>
                                                                              <i class="fa-regular fa-star"></i>
                                                                              <i class="fa-regular fa-star"></i>
                                                                        </span>
                                                                        <h3 class="spr-review-header-title">nice</h3>
                                                                        <span class="spr-review-header-byline">
                                                                              <strong>Munir Hossain</strong>
                                                                              on
                                                                              <strong>Oct 07, 2020</strong>
                                                                        </span>
                                                                  </div>
                                                                  <div class="spr-review-content">
                                                                        <p class="spr-review-content-body">
                                                                              Hiệp là đồ con chó =)))
                                                                        </p>
                                                                  </div>
                                                                  <div class="spr-review-footer">
                                                                        <a href="#" class="spr-review-reportreview">Report as Inappropriate</a>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</main>