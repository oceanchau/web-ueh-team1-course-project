<?php
session_start();
?>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                <li><a href="/?p=products" class="nav-link px-2 link-dark">Products</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <?php
            if (isset($_SESSION["currentUser"])) {
                ?>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        <?php echo $_SESSION["currentUser"] ?>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Order</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
                <?php
            } else {
                ?>
                <div class="text-end">
                    <ul class="nav">
                        <li class="nav-item"><a href="?p=signin"
                                                class="nav-link link-dark px-2 btn btn-outline-success me-2">Login</a>
                        </li>
                        <li class="nav-item"><a href="?p=signup"
                                                class="nav-link link-dark px-2 btn btn-outline-primary">Signup</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</header>