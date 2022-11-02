<?php
session_start();
require '../configs/function.php';

if (isset($_POST["submitLogin"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
//    TODO
//    $password = md5($password);
    $query = "
        SELECT * FROM tbl_users
        WHERE username = '$username'
        AND password = '$password'
    ";
    $result = $db_handle->runQuery($query);
    $user =  $result[0];
    if(isset($user)) {
        $_SESSION["currentUser"] = $user['username'];
        header("Location: http://localhost:5500/");
    }
}

?>
<?php include 'header.php'; ?>
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                        <span class="h1 fw-bold mb-0">Logo</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account
                                    </h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form2Example17" name="username" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example17">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <input class="btn btn-dark btn-lg btn-block" type="submit" value="Login" name="submitLogin" />
                                    </div>

                                    <!--                                        <a class="small text-muted" href="#!">Forgot password?</a>-->
                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/signup" style="color: #393f81;">Register here</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                s
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>