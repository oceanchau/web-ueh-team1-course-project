<?php require_once('views/components/Header.php') ?>

<main>
    <?php require_once("views/components/Breadcrumb.php") ?>

    <section class="mt-8">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- img slide -->
                    <div class="product" id="product">
                        <?php
                        foreach ($product->getImg() as $img) {
                            echo '
                            <div>
                                <div class="zoom" onmousemove="zoom(event)"
                                     style="background-image: url(assets/images/products/' . $img . ')">
                                    <!-- img -->
                                    <img src="assets/images/products/' . $img . '" alt="' . $img . '">
                                </div>
                            </div>
                            ';
                        }
                        ?>
                    </div>
                    <!-- product tools -->
                    <div class="product-tools">
                        <div class="thumbnails row g-3" id="productThumbnails">
                            <?php
                            foreach ($product->getImg() as $img) {
                                echo '
                            <div class="col-3">
                                <div class="thumbnails-img">
                                    <!-- img -->
                                    <img src="assets/images/products/' . $img . '" alt="' . $img . '">
                                </div>
                            </div>
                            ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ps-lg-10 mt-6 mt-md-0">
                        <!-- heading -->
                        <h1 class="mb-1"><?= $product->getName() ?></h1>
                        <div class="mb-4">
                        </div>
                        <div class="fs-4">
                            <!-- price -->
                            <span class="fw-bold text-dark">đ<?= number_format($product->getPrice(), 0, '', '.') ?></span>
                        </div>
                        <!-- hr -->
                        <hr class="my-6">
                        <div>


                            <!-- input -->
                            <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                       class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                            </div>

                        </div>
                        <div class="mt-3 row justify-content-start g-2 align-items-center">

                            <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                                <!-- button -->
                                <!-- btn -->
                                <button type="button" class="btn btn-primary"><i
                                            class="feather-icon icon-shopping-bag me-2"></i>Add to
                                    cart
                                </button>
                            </div>
                        </div>
                        <!-- hr -->
                        <hr class="my-6">
                        <div>
                            <!-- table -->
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Product Code:</td>
                                    <td><?= $product->getCode() ?></td>

                                </tr>
                                <tr>
                                    <td>Availability:</td>
                                    <td><?= $product->getStatus() ?></td>

                                </tr>
                                <tr>
                                    <td>Shipping:</td>
                                    <td><small>01 day shipping.<span
                                                    class="text-muted">( Free pickup today)</span></small></td>

                                </tr>


                                </tbody>
                            </table>

                        </div>
                        <div class="mt-8">
                            <!-- dropdown -->
                            <div class="dropdown">
                                <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Share
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i
                                                    class="bi bi-facebook me-2"></i>Facebook</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-twitter me-2"></i>Twitter</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-lg-14 mt-8 ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                            <!-- btn -->
                            <button class="nav-link active" id="product-tab" data-bs-toggle="tab"
                                    data-bs-target="#product-tab-pane" type="button" role="tab"
                                    aria-controls="product-tab-pane"
                                    aria-selected="true">Product Details
                            </button>
                        </li>
                    </ul>
                    <!-- tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- tab pane -->
                        <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel"
                             aria-labelledby="product-tab"
                             tabindex="0">
                            <?= $product->getDetail() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- section -->
    <section class="my-lg-14 my-14">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- heading -->
                    <h3>Related Items</h3>
                </div>
            </div>
            <!-- row -->
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                <?php
                foreach ($relatedProduct as $item) {
                    echo '
                    <!-- col -->
                    <div class="col">
                        <div class="card card-product">
                            <div class="card-body">
                                <!-- badge -->
                                <div class="text-center position-relative">
                                    <a href="#!">
                                        <img
                                                    src="assets/images/products/' . $item->getImg()[0] . '"
                                                    alt="' . $item->getImg()[0] . '"
                                                    class="mb-3 img-fluid">
                                    </a>
                                </div>
                                <!-- heading -->
                                <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">' . $item->getName() . '</a></h2>
                               
                                <!-- price -->
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <div><span class="text-dark">đ' . number_format($product->getPrice(), 0, '', '.') . '</span>
                                    </div>
                                    <!-- btn -->
                                    <div><a href="#!" class="btn btn-primary btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round"
                                                 class="feather feather-plus">
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                            Add</a></div>
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

</main>

<!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-8">
                <div class="position-absolute top-0 end-0 me-3 mt-3">
                    <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                    ></button>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- img slide -->
                        <div class="product productModal" id="productModal">
                            <?php
                            foreach ($product->getImg() as $img) {
                                echo '
                                 <div
                                    class="zoom"
                                    onmousemove="zoom(event)"
                                    style="background-image: url(assets/images/products/' . $img . ');">
                                    <!-- img -->
                                    <img
                                            src="assets/images/products/' . $img . '"
                                            alt="' . $img . '"
                                    />
                                </div>
                                ';
                            }
                            ?>
                        </div>
                        <!-- product tools -->
                        <div class="product-tools">
                            <div class="thumbnails row g-3" id="productModalThumbnails">
                                <?php
                                foreach ($product->getImg() as $img) {
                                    echo '
                                    <div class="col-3">
                                        <div class="thumbnails-img">
                                            <!-- img -->
                                            <img
                                                    src="assets/images/products/' . $img . '"
                                                    alt="' . $img . '"
                                            />
                                        </div>
                                    </div>
                                    ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>