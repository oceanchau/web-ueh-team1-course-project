<?php
require_once("handler/post-handler.php");

$item = find($_GET['id']);
if(!isset($item)) {
//    TODO: page error
    header("Location: /?p=news");
}
?>

<div class='container'>
    <?php
        echo "
            <div class='p-5 mb-4 bg-light rounded-3'>
                <div class='container-fluid py-5'>
                    <h1 class='display-5 fw-bold'>" . $item->getTitle() . "</h1>
                    <p class='col-md-8 fs-4'>" . $item->getContent() . "</p>
                </div>
            </div>
    ";
    ?>
</div>