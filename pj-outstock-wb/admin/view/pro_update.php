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
            Product
        </h2>
        <form class="form__table" action="#" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($kq as $value) {
                        echo '<tr class="table__row">
                        <td>' . $value['name_pro'] . '</td>
                        <td></td>
                        <td></td>

                        <td>';
                        if ($value['status'] == 1) {
                            echo 'Enable';
                        } else {
                            echo 'Disable';
                        }
                        echo '</td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </form>
        <form id="form_update" action="./index.php?act=edit_pro" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="" value="<?= $kq[0]['id'] ?>">
            <input type="text" name="name_pro" id="" value="<?= $kq[0]['name_pro'] ?>">
            <input type="number" min="0" name="price_pro" id="" value="<?= $kq[0]['price'] ?>">
            <input type="file" name="img_pro" id="" accept="image/*">
            <input type="text" name="name_img_pro" value="<?= $kq[0]['img'] ?>">
            <select name="active" id="">
                <option value="1">Hoạt động</option>
                <option value="0">Dừng hoạt động</option>
            </select>
            <button form="form_update" type="submit" name="update_pro">Đồng ý</button>
        </form>
    </div>
</div>