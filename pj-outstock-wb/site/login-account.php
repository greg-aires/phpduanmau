
<?php include_once './header.php' ?>
<main class="main-content" role="main">
      <section class="banner-pages">
            <div class="banner-content">
                  <div class="banner-images">
                        <img src="./public/images/banner-pages.webp" alt="banner-pages">
                  </div>
                  <nav class="banner-navbar container">
                        <div class="banner-navbar__wrap">
                              <h1>Account</h1>
                              <ol class="banner-list">
                                    <li class="banner-list-item">
                                          <a href="#">
                                                <span>Home</span>
                                          </a>
                                    </li>
                                    <li class="banner-list-item active">
                                          <span>Account</span>
                                    </li>
                              </ol>
                        </div>
                  </nav>
            </div>
      </section>
      <section class="login-register">
            <div class="container">
                  <div class="account">
                        <div class="account-form">
                              <ul class="account-form-nav">
                                    <li class="tab-login-create active" onclick="tabAccount(event, 'Login')">
                                          <a aria-expanded="true">Login</a>
                                    </li>
                                    <li class="tab-login-create" onclick="tabAccount(event, 'CreateAccount')">
                                          <a aria-expanded="true">Create Account</a>
                                    </li>
                              </ul>
                              <div class="account-content">


                                    <!-- FORM LOGIN  -->
                                    <div id="Login" class="tab-change active">
                                          <div class="account-login-form">
                                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="UTF-8">
                                                      <div class="account-form-content">
                                                            <div class="form-group">
                                                                  <input class="form-control" name="email_login" type="text" placeholder="Email">
                                                            </div>
                                                            <div class="form-group form-group--password">
                                                                  <input id="pswrd" type="password" name="pass_login" class="form-control" placeholder="Password" required>
                                                                  <a id="toggle-btn">Show</a>
                                                            </div>
                                                            <div class="form-button">
                                                                  <input type="submit" name="login" class="btn btn-form-login" value="SIGN IN">
                                                            </div>
                                                            <div class="forgot-password">
                                                                  <a href="#">Forgot your password?</a>
                                                            </div>
                                                      </div>
                                                </form>
                                          </div>
                                          <?php
                                          if (isset($_POST['login']) && ($_POST['login'])) {
                                                $email_login = $_POST['email_login'];
                                                $pass_login = $_POST['pass_login'];
                                                $kq = check_user($email_login, $pass_login);
                                                // xác định admin 
                                                $checkq = check_typeuser($email_login, $pass_login);
                                                $typeUser = 0;
                                                foreach ($checkq as $value) {
                                                      $typeUser = $value['position'];
                                                }
                                                if ($kq == 0) {
                                                      echo 'Đăng Nhập thất bại';
                                                } else {
                                                      // var_dump($kq);
                                                      $_SESSION['user_name'] = $email_login;
                                                      if ($typeUser == 1) {
                                                            header('location: ../admin/index.php');
                                                      } else {
                                                            header('location: ./index.php');
                                                      }
                                                }
                                          }
                                          ?>
                                    </div>


                                    <!-- FORM REGISTER  -->
                                    <div id="CreateAccount" class="tab-change ">
                                          <div class="account-register-form">
                                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="UTF-8">
                                                      <div class="account-form-content">
                                                            <div class="row-flex-margin row-flex">
                                                                  <div class="c-6 col">
                                                                        <div class="form-group">
                                                                              <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                                                        </div>
                                                                  </div>
                                                                  <div class="c-6 col">
                                                                        <div class="form-group">
                                                                              <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                            <div class="form-group">
                                                                  <input type="text" class="form-control" name="email_user" placeholder="Email" required>
                                                            </div>
                                                            <div class="form-group form-group--password">
                                                                  <input id="pswrd-login" type="password" class="form-control" name="pass_user" placeholder="Password" required>
                                                                  <a id="toggle-btn-login">Show</a>
                                                            </div>
                                                            <div class="form-button">
                                                                  <input type="submit" class="btn btn-form-login" name="register" value="CREATE AND ACCOUNT">
                                                            </div>
                                                            <div class="forgot-password">
                                                                  <a href="#">Forgot your password?</a>
                                                            </div>
                                                      </div>
                                                </form>
                                                <?php
                                                if (isset($_POST['register'])) {
                                                      $first_name = $_POST['first_name'];
                                                      $last_name = $_POST['last_name'];
                                                      $email_user = $_POST['email_user'];
                                                      $pass_user = $_POST['pass_user'];
                                                      add_user($first_name, $last_name, $email_user, $pass_user);
                                                }
                                                ?>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>
</main>
<?php include_once './footer.php' ?>