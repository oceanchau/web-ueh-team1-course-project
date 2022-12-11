<header>
    <div class="bg-light py-1">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <span> Ưu đãi siêu giá trị - Tiết kiệm nhiều hơn</span>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-light py-lg-4 pt-3 px-0 pb-0">
        <div class="container">
            <div class="row w-100 align-items-center g-lg-2 g-0">
                <div class="col-xxl-2 col-lg-3">
                    <a class="navbar-brand d-none d-lg-block" href=""/?">
                        <img width="160" src="assets/images/logo/logo.png" alt="eCommerce">

                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href=""/?">
                            <img width="160" src="assets/images/logo/logo.png" alt="eCommerce">

                        </a>

                        <div class="d-flex align-items-center lh-1">
                            <div class="list-inline me-2">
                                <?php
                                if (isset($currentUser)) {
                                    echo '
                            <div class="list-inline-item nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                ' . substr($currentUser, 0, strpos($currentUser, "@")) . '
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/?controller=account&action=orders">Tài khoản của tôi</a></li>
                                <li><a class="dropdown-item" href="/?controller=account&action=orders">Orders</a></li>
                                <li><a class="dropdown-item" href="/?controller=account&action=logout">Đăng xuất</a></li>
                              </ul>
                            </div>
                            ';
                                } else {
                                    echo '
                            <div class="list-inline-item">
                                <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                            </div>
                            ';
                                }
                                ?>
                                <div class="list-inline-item">

                                    <a class="text-muted position-relative " data-bs-toggle="offcanvas"
                                       data-bs-target="#offcanvasRight"
                                       href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <span class="cart-count position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                      0
                      <span class="visually-hidden">unread messages</span>
                    </span>
                                    </a>
                                </div>

                            </div>
                            <!-- Button -->
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#navbar-default" aria-controls="navbar-default"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>

                        </div>
                    </div>

                </div>
                <div class="col-xxl-6 col-lg-5 d-none d-lg-block">

                    <form method="get">
                        <div class="input-group ">
                            <input class="form-control rounded-3" type="search" placeholder="Tìm kiếm"
                                   name="search" id="search">
                            <span class="input-group-append">
                <button class="btn bg-white border border-start-0 ms-n10" id="submitSearch" type="submit">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                       stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                       class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>
                </button>
              </span>
                        </div>
                    </form>
                </div>
                <div class="col-md-1 col-xxl-1 d-none d-lg-block">
                    <!--                    TODO: add some components-->
                </div>
                <div class="col-md-3 col-xxl-3 text-end d-none d-lg-block navbar-default">
                    <div class="list-inline">
                        <div class="list-inline-item current-user">
                            <?php
                            if (isset($currentUser)) {
                                echo '
                            <div class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                ' . substr($currentUser, 0, strpos($currentUser, "@")) . '
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/?controller=account&action=orders">Tài khoản của tôi</a></li>
                                <li><a class="dropdown-item" href="/?controller=account&action=orders">Orders</a></li>
                                <li><a class="dropdown-item" href="/?controller=account&action=logout">Đăng xuất</a></li>
                              </ul>
                            </div>
                            ';
                            } else {
                                echo '
                                <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                         fill="none"
                                         stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round"
                                         class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                            ';
                            }
                            ?>
                        </div>
                        <div class="list-inline-item">

                            <a class="text-muted position-relative " data-bs-toggle="offcanvas"
                               data-bs-target="#offcanvasRight"
                               href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-shopping-bag">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span class="cart-count position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                  0
                  <span class="visually-hidden">unread messages</span>
                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-bottom pb-lg-4 pb-3">
        <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
            <div class="container px-0 px-md-3">

                <div class="dropdown me-3 d-none d-lg-block">
                    <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
          <span class="me-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7"></rect>
              <rect x="14" y="3" width="7" height="7"></rect>
              <rect x="14" y="14" width="7" height="7"></rect>
              <rect x="3" y="14" width="7" height="7"></rect>
            </svg></span> Danh mục
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php
                        foreach ($categories as $category) {
                            echo '<li>
                                <a class="dropdown-item" href="/?controller=shop&id=' . $category->id . '">' . $category->name . '</a>
                            </li>';
                        }
                        ?>
                    </ul>
                </div>


                <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">

                    <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                        <a href=""/?"><img width="160" src="assets/images/logo/logo.png"
                                                    alt="eCommerce"></a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="d-block d-lg-none mb-2 pt-2">
                        <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                           data-bs-toggle="collapse"
                           href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-grid">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg></span> Danh mục
                        </a>
                        <div class="collapse mt-2" id="collapseExample">
                            <div class="card card-body">
                                <ul class="mb-0 list-unstyled">
                                    <?php
                                    foreach ($categories as $category) {
                                        echo '<li>
                                            <a class="dropdown-item" href="/?controller=shop&id=' . $category->id . '">' . $category->name . '</a>
                                        </li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-lg-block">
                        <?php include('views/components/NavBarMenu.php') ?>
                    </div>
                    <div class="d-block d-lg-none">
                        <?php include('views/components/NavBarMenu.php') ?>
                    </div>
                </div>
            </div>

        </nav>
    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Login</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Username</label>
                        <input type="email" class="form-control" id="inputEmail4" name="inputEmail4"
                               placeholder="Username" required>
                    </div>

                    <div class="mb-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="inputPassword4"
                               placeholder="Password"
                               required>
                        <small class="form-text text-danger" id="login-error"></small>
                    </div>

                    <button type="submit" name="submitLogin" id="submitLogin" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
            <div class="modal-footer border-0 justify-content-center">

                Chưa có tài khoản? <a href="/?controller=pages&action=signUp">Đăng ký</a>
            </div>
        </div>
    </div>
</div>

<!-- Giỏ hàng -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom">
        <div class="text-start">
            <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Giỏ hàng</h5>
            <small>Tổng tiền : <span class="total-checkout"></span></small>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <div class="">
            <!-- alert -->
            <div class="alert alert-danger p-2" role="alert">
                Bạn được giao hàng miễn phí. <a href="/?controller=shop&action=checkout" class="alert-link">thanh toán bây giờ!</a>
            </div>
            <ul class="list-group list-group-flush show-cart">
                <!-- list group -->
                <li class="list-group-item py-3 ps-0 border-top">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <!-- img --> <img src="./assets/images/products/product-img-1.jpg" alt="Ecommerce"
                                              class="img-fluid"></div>
                        <div class="col-4 col-md-6 col-lg-5">
                            <!-- title -->
                            <a href="/?controller=shop&action=single" class="text-inherit">
                                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                            </a>
                            <span><small class="text-muted">.98 / lb</small></span>
                            <!-- text -->
                            <div class="mt-2 small lh-1"><a href="#!" class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted delete-item">Remove</span></a></div>
                        </div>
                        <!-- input group -->
                        <div class="col-3 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                       class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                            </div>

                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$5.00</span>

                        </div>
                    </div>

                </li>
                <!-- list group -->
                <li class="list-group-item py-3 ps-0">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <!-- img --> <img src="./assets/images/products/product-img-2.jpg" alt="Ecommerce"
                                              class="img-fluid"></div>
                        <div class="col-4 col-md-6 col-lg-5">
                            <!-- title -->
                            <a href="/?controller=shop&action=single" class="text-inherit">
                                <h6 class="mb-0">NutriChoice Digestive </h6>
                            </a>
                            <span><small class="text-muted">250g</small></span>
                            <!-- text -->
                            <div class="mt-2 small lh-1"><a href="#!" class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                        </div>
                        <!-- input group -->
                        <div class="col-3 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                       class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold text-danger">$20.00</span>
                            <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                    </div>

                </li>
                <!-- list group -->
                <li class="list-group-item py-3 ps-0">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <!-- img --> <img src="./assets/images/products/product-img-3.jpg" alt="Ecommerce"
                                              class="img-fluid"></div>
                        <div class="col-4 col-md-6 col-lg-5">
                            <!-- title -->
                            <a href="/?controller=shop&action=single" class="text-inherit">
                                <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                            </a>
                            <span><small class="text-muted">1 kg</small></span>
                            <!-- text -->
                            <div class="mt-2 small lh-1"><a href="#!" class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                        </div>
                        <!-- input group -->
                        <div class="col-3 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                       class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$15.00</span>
                            <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                    </div>

                </li>
                <!-- list group -->
                <li class="list-group-item py-3 ps-0">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <!-- img --> <img src="./assets/images/products/product-img-4.jpg" alt="Ecommerce"
                                              class="img-fluid"></div>
                        <div class="col-4 col-md-6 col-lg-5">
                            <!-- title -->
                            <a href="/?controller=shop&action=single" class="text-inherit">
                                <h6 class="mb-0">Onion Flavour Potato</h6>
                            </a>
                            <span><small class="text-muted">250g</small></span>
                            <!-- text -->
                            <div class="mt-2 small lh-1"><a href="#!" class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                        </div>
                        <!-- input group -->
                        <div class="col-3 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                       class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$15.00</span>
                            <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                    </div>

                </li>
                <!-- list group -->
                <li class="list-group-item py-3 ps-0 border-bottom">
                    <!-- row -->
                    <div class="row align-items-center">
                        <div class="col-3 col-md-2">
                            <!-- img --> <img src="./assets/images/products/product-img-5.jpg" alt="Ecommerce"
                                              class="img-fluid"></div>
                        <div class="col-4 col-md-6 col-lg-5">
                            <!-- title -->
                            <a href="/?controller=shop&action=single" class="text-inherit">
                                <h6 class="mb-0">Salted Instant Popcorn </h6>
                            </a>
                            <span><small class="text-muted">100g</small></span>
                            <!-- text -->
                            <div class="mt-2 small lh-1"><a href="#!" class="text-decoration-none text-inherit"> <span
                                            class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
                        </div>
                        <!-- input group -->
                        <div class="col-3 col-md-3 col-lg-3">
                            <!-- input -->
                            <!-- input -->
                            <div class="input-group input-spinner  ">
                                <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                                <input type="number" step="1" max="10" value="1" name="quantity"
                                       class="quantity-field form-control-sm form-input   ">
                                <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                            </div>
                        </div>
                        <!-- price -->
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">$15.00</span>
                            <div class="text-decoration-line-through text-muted small">$25.00</div>
                        </div>
                    </div>

                </li>

            </ul>
            <!-- btn -->
            <div class="d-flex justify-content-between mt-4">
                <a class="btn btn-outline-primary" data-bs-dismiss="offcanvas" aria-label="Close">Tiếp tục mua sắm</a>
                <div class="go-checkout">
                    <button href="/?controller=shop&action=checkout" onclick="handleCheckout()"
                       class="btn btn-primary d-flex justify-content-between align-items-center"
                       type="submit">Thanh toán</button>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="basicToast" class="toast" role="alert" aria-live="assertive" data-bs-delay="300" aria-atomic="true">
        <div class="toast-header h4">
            <i class="feather-icon icon-check text-success align-content-center"></i>
        </div>
        <div class="toast-body">
            Sản phẩm đã được thêm vào giỏ hàng
        </div>
    </div>
</div>