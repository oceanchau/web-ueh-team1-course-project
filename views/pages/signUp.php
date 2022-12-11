<?php
$error = '';
if (isset($_POST['submitSignUp'])) {
    try {
        $userSignUp = (new User())
            ->setUsername($_POST['inputEmail4'])
            ->setPassword(md5($_POST['inputPassword4']))
            ->setFullName($_POST['fullName']);
        User::signUp($userSignUp);
        header("Location: /?controller=pages&action=signIn");
    } catch (ErrorException $e) {
        $error = $e->getMessage();
    }
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
        Đã có tài khoản? <a href="/?controller=pages&action=signIn">Đăng nhập</a>
      </span>
        </div>
    </nav>
</div>


<main>
    <!-- section -->

    <section class="my-lg-14 my-8">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                    <!-- img -->
                    <img src="assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid">
                </div>
                <!-- col -->
                <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                    <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Đăng ký nhận ưu đãi</h1>
                        <p>Chào mừng đên với UEH COMMUNITY SHOP! Nhập thông tin đăng ký để bắt đầu.</p>
                    </div>
                    <!-- form -->
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="fullName" class="form-label">Tên</label>
                                <input type="text" class="form-control" name="fullName" placeholder="Nhập tên"
                                       required="">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <!-- input --><input type="email" class="form-control" name="inputEmail4"
                                                     placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Mật khẩu</label>
                                <!-- input --><input type="password" class="form-control" name="inputPassword4"
                                                     placeholder="Nhập mật khẩu"
                                                     required>
                            </div>
                            <?= $error ? '<div class="text-danger">'.$error.'</div>' : '' ?>
                            <!-- btn -->
                            <div class="col-12 d-grid">
                                <button type="submit" name="submitSignUp" class="btn btn-primary">Đăng ký</button>
                            </div>

                            <!-- text -->
                            <p><small>Để tiếp tục, vui lòng xem và nhấn <a href="#!"> điều khoản</a> & <a href="#!">chính sách
                                        bảo mật</a></small></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>
</main>