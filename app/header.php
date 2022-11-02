<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Trang chủ - UEH COMMUNITY SHOP</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width=200px;></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home" style="font-size:28px;color:#ffffff;">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products" style="font-size:28px;color:#ffffff;">Sản phẩm</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html" style="font-size:28px;color:#ffffff;">Giới thiệu</a>
            </li>

            <?php
            if (!isset($_SESSION["currentUser"]) && empty($_SESSION["currentUser"])) {
                echo "
                <li class='nav-item'>
                    <a class='nav-link' href='signin' style='font-size:28px;color:#ffffff;'>Sign In</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='signup' style='font-size:28px;color:#ffffff;'>Sign Up</a>
                </li>
                ";
            } else {
                $currentUser = $_SESSION["currentUser"];
                echo "
                <li class='nav-item'>
                    <a class='nav-link' href='profile' style='font-size:28px;color:#ffffff;'>Xin chào $currentUser</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='logout' style='font-size:28px;color:#ffffff;'>Logout</a>
                </li>
                ";
            }
            ?>

        </ul>
    </div>

</nav>

<div class="container-fluid" style="background-color:#33a7b5;">

    <!--header enddddd-->