<?php
session_start();
include 'lib/function.php';
?>
<?php include 'header.php'; ?>

	<div class="container">
	  <div class="detail-container rounded my-5 row">
		<div class="col-md-12 ">
		  <div class="row">
		  
			<?php
				$id=$_GET["id"];
				$product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE id='$id'");
				if (!empty($product_array)) { 
				foreach($product_array as $key=>$value){
			?>
			<div class="rounded-left col-md-6 product bg-white">
			  <img class="mt-5"
				   src="<?php echo $product_array[$key]["image"]; ?>" width=100% alt="<?php echo $product_array[$key]["name"]; ?>">
				   <div class="color text-center">
				   <h5 class="mb-4">Màu sắc</h5>
				   <span class="bg-info px-3 py-1 rounded-circle"></span>
				   <span class="bg-warning px-3 py-1 rounded-circle"></span>
				   <span class="bg-danger px-3 py-1 rounded-circle"></span>
				 </div>
			</div>
			<div class="rounded-right col-md-6 detail bg-dange pb-5">
			  <div class="logo text-white text-center mt-5">
				<img src="img/logo.jpg" alt="" width=200 class="text-white">
			  </div>
			  <h5 class="px-1 desc mt-5 text-white text-center"><?php echo $product_array[$key]["name"]; ?>
			  <div class="text-muted"><?php echo $product_array[$key]["code"]; ?></div>
			  </h5>
			  <div class="py-5 px-4">
				Thông tin sản phẩm.......................
			  </div>
			  <div class="text-center price">
				<span class="text-warning"><?php echo $product_array[$key]["price"]; ?> VND</span>
			  </div>
			  <div class="text-center mt-4">
				<select class="btn bg-info mr-2">
				  <option value="Size">Cỡ áo</option>
				  <option value="Size">M</option>
				  <option value="Size">L</option>
				  <option value="Size">XL</option>
				</select>
				<button class="btn bg-warning ml-5">Mua hàng</button>
			  </div>
			  <i class="fa fa-share-square-o" aria-hidden="true"></i>
			</div>
			<?php
				}
			}
			?>
			
		  </div>
		</div>
	  </div>
	</div>


<?php include 'footer.php'; ?>