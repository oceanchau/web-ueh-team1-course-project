<!DOCTYPE html>
<html lang="en">
<head>
    <title>LightCart - <?= ucfirst($file) ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="Website sell the light">
    <meta content="teamone" name="author"/>
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->


    <!-- Libs CSS -->
    <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"/>
    <link href="assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet"/>
    <link href="assets/libs/slick-carousel/slick/slick.css" rel="stylesheet"/>
    <link href="assets/libs/slick-carousel/slick/slick-theme.css" rel="stylesheet"/>
    <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet"/>
    <link href="assets/libs/nouislider/dist/nouislider.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/dist/tiny-slider.css" rel="stylesheet">
    <link href="assets/libs/dropzone/dist/min/dropzone.min.css" rel="stylesheet"/>
    <link href="assets/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/icons/favicon.ico">

</head>

<body>
<div class="main">
    <?= @$content ?>
    <?php require_once('views/components/Footer.php') ?>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script> -->

<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/libs/slick-carousel/slick/slick.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="assets/libs/nouislider/dist/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>
<script src="assets/libs/rater-js/index.js"></script>
<script src="assets/libs/prismjs/prism.js"></script>
<script src="assets/libs/prismjs/components/prism-scss.min.js"></script>
<script src="assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
<script src="assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="assets/libs/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>
<script src="assets/libs/inputmask/dist/jquery.inputmask.min.js"></script>
<!-- Theme JS -->
<script src="assets/js/script.js"></script>
<script>
    $("#deleteModal").on('show.bs.modal', function (event) {
        const button = event.relatedTarget
        const id = button.getAttribute('data-id')
        console.log("deleting id " + id);
        $(document).on('click', '.deleteAddress', function () {
            console.log("deleted id " + id);
            $('#deleteModal').modal('hide');
        })
    })
</script>
</body>

</html>