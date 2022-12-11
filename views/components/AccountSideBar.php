<!-- col -->
<div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
    <div class="pt-10 pe-lg-10">
        <!-- nav -->
        <ul class="nav flex-column nav-pills nav-pills-dark">
            <!-- nav item -->
            <li class="nav-item">
                <!-- nav link -->
                <a class="nav-link <?php if($_GET['action'] == 'orders') echo 'active'?>" aria-current="page" href="/?controller=account&action=orders"><i
                            class="feather-icon icon-shopping-bag me-2"></i>Đơn hàng của bạn</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['action'] == 'address') echo 'active'?>" href="/?controller=account&action=address"><i
                            class="feather-icon icon-map-pin me-2"></i>Địa chỉ</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <hr>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link " href=""/?"><i class="feather-icon icon-log-out me-2"></i>Đăng xuất</a>
            </li>

        </ul>
    </div>
</div>
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
                <a class="nav-link <?php if($_GET['action'] == 'orders') echo 'active'?>" aria-current="page" href="/?controller=account&action=orders"><i
                            class="feather-icon icon-shopping-bag me-2"></i>Đơn hàng của bạn</a>
            </li>
            <!-- nav item -->
            <li class="nav-item">
                <a class="nav-link <?php if($_GET['action'] == 'address') echo 'active'?>" href="/?controller=account&action=address"><i
                            class="feather-icon icon-map-pin me-2"></i>Địa chỉ</a>
            </li>
        </ul>
        <hr class="my-6">
        <div>
            <!-- nav -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href=""/?"><i class="feather-icon icon-log-out me-2"></i>Đăng xuất</a>
                </li>

            </ul>
        </div>
    </div>
</div>