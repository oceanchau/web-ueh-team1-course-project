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
            <a class="navbar-brand" href="/">
                <img src="assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top">
            </a>
            <span class="navbar-text">
        Already have an account? <a href="?controller=pages&action=signIn">Sign in</a>
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
                        <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                        <p>Welcome to LightCart! Enter your email to get started.</p>
                    </div>
                    <!-- form -->
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="fullName" class="form-label">Name</label>
                                <input type="text" class="form-control" name="fullName" placeholder="Enter Your Name"
                                       required="">
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <!-- input --><input type="email" class="form-control" name="inputEmail4"
                                                     placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label">Password</label>
                                <!-- input --><input type="password" class="form-control" name="inputPassword4"
                                                     placeholder="Password"
                                                     required>
                            </div>
                            <?= $error ? '<div class="text-danger">'.$error.'</div>' : '' ?>
                            <!-- btn -->
                            <div class="col-12 d-grid">
                                <button type="submit" name="submitSignUp" class="btn btn-primary">Register</button>
                            </div>

                            <!-- text -->
                            <p><small>By continuing, you agree to our <a href="#!"> Terms of Service</a> & <a href="#!">Privacy
                                        Policy</a></small></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>
</main>