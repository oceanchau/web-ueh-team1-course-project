<?php
$error = '';
if (isset($_POST['submit'])) {
    $isLogged = User::login($_POST['inputEmail4'], md5($_POST['inputPassword4']));
    if ($isLogged) {
        $_SESSION['currentUser'] = $_POST['inputEmail4'];
        header("Location: /");
    }
    $error = "Tên tài khoản hoặc mật khẩu không đúng.";
}
?>
<!-- navigation -->
<div class="border-bottom shadow-sm">
    <nav class="navbar navbar-light py-2">
        <div class="container justify-content-center justify-content-lg-between">
            <a class="navbar-brand" href="/?">
                <img width="160" src="assets/images/logo/logo.png" alt="" class="d-inline-block align-text-top">
            </a>
            <span class="navbar-text">
        Chưa có tài khoản? <a href="/?controller=pages&action=signUp">Đăng ký</a>
      </span>
        </div>
    </nav>
</div>


<main>
    <!-- section -->
    <section class="my-lg-14 my-8">
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                    <!-- img -->
                    <img src="assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
                </div>
                <!-- col -->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                    <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Đăng nhập UEH COMMUNITY SHOP</h1>
                        <p>Chào mừng quay trở lại UEH COMMUNITY SHOP, vui lòng đăng nhập để bắt đầu.</p>
                    </div>

                    <form method="post">
                        <div class="row g-3">
                            <!-- row -->

                            <div class="col-12">
                                <!-- input -->
                                <input type="email" class="form-control" name="inputEmail4" placeholder="Username"
                                       required>
                            </div>
                            <div class="col-12">
                                <!-- input -->
                                <input type="password" class="form-control" name="inputPassword4" placeholder="Password"
                                       required>
                            </div>
                            <?= $error ? '<div class="text-danger">' . $error . '</div>' : '' ?>
                            <!-- btn -->
                            <div class="col-12 d-grid">
                                <button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
                            </div>
                            <!-- link -->
                            <div>Chưa có tài khoản? <a href="/?controller=pages&action=signUp"> Đăng ký</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>