<?php require_once('views/components/Header.php') ?>
<?php
$error = '';
if (isset($_POST['submitAddress'])) {
    try {
        $shipping = (new ShippingAddress())
            ->setFullname($_POST['fullname'])
            ->setAddress($_POST['address'])
            ->setCity($_POST['city'])
            ->setPhone($_POST['phone']);
        AccountController::saveShippingAddress($shipping);
    } catch (ErrorException $e) {
        $error = $e->getMessage();
    }
}
?>
<main>
    <!-- section -->
    <section>
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                        <!-- heading -->
                        <h3 class="fs-5 mb-0">Account Setting</h3>
                        <!-- button -->
                        <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 "
                                type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                            <i class="bi bi-text-indent-left fs-3"></i>
                        </button>
                    </div>
                </div>

                <?php require_once("views/components/AccountSideBar.php") ?>

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="py-6 p-md-6 p-lg-10">
                        <?php
                        if (count($shippingAddress) === 0) {
                            echo '
                            <div class="d-flex justify-content-between mb-6">
                                <!-- heading -->
                                <h2 class="mb-0">Address</h2>
                                <!-- button -->
                                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                   data-bs-target="#addAddressModal">Add a
                                    new address </a>
                            </div>
                            ';
                        }
                        ?>
                        <div class="row">
                            <!-- col -->
                            <div class="col-lg-5 col-xxl-4 col-12 mb-4">
                                <!-- form -->
                                <?php
                                foreach ($shippingAddress as $ship) {
                                    echo '
                                    <div class="card">
                                        <div class="card-body p-6">
                                            <div class="form-check mb-4">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                       id="homeRadio" checked>
                                                <label class="form-check-label text-dark fw-semi-bold" for="homeRadio">
                                                    Home
                                                </label>
                                            </div>
                                            <!-- address -->
                                            <p class="mb-6">' . $ship->getFullname() . '<br>
    
                                                ' . $ship->getAddress() . ',
    
                                                ' . $ship->getCity() . '<br>
    
                                                ' . $ship->getPhone() . '</p>
                                            <!-- btn -->
                                            <div class="mt-4">
                                                <a href="#" class="text-inherit">Edit </a>
                                                <a href="#" data-id="' . $ship->getId() . '" class="text-danger ms-3" data-bs-toggle="modal"
                                                   data-bs-target="#deleteModal">Delete
                                                </a>
                                            </div>
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
    </section>
</main>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- modal content -->
        <div class="modal-content">
            <!-- modal header -->
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- modal body -->
            <div class="modal-body">
                <h6>Are you sure you want to delete this address?</h6>
            </div>
            <!-- modal footer -->
            <div class="modal-footer">
                <!-- btn -->
                <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="deleteAddress" class="btn btn-danger deleteAddress">Delete</button>
            </div>
        </div>
    </div>
</div>

<?php
if (count($shippingAddress) === 0) {
    echo '
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <!-- modal content -->
            <div class="modal-content">
                <!-- modal body -->
                <div class="modal-body p-6">
                    <div class="d-flex justify-content-between mb-5">
                        <div>
                            <!-- heading -->
                            <h5 class="mb-1" id="addAddressModalLabel">New Shipping Address</h5>
                            <p class="small mb-0">Add new shipping address for your order delivery.</p>
                        </div>
                        <div>
                            <!-- button -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <!-- row -->
                    <form method="post" class="row g-3">
                        <!-- col -->
                        <div class="col-12">
                            <!-- input -->
                            <input type="text" class="form-control" name="fullname" placeholder="Họ và tên" aria-label="Full name"
                                   required="">
                        </div>
                        <!-- col -->
                        <div class="col-12">
                            <!-- input -->
                            <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                        </div>
                        <!-- col -->
                        <div class="col-12">
                            <!-- form select -->
                            <select name="city" class="form-select">
                                <option selected="" value="Hồ Chí Minh">Hồ Chí Minh</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Long An">Long An</option>
                                <option value="Lâm Đồng">Lâm Đồng</option>
                            </select>
                        </div>
                        <!-- col -->
                        <div class="col-12">
                            <!-- input -->
                            <input type="text" name="address" class="form-control" placeholder="Địa chỉ cụ thể">
                        </div>
                        <!-- col -->
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" name="submitAddress" type="submit">Save Address</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ';
}
?>
<!-- modal -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
    <!-- offcanvac header -->
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- offcanvac body -->
    <div class="offcanvas-body">
        <!-- nav -->
        <ul class="nav flex-column nav-pills nav-pills-dark">
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="account-orders.html"><i
                            class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link " href="account-settings.html"><i class="feather-icon icon-settings me-2"></i>Settings</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link active" href="account-address.html"><i
                            class="feather-icon icon-map-pin me-2"></i>Address</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="account-payment-method.html"><i
                            class="feather-icon icon-credit-card me-2"></i>Payment Method</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link" href="account-notification.html"><i
                            class="feather-icon icon-bell me-2"></i>Notification</a>
            </li>
        </ul>
        <hr class="my-6">
        <div>
            <!-- nav -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="../index.html"><i class="feather-icon icon-log-out me-2"></i>Log out</a>
                </li>

            </ul>
        </div>
    </div>
</div>