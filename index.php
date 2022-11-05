<?php
include 'configs/function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel='stylesheet' href='assets/styles/product.css'>
    <title>Trang chủ - UEH COMMUNITY SHOP</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--header-->
<?php require_once("components/header.php") ?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (isset($_GET['p'])) {
    switch ($_GET['p']) {
        case 'signin':
            require_once("components/login.php");
            break;
        case 'signup':
            require_once("components/signup.php");
            break;
        case 'products':
            require_once("components/product.php");
            break;
        case 'checkout':
            require_once("components/checkout.php");
            break;
        case 'news':
            if(isset($_GET['id']))
                require_once("components/postDetail.php");
            else
                require_once("components/news.php");
            break;
        default:
            require_once("components/carousel.php");
    }
} else {
    require_once("components/carousel.php");
}
?>
<?php require_once("components/footer.php") ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
<script>
    // form payment
    $(document).ready(function () {
        $(".form-card").hide();
        $("#credit").click(function () {
            $(".form-card").show();
        });
        const payOnDelivery = $("#payOnDelivery")
        payOnDelivery.click(function () {
            $(".form-card").hide();
        });

        const forms = $('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                var isChecked = payOnDelivery.is(":checked");
                if (isChecked) {
                    $(".payOnDelivery-check").removeAttr("required");
                } else {
                    $(".payOnDelivery-check").attr("required", "");
                }
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    });
</script>
</body>