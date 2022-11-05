<div class="row">

    <div class="col-12 col-md-4 py-2" style="background-color:#004c55;">
        <p class="bg-secondary text-white py-2">&ensp;Phân loại</p>
        <hr width="70%">
        <button type="button" class="btn btn-outline-info">Áo thun</button>
        <button type="button" class="btn btn-outline-info">Phụ kiện</button>
        <button type="button" class="btn btn-outline-info">Học tập</button>
        <button type="button" class="btn btn-outline-info">Sách</button>
        <br><br>
        <p class="bg-secondary text-white py-2">&ensp;Giá</p>
        <hr width="70%">
        <div class="m-4">
            <form>
                <label for="customRange">
                    <button type="button" class="btn btn-outline-warning">Lọc:</button>
                </label>
                &ensp;&ensp;
                <input type="range" class="form-range" id="customRange">
            </form>
        </div>
        <br><br>
        <p class="bg-secondary text-white py-2">&ensp;Sản phẩm khác</p>
        <hr width="70%">
        <div class="container-fluid" style="background-color:#33a7b8;">
            <!--truy van lay 3 san pham moi nhat-->
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id DESC LIMIT 3");
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    ?>
                    <div class="media border p-3">
                        <form method="post" action="product.php?action=add&code=<?php echo $product_array[$key][""]?>>
                            <img src="<?php echo $product_array[$key]["image"]; ?>" alt="<?php echo $product_array[$key]["name"]; ?>" class="mr-3 mt-3 rounded-circle" style="width:60px;">
                            <div class="media-body">
                                <h4><?php echo $product_array[$key]["name"]; ?></h4>
                                <p><?php echo $product_array[$key]["price"]; ?></p>
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
            ?>


        </div>
    </div>
    <div class="col-12 col-md-8 ">
        <a href="shopping_cart.php" title="Cart">View Cart</a><br>
        <div class="row">

            <!-- truy van vong lap hien thi danh sach san pham DESC LIMIT 4-->
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    ?>
                    <div class="col-sm-6 col-md-3 py-2">
                        <div class="product">
                            <form method="post" action="product.php?action=add&code=<?php echo $product_array[$key]["code"]?>">
                                <p style="text-align:center;margin-top:20px;"><img style="width: 100%" src="<?php echo $product_array[$key]["image"]; ?>" class="img-responsive" alt="<?php echo $product_array[$key]["name"]; ?>">
                                </p>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h3 style="border-top:2px solid white;border-bottom:2px solid white;padding:10px;"><?php echo $product_array[$key]["name"]; ?></h3>
                                        <p><?php echo "$" . $product_array[$key]["price"]; ?></p>
                                        <div class="glyphicon glyphicon-shopping-cart">
                                            <input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
                                            <input type="submit" value="Mua" class="btn btn-light" />
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>


        </div>
    </div>

</div>

<div class="row h-50" style="background-color: #004c66;">
    <div class="col-12 col-md-8 py-3" style="background-color:#004c55;">
        <div class="input-group mb-3 border border-0">
            <input type="text" class="form-control" placeholder="Tên Sản phẩm">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Tìm</button>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 py-3 d-flex flex-row-reverse" style="background-color:#004c55;">
        <nav class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><b class="page-link">1</b class="page-link"></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Last</a></li>
        </nav>
    </div>

</div>