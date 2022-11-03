<?php
session_start();
include 'configs/function.php';
?>
<?php //require_once('components/header.php'); ?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1" class=""></li>
    <li data-target="#mycarousel" data-slide-to="2" class=""></li>
  </ol>

  <div class="carousel-inner">
    <!--slide active-->
    <div class="carousel-item active">
      <img
        class="d-block w-100"
        src="assets/img/Ban1.png"
        width="500px"
        height="400px"
      />
      <!--slide text-->
      <div class="carousel-caption d-none d-md-block">
        <h5>Tiêu đề Slide 1</h5>
        <p>Chú thích cho Slide 1</p>
      </div>
    </div>

    <!--slide2-->
    <div class="carousel-item">
      <img
        class="d-block w-100"
        src="assets/img/Ban2.jpg"
        width="500px"
        height="400px"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Tiêu đề Slide 2</h5>
        <p>Chú thích cho Slide 2</p>
      </div>
    </div>
    <!--slide3-->
    <div class="carousel-item">
      <img
        class="d-block w-100"
        src="assets/Ban3.jpg"
        width="500px"
        height="400px"
      />
      <div class="carousel-caption d-none d-md-block">
        <h5>Tiêu đề Slide 1</h5>
        <p>Chú thích cho Slide 1</p>
      </div>
    </div>
  </div>
  <a
    class="carousel-control-prev"
    href="#mycarousel"
    role="button"
    data-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span></a
  >
  <a
    class="carousel-control-next"
    href="#mycarousel"
    role="button"
    data-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row">
  <div
    class="col-12 col-sm-9 py-3 container-fluid mt-3"
    style="background-color: #33a7b8"
  >
    <!-- truy van 4 san pham moi nhat -->
    <?php
		$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id DESC
    limit 4"); if (!empty($product_array)) { foreach ($product_array as $key =>
    $value) { ?>
    <div class="media border p-3">
      <img src="<?php echo $product_array[$key]["image"]; ?>" alt="<?php echo $product_array[$key]["name"]; ?>"
      class="mr-3 mt-3 rounded-circle" style="width:60px;">
      <div class="media-body">
        <h4><?php echo $product_array[$key]["name"]; ?></h4>
        <p><?php echo $product_array[$key]["price"]; ?></p>
      </div>
    </div>
    <?php
			}
		}
		?>
  </div>

  <div class="col-12 col-sm-3" style="background-color: #000000">
    <img src="assets/img/bor.png" style="width: 100%; height: 100%" />
  </div>
</div>

<center>
  <img src="assets/img/gtfull.png" class="rounded-sm" style="width: 90%" />
</center>

<a href="app/shopping_cart.php" title="Cart">View Cart</a><br />

<?php include 'app/footer.php'; ?>
