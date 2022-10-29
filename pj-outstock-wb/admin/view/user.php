<?php 
    // include'zxc';
?>
<div class="c-9 col">
      <div class="header__search">
            <form action="#">
                  <div class="header__search-group">
                        <div class="fa-solid fa-bars" id="btn-menu"></div>
                        <div class="admin__user">
                              <div class="image__user"></div>
                              <div class="name__user">hominhthanh</div>
                        </div>
                        <div class="search__group-form">
                              <input type="text" placeholder="Search here ....">
                              <button>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                              </button>
                        </div>
                  </div>
            </form>
      </div>
      <div class="col-md-12 display__item">
            <h2 class="title">
                  Member
            </h2>
            
            <form class="form__table" action="#" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Position</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $kq = getall_user();
                    $index = 1;
                    foreach ($kq as $value) {
                        echo '<tr class="table__row">
                        <td>' . $index . '</td>
                        <td>' . $value['full_name'] . '</td>
                        <td>' . $value['email'] . '</td>
                        <td>' . $value['pass'] . '</td>
                        <td>';
                        if ($value['position'] == 1) {
                            echo 'Admin';
                        } else {
                            echo 'User';
                        }
                        echo '</td>
                        <td>
                        <a class="btn btn-delete" href="./index.php?act=del_user&id=' . $value['id'] . '">Delete</a>
                        </td>
                    </tr>';
                        $index++;
                    }
                    ?>
                </tbody>
            </table>
        </form>
      </div>
</div>