<!DOCTYPE html>
<html lang="en">
<head>
    <title>UEH COMMUNITY SHOP - <?= ucfirst($file) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Website sell the light">
    <meta content="teamone" name="author"/>

    <!-- Libs CSS -->
    <link href="assets/libs/bootstrap/dist/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="assets/libs/bootstrap/dist/feather-icons.css" rel="stylesheet"/>
    <link href="assets/libs/slick-carousel/slick/slick.css" rel="stylesheet"/>
    <link href="assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet"/>
    <link href="assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icons/logo_ueh.png">

</head>

<body>
<div class="main">
    <?= @$content ?>
    <?php require_once('views/components/Footer.php') ?>
</div>

<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/jquery/dist/jquery.countdown.min.js"></script>
<script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
<script src="assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<!-- Theme JS -->
<script src="assets/js/shoppingCart.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>