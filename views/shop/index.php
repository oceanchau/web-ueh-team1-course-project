<?php require_once('views/components/Header.php'); ?>

<main>
    <!-- section-->
    <?php require_once("views/components/Breadcrumb.php") ?>
    <!-- section -->
    <div class="mt-8 mb-lg-14 mb-8">
        <!-- container -->
        <div class="container">
            <div class="row gx-10">
                <!-- col -->
                <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                    <div class="offcanvas offcanvas-start offcanvas-collapse w-md-50 " tabindex="-1"
                         id="offcanvasCategory" aria-labelledby="offcanvasCategoryLabel">

                        <div class="offcanvas-header d-lg-none">
                            <h5 class="offcanvas-title" id="offcanvasCategoryLabel">Filter</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ps-lg-2 pt-lg-0">
                            <div class="mb-8">
                                <!-- title -->
                                <h5 class="mb-3">Danh mục</h5>
                                <!-- nav -->
                                <ul class="nav nav-category">
                                    <?php
                                    foreach ($categories as $category) {
                                        echo '
                                        <li class="nav-item border-bottom w-100">
                                            <a href="/?controller=shop&id=' . $category->id . '" class="nav-link">' . $category->name . '</a>
                                        </li>
                                        ';
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="mb-8">
                                <!-- price -->
                                <h5 class="mb-3">Giá</h5>
                                <div>
                                    <!-- range -->
                                    <div id="priceRange"
                                         class="mb-3 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                    </div>
                                    <form method="post" class="input-group">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <input type="number" id="priceStart-value"
                                                       class="form-control text-body" name="priceStart">
                                            </div>
                                            <div class="col">
                                                <input type="number" id="priceEnd-value" class="form-control text-body"
                                                       name="priceEnd">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100" id="priceSubmit" name="priceSubmit"
                                                type="submit">
                                            Áp dụng
                                        </button>
                                    </form>
                                </div>


                            </div>
                            <div class="mb-8 position-relative">
                                <!-- Banner Design -->
                                <!-- Banner Content -->
                                <div class="position-absolute p-5 py-8">
                                    <p class="badge text-bg-warning">Giảm đến 25% </p>
                                </div>
                                <!-- Banner Content -->
                                <!-- Banner Image -->
                                <!-- img --><img src="assets/images/banner/3.webp" alt="" class="img-fluid rounded-3">
                                <!-- Banner Image -->
                            </div>
                            <div class="mb-8 position-relative">
                                <!-- Banner Design -->
                                <!-- Banner Content -->
                                <div class="position-absolute p-5 py-8">
                                    <p class="badge text-bg-warning">Giảm sâu 45% </p>
                                </div>
                                <!-- Banner Content -->
                                <!-- Banner Image -->
                                <!-- img --><img src="assets/images/banner/suachua.webp" alt=""
                                                 class="img-fluid rounded-3">
                                <!-- Banner Image -->
                            </div>
                        </div>
                    </div>
                </aside>
                <section class="col-lg-9 col-md-12">
                    <!-- card -->
                    <div class="card mb-4 bg-light border-0">
                        <!-- card body -->
                        <div class="card-body p-9">
                            <h2 class="mb-0 fs-1"><?= $categoryName ?></h2>
                        </div>
                    </div>
                    <!-- text -->
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-lg-0">
                            <p class="mb-0"><span class="text-dark">Có <?= $products->getTotalResults() ?> </span> Sản
                                phẩm </p>
                        </div>

                    </div>
                    <!-- row -->
                    <div class="row g-4 row-cols-xl-4 row-cols-lg-3 row-cols-2 row-cols-md-2 mt-2">
                        <!-- col -->
                        <?php
                        foreach ($products->getData() as $product) {
                            //$product = new Product();
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
                    <!-- row -->
                    <?php if ($products->getTotalResults() > 0) { ?>
                        <div class="row mt-8">
                            <div class="col">
                                <!-- nav -->
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item <?php echo($products->getPage() == 1 ? 'disabled' : '') ?>">
                                            <a class="page-link mx-1 rounded-3 "
                                               href="/?<?= ShopController::getQueryPaging($_GET) ?>&page=<?= ShopController::getPrev($products->getPage()) ?>"
                                               aria-label="Previous">
                                                <i class="feather-icon icon-chevron-left"></i>
                                            </a>
                                        </li>
                                        <?php
                                        for ($page = 1; $page <= $products->getTotalPages(); $page++) {
                                            echo '
                                            <li class="page-item ">
                                                <a class="page-link mx-1 rounded-3 ' . (($page == $products->getPage()) ? 'active' : 'text-body') . '" href="/?' . ShopController::getQueryPaging($_GET) . '&page=' . $page . '">' . $page . '</a>
                                            </li>
                                            ';
                                        }
                                        ?>
                                        <li class="page-item <?php echo($products->getPage() == $products->getTotalPages() ? 'disabled' : '') ?>">
                                            <a class="page-link mx-1 rounded-3 text-body"
                                               href="/?<?= ShopController::getQueryPaging($_GET) ?>&page=<?= ShopController::getNext($products->getPage()) ?>"
                                               aria-label="Next">
                                                <i class="feather-icon icon-chevron-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </div>
</main>