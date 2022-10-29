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
        <form action="./index.php?act=add_cate" method="POST">
            <input type="text" name="name_cate" id="">
            <input type="submit" value="search" name="themmoi">
        </form>
        <form class="form__table" action="#" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $kq = getall_cate();
                    $index = 1;
                    foreach ($kq as $value) {
                        echo '<tr class="table__row">
                        <td>' . $index . '</td>
                        <td>' . $value['name_cate'] . '</td>
                        <td>';
                        if ($value['status'] == 1) {
                            echo 'Enable';
                        } else {
                            echo 'Disable';
                        }
                        echo '</td>
                        <td>
                        <a class="btn btn-update" href="./index.php?act=edit_cate&id=' . $value['id'] . '">Update</a>
                        <a class="btn btn-delete" href="./index.php?act=del_cate&id=' . $value['id'] . '">Delete</a>
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