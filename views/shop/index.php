<?php
require_once('views/components/Header.php');

function getNext(): int
{
    return 2;
}

function getPrev(): int
{
    return 1;
}

?>

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
                                <h5 class="mb-3">Categories</h5>
                                <!-- nav -->
                                <ul class="nav nav-category">
                                    <?php
                                    foreach ($categories as $category) {
                                        echo '
                                        <li class="nav-item border-bottom w-100">
                                            <a href="?controller=shop&id=' . $category->id . '" class="nav-link">' . $category->name . '</a>
                                        </li>
                                        ';
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="mb-8">
                                <!-- price -->
                                <h5 class="mb-3">Price</h5>
                                <div>
                                    <!-- range -->
                                    <div id="priceRange"
                                         class="mb-3 noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                    </div>
                                    <form method="post" class="input-group">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <input type="number" id="priceStart-value"
                                                       class="form-control text-body"
                                                       name="priceStart">
                                            </div>
                                            <div class="col">
                                                <input type="number" id="priceEnd-value"
                                                       class="form-control text-body"
                                                       name="priceEnd">
                                            </div>
                                        </div>
                                        <button
                                                class="btn btn-primary w-100"
                                                id="priceSubmit"
                                                name="priceSubmit"
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
                                    <h3 class="mb-0">Fresh Fruits </h3>
                                    <p>Get Upto 25% Off</p>
                                    <a href="#" class="btn btn-dark">Shop Now<i
                                                class="feather-icon icon-arrow-right ms-1"></i></a>
                                </div>
                                <!-- Banner Content -->
                                <!-- Banner Image -->
                                <!-- img --><img src="assets/images/banner/assortment-citrus-fruits.png" alt=""
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
                            <p class="mb-0"><span class="text-dark"><?= $products->getTotalResults() ?> </span> Products
                                found </p>
                        </div>

                        <!-- icon -->
                        <div class="d-md-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="">

                                    <a href="shop-list.html" class="active me-3"><i class="bi bi-list-ul"></i></a>
                                    <a href="shop-grid.html" class=" me-3 text-muted"><i class="bi bi-grid"></i></a>
                                    <a href="shop-grid-3-column.html" class="me-3 text-muted"><i
                                                class="bi bi-grid-3x3-gap"></i></a>
                                </div>
                                <div class="ms-2 d-lg-none">
                                    <a class="btn btn-outline-gray-400 text-muted" data-bs-toggle="offcanvas"
                                       href="#offcanvasCategory" role="button" aria-controls="offcanvasCategory">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                             viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                             stroke-linecap="round" stroke-linejoin="round"
                                             class="feather feather-filter me-2">
                                            <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                                        </svg>
                                        Filters</a>
                                </div>
                            </div>

                            <div class="d-flex mt-2 mt-lg-0">
                                <div class="me-2 flex-grow-1">
                                    <!-- select option -->
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Show: 50</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select></div>
                                <div>
                                    <!-- select option -->
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">Sort by: Featured</option>
                                        <option value="Low to High">Price: Low to High</option>
                                        <option value="High to Low"> Price: High to Low</option>
                                        <option value="Release Date"> Release Date</option>
                                        <option value="Avg. Rating"> Avg. Rating</option>

                                    </select></div>

                            </div>

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
                                        <div class="text-center position-relative"> <a href="?controller=shop&action=single&code=' . $product->getCode() . '"><img src="assets/images/products/' . $product->getImg()[0] . '" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                            <!-- action btn -->
                                            <div class="card-product-action">
                                                <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Quick View"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Wishlist"><i class="bi bi-heart"></i></a>
                                                <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" aria-label="Compare"><i class="bi bi-arrow-left-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- heading -->
                                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Snack &amp;
                                                    Munchies</small></a></div>
                                        <h2 class="fs-6"><a href="?controller=shop&action=single&code=' . $product->getCode() . '" class="text-inherit text-decoration-none">' . $product->getName() . ' </a>
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
                                            <div><a href="#!" class="btn btn-primary btn-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg> Add</a></div>
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
                                               href="?controller=shop&page=<?= getPrev() ?>"
                                               aria-label="Previous">
                                                <i class="feather-icon icon-chevron-left"></i>
                                            </a>
                                        </li>
                                        <?php
                                        for ($page = 1; $page <= $products->getTotalPages(); $page++) {
                                            echo '
                                            <li class="page-item ">
                                                <a class="page-link mx-1 rounded-3 ' . (($page == $products->getPage()) ? 'active' : 'text-body') . '" href="?controller=shop&page=' . $page . '">' . $page . '</a>
                                            </li>
                                            ';
                                        }
                                        ?>
                                        <li class="page-item <?php echo($products->getPage() == $products->getTotalPages() ? 'disabled' : '') ?>">
                                            <a class="page-link mx-1 rounded-3 text-body"
                                               href="?controller=shop&page=<?= getNext() ?>"
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