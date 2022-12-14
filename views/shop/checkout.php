<?php require_once('views/components/Header.php') ?>

<main>
    <!-- section-->
    <?php require_once("views/components/Breadcrumb.php") ?>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div>
                        <div class="mb-8">
                            <!-- text -->
                            <h1 class="fw-bold mb-0">Thanh toán</h1>
                            <p class="mb-0">Bạn chưa có tài khoản? <a href="#!">Đăng ký</a> để nhận ưu đãi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <!-- accordion -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <!-- accordion item -->
                            <div class="accordion-item py-4">

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- heading one -->
                                    <a href="#" class="fs-5 text-inherit collapsed h4" data-bs-toggle="collapse"
                                       data-bs-target="#flush-collapseOne" aria-expanded="true"
                                       aria-controls="flush-collapseOne">
                                        <i class="feather-icon icon-map-pin me-2 text-muted"></i>Địa chỉ giao hàng
                                    </a>
                                    <?php
                                    if (count($shippingAddress) === 0) {
                                        echo '
                                             <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#addAddressModal">Thêm địa chỉ</a>
                                            ';
                                    }
                                    ?>
                                    <!-- collapse -->
                                </div>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                     data-bs-parent="#accordionFlushExample">
                                    <div class="mt-5">
                                        <div class="row">
                                            <div class="col-lg-6 col-12 mb-4">
                                                <?php
                                                foreach ($shippingAddress as $ship) {
                                                    echo '
                                                    <div class="card-body p-6">
                                                        <div class="form-check mb-4">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                                   id="homeRadio" checked>
                                                            <label class="form-check-label text-dark fw-semi-bold" for="homeRadio">
                                                                Nhà
                                                            </label>
                                                        </div>
                                                        <!-- address -->
                                                        <p class="mb-6">' . $ship->getFullname() . '<br>
                
                                                            ' . $ship->getAddress() . ',
                
                                                            ' . $ship->getCity() . '<br>
                
                                                            ' . $ship->getPhone() . '</p>
                                                        <!-- btn 
                                                        <div class="mt-4">
                                                            <a href="#" class="text-inherit">Edit </a>
                                                            <a href="#" data-id="' . $ship->getId() . '" class="text-danger ms-3" data-bs-toggle="modal"
                                                               data-bs-target="#deleteModal">Delete
                                                            </a>
                                                        </div>-->
                                                    </div>
                                                ';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- accordion item -->
                            <div class="accordion-item py-4">

                                <a href="#" class="text-inherit h5" data-bs-toggle="collapse"
                                   data-bs-target="#flush-collapseThree" aria-expanded="false"
                                   aria-controls="flush-collapseThree">
                                    <i class="feather-icon icon-shopping-bag me-2 text-muted"></i>Ghi chú giao hàng
                                    <!-- collapse --> </a>
                                <div id="flush-collapseThree" class="accordion-collapse collapse show"
                                     data-bs-parent="#accordionFlushExample">

                                    <div class="mt-5">
                                        <label for="DeliveryInstructions" class="form-label sr-only">Ghi chú giao
                                            hàng</label>
                                        <textarea class="form-control" id="DeliveryInstructions" rows="3"
                                                  placeholder="Viết ghi chú giao hàng "></textarea>
                                        <p class="form-text">Thêm ghi chú về cách bạn muốn đơn đặt hàng của mình được
                                            mua và/hoặc giao</p>
                                        <div class="mt-5 d-flex justify-content-end">
                                            <a href="#" class="btn btn-primary ms-2" data-bs-toggle="collapse"
                                               data-bs-target="#flush-collapseFour" aria-expanded="false"
                                               aria-controls="flush-collapseFour">Tiếp tục</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- accordion item -->
                            <div class="accordion-item py-4">

                                <a href="#" class="text-inherit h5" data-bs-toggle="collapse"
                                   data-bs-target="#flush-collapseFour" aria-expanded="false"
                                   aria-controls="flush-collapseFour">
                                    <i class="feather-icon icon-credit-card me-2 text-muted"></i>Phương thức thanh toán
                                    <!-- collapse --> </a>
                                <div id="flush-collapseFour" class="accordion-collapse collapse show"
                                     data-bs-parent="#accordionFlushExample">

                                    <div class="mt-5">
                                        <div>

                                            <!-- card -->
                                            <div class="card card-bordered shadow-none mb-2">
                                                <!-- card body -->
                                                <div class="card-body p-6">
                                                    <div class="d-flex mb-4">
                                                        <div class="form-check ">
                                                            <!-- input -->
                                                            <input class="form-check-input" type="radio"
                                                                   name="flexRadioPayment" checked
                                                                   value="creditdebitcard" id="creditdebitcard">
                                                            <label class="form-check-label ms-2" for="creditdebitcard">

                                                            </label>
                                                        </div>
                                                        <div>
                                                            <h5 class="mb-1 h6"> Credit / Debit Card</h5>
                                                            <p class="mb-0 small">Chúng tôi hỗ trợ
                                                                Mastercard card, Visa</p>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col-12">
                                                            <!-- input -->
                                                            <div class="mb-3">
                                                                <label class="form-label">Số thẻ</label>
                                                                <input type="text" class="form-control"
                                                                       placeholder="1234 4567 6789 4321">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-12">
                                                            <!-- input -->
                                                            <div class="mb-3 mb-lg-0">
                                                                <label class="form-label">Tên chủ thẻ </label>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Nhập tên chủ thẻ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12">
                                                            <!-- input -->
                                                            <div class="mb-3  mb-lg-0 position-relative">
                                                                <label class="form-label">Thời hạn </label>
                                                                <input class="form-control flatpickr " type="text"
                                                                       placeholder="Chọn ngày">
                                                                <div class="position-absolute bottom-0 end-0 p-3 lh-1">
                                                                    <i class="bi bi-calendar text-muted"></i>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3 col-12">
                                                            <!-- input -->
                                                            <div class="mb-3  mb-lg-0">
                                                                <label class="form-label">CVV code </label>
                                                                <input type="password" class="form-control"
                                                                       placeholder="***">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card -->
                                            <div class="card card-bordered shadow-none">
                                                <div class="card-body p-6">
                                                    <!-- check input -->
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                   name="flexRadioPayment" value="cashonDelivery"
                                                                   id="cashonDelivery">
                                                            <label class="form-check-label ms-2" for="cashonDelivery">

                                                            </label>
                                                        </div>
                                                        <div>
                                                            <!-- title -->
                                                            <h5 class="mb-1 h6"> Thanh toán khi nhận hàng</h5>
                                                            <p class="mb-0 small">Thanh toán khi đơn hàng được giao
                                                                đến.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="mt-5 d-flex justify-content-end">
                                                <a href="#" class="btn btn-outline-gray-400 text-muted"
                                                   data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                   aria-expanded="false"
                                                   aria-controls="flush-collapseThree">Quay lại</a>
                                                <button href="#" id="submitPlaceOrder" type="button"
                                                        class="btn btn-primary ms-2">Đặt hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
                        <div class="mt-4 mt-lg-0">
                            <div class="card shadow-sm">
                                <h5 class="px-6 py-4 bg-transparent mb-0">Chi tiết hóa đơn</h5>
                                <ul class="list-group order-details list-group-flush">
                                    <?php
                                    //foreach ()
                                    ?>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2">
                                                <img src="assets/images/products/product-img-1.jpg" alt="Ecommerce"
                                                     class="img-fluid"></div>
                                            <div class="col-5 col-md-5">
                                                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                <span><small class="text-muted">.98 / lb</small></span>

                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span>1</span>

                                            </div>
                                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                <span class="fw-bold">đ5.00</span>

                                            </div>
                                        </div>

                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between fw-bold">
                                            <div>
                                                Tổng tiền
                                            </div>
                                            <div>
                                                đ73.00


                                            </div>

                                        </div>


                                    </li>

                                </ul>

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
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6>Are you sure you want to delete this address?</h6>
                <p class="mb-6">Jitu Chauhan<br>

                    4450 North Avenue Oakland, <br>

                    Nebraska, United States,<br>

                    402-776-1106</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- modal body -->
            <div class="modal-body p-6">
                <div class="d-flex justify-content-between mb-5">
                    <!-- heading -->
                    <div>
                        <h5 class="h6 mb-1" id="addAddressModalLabel">Địa chỉ giao hàng</h5>
                        <p class="small mb-0">Thêm đia chỉ giao đơn.</p>
                    </div>
                    <div>
                        <!-- button -->
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <!-- row -->
                <div class="row g-3">
                    <!-- col -->
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name"
                               required="">
                    </div>
                    <!-- col -->
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name"
                               required="">
                    </div>
                    <!-- col -->
                    <div class="col-12">

                        <input type="text" class="form-control" placeholder="Địa chỉ Line 1">
                    </div>
                    <div class="col-12">
                        <!-- button -->
                        <input type="text" class="form-control" placeholder="Địa chỉ Line 2">
                    </div>
                    <div class="col-12">
                        <!-- button -->
                        <input type="text" class="form-control" placeholder="City">
                    </div>
                    <div class="col-12">
                        <!-- button -->
                        <select class="form-select">
                            <option selected=""> India</option>
                            <option value="1">UK</option>
                            <option value="2">USA</option>
                            <option value="3">UAE</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <!-- button -->
                        <select class="form-select" aria-label="Default select example">
                            <option selected="">Gujarat</option>
                            <option value="1">Northern Ireland</option>
                            <option value="2"> Alaska</option>
                            <option value="3">Abu Dhabi</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <!-- button -->
                        <input type="text" class="form-control" placeholder="Zip Code">
                    </div>
                    <div class="col-12">
                        <!-- button -->
                        <input type="text" class="form-control" placeholder="Business Name">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <!-- label -->
                            <label class="form-check-label" for="flexCheckDefault">
                                Set as Default
                            </label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="button">Save Address</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>