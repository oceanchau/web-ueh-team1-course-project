<?php require_once('views/components/Header.php') ?>

<main>
    <section class="mt-8">
        <div class="container">
            <div class="hero-slider ">
                <div class=" "
                     style="background: url(assets/images/slider/slider-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                    <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Giao hàng miễn phí</span>
                        <h2 class="text-light display-5 fw-bold mt-4">Giao hàng miễn phí <br> đơn hàng trên <span
                                    class="text-primary">đ200 nghìn</span></h2>
                        <p class="text-light lead"><span class="badge text-bg-primary">Giao hàng miễn phí cho khách hàng đăng ký lần đầu</span>
                        </p>
                        <a href="#!" class="btn btn-dark mt-3">Đăng ký ngay<i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                    </div>
                </div>
                <div class=" "
                     style="background: url(assets/images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                    <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Opening Sale Discount 50%</span>
                        <h2 class="text-light display-5 fw-bold mt-4">INNO SHOP Community<br> là cửa hàng startup <span
                                    class="text-primary">thuộc UEH</span></h2>
                        <p class="text-light lead"><span class="badge text-bg-primary">INNO SHOP là cộng đồng vườn ương đổi mới sáng tạo</span>
                        </p>
                        <a href="#!" class="btn btn-dark mt-3">Rau tươi<i
                                    class="feather-icon icon-arrow-right ms-1"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">

                    <h3 class="mb-0">Danh mục nổi bật</h3>

                </div>
            </div>
            <div class="category-slider ">
                <?php
                foreach ($categories as $item) {
                    echo '
                    <div class="item"><a href="/?controller=shop&id='.$item->id.'" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                            <div class="card-body text-center py-8">
                                <img src="assets/images/category/'.$item->img.'"
                                     alt="Grocery Ecommerce"
                                     class="mb-3 img-fluid">
                                <div class="text-truncate">'.$item->name.'</div>
                            </div>
                        </div>
                    </a></div>
                    ';
                }
                ?>
            </div>


        </div>
    </section>
    <!-- Category Section End-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-3 mb-lg-0">
                    <div>
                        <div class="py-10 px-8 rounded-3"
                             style="background:url(assets/images/banner/5.jpeg)no-repeat; background-size: cover; background-position: center;">
                            <div>
                                <h3 class="fw-bold mb-1">Sản phẩm mới
                                </h3>
                                <p class="mb-4">Giảm đến <span class="fw-bold">30%</span></p>
                                <a href="/?controller=shop" class="btn btn-dark">Mua ngay</a>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-md-6 ">

                    <div>
                        <div class="py-10 px-8 rounded-3"
                             style="background:url(assets/images/banner/suachua.webp)no-repeat; background-size: cover; background-position: center;">
                            <div>
                                <h3 class="fw-bold mb-1">Combo</h3>
                                <p class="mb-4">Giảm đến <span class="fw-bold">25%</span></p>
                                <a href="/?controller=shop" class="btn btn-dark">Mua ngay</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sản phẩm phổ biến Start-->
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">
                    <h3 class="mb-0">Sản phẩm phổ biến</h3>
                </div>
            </div>

            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                <?php
                foreach ($products as $product) {
                    echo '
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <!-- badge -->
                                        <div class="text-center position-relative"> <a href="/?controller=shop&action=single&code=' . $product->getCode() . '"><img src="assets/images/products/' . $product->getImg()[0] . '" alt="Grocery Ecommerce" class="mb-3 img-fluid"></a>
                                        </div>
                                        <!-- heading -->
                                        <h2 class="fs-6"><a href="/?controller=shop&action=single&code=' . $product->getCode() . '" class="text-inherit text-decoration-none">' . $product->getName() . ' </a>
                                        </h2>
                                        <div class="text-warning">
                                           
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">đ' . number_format($product->getPrice(), 0, '', '.') . '
                                                </span>
                                            </div>
                                            <!-- btn -->
                                            <div><button type="button"
                                                    data-product="' . str_replace('"', "'", json_encode($product)) . '"
                                                    class="btn btn-primary btn-sm add-to-cart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg> Add</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Sản phẩm phổ biến End-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-6">
                    <h3 class="mb-0">Sản phẩm giảm giá</h3>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class=" pt-8 px-6 px-xl-8 rounded-3"
                         style="background:url(assets/images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 323px;">
                        <div>
                            <h3 class="fw-bold text-white">100% Hạt cà phê hữu cơ
                            </h3>
                            <p class="text-white">Giá tốt hôm nay.</p>
                            <a href="/?controller=shop" class="btn btn-primary">Mua ngay <i
                                        class="feather-icon icon-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                foreach ($productSaleOff as $product) {
                    echo '
                            <div class="col">
                                <!-- card -->
                                <div class="card card-product">
                                    <div class="card-body">
                                        <!-- badge -->
                                        <div class="text-center position-relative"> <a href="/?controller=shop&action=single&code=' . $product->getCode() . '"><img src="assets/images/products/' . $product->getImg()[0] . '" alt="Grocery Ecommerce" class="mb-3 img-fluid"></a>
                                        </div>
                                        <!-- heading -->
                                        <h2 class="fs-6"><a href="/?controller=shop&action=single&code=' . $product->getCode() . '" class="text-inherit text-decoration-none">' . $product->getName() . ' </a>
                                        </h2>
                                        <div class="text-warning">
                                           
                                        </div>
                                        <!-- price -->
                                        <div class="d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <span class="text-dark">đ' . number_format($product->getPrice(), 0, '', '.') . '
                                                </span>
                                            </div>
                                            <!-- btn -->
                                            <div><button type="button"
                                                    data-product="' . str_replace('"', "'", json_encode($product)) . '"
                                                    class="btn btn-primary btn-sm add-to-cart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg> Add</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ';
                }
                ?>
            </div>
        </div>
    </section>
    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/clock.svg" alt=""></div>
                        <h3 class="h5 mb-3">
                            Giao hàng trong 2 giờ
                        </h3>
                        <p>Đơn hàng của bạn sẽ được giao trong 2 giờ.</p>
                    </div>
                </div>
                <div class="col-md-6  col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/gift.svg" alt=""></div>
                        <h3 class="h5 mb-3">Ưu đãi</h3>
                        <p>Rẻ hơn chỗ khác, hoàn tiền 3% nếu mua đơn trên đ200 nghìn
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/package.svg" alt=""></div>
                        <h3 class="h5 mb-3">Chọn lọc</h3>
                        <p>Sản phẩm được chọn từ chất liệu và thương hiệu đáng tin cậy</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="assets/images/icons/refresh-cw.svg" alt=""></div>
                        <h3 class="h5 mb-3">Đổi trả dễ dàng</h3>
                        <p>Không hài lòng với sản phẩm? Trả lại và nhận tiền hoàn lại trong vòng vài giờ.
                            Theo <a href="#!">chính sách</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

