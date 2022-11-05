<?php
require_once("handler/post-handler.php");

$posts = findAll();
?>

<div class='container'>
    <?php
    foreach ($posts as $item) {
        echo "
            <div class='p-5 mb-4 bg-light rounded-3' style='background-image: url(" . $item->getImgThummail() . ")'>
                <div class='container-fluid py-5 text-light'>
                    <h1 class='display-5 fw-bold'>" . $item->getTitle() . "</h1>
                    <p class='col-md-8 fs-4'>" . $item->getSumary() . "</p>
                    <button class='btn btn-outline-light btn-lg' type='button'>
                        <a href='/?p=news&id=" . $item->getId() . "' class='nav-link px-2'>Đọc tiếp</a>
                    </button>
                </div>
            </div>
    ";
    }
    ?>
</div>