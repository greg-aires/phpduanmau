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
        <form action="./index.php?act=add_pro" id="form_add" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="Text" name="name_pro" id="">
                        </td>
                        <td>
                            <input type="number" min=0 name="price_pro" id="">
                        </td>
                        <td>
                            <input type="file" name="img_pro">
                        </td>
                        <td>
                            <select name="valu_cate">
                                <?php
                                $kq = getall_cate();
                                foreach ($kq as $value) {
                                    echo'<option value="'.$value['name_cate'].'">'.$value['name_cate'].'</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button form="form_add" type="submit" name="them_pro">Thêm</button>
        </form>
    </div>
</div>