<?php
$current_Product = $product->getProductById( $_GET['id'])[0];
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="?p=products&pageNumber=1&limit=20" method="post">
            <input type="hidden" name="id" value="<?php echo $current_Product['id'] ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you want to delete?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="deleteProduct" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
<form method="post">
    <div class="mb-3">
        <label for="Name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $current_Product['name']; ?>" id="Name" required aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text" class="form-control" name="code" value="<?php echo $current_Product['code']; ?>" placeholder="0" required id="code">
    </div>
    <div class="mb-3">
        <label for="Amount" class="form-label">Status</label>
        <input type="text" class="form-control" name="amount" value="<?php echo $current_Product['status']; ?>" placeholder="0" required id="Amount">
    </div>
    <div class="mb-3">
        <label for="Price" class="form-label">Price</label>
        <input type="number" class="form-control" name="price" placeholder="100.000" value="<?php echo $current_Product['price']; ?>" required id="Price">
    </div>
    <div class="mb-3">
        <label for="imageUrl" class="form-label">Image Url</label>
        <input type="text" class="form-control" value="<?php echo $current_Product['img']; ?>" name="imageUrl" placeholder="https://" id="imageUrl">
        <img class="mt-2 w-50" src="<?php echo $current_Product['img']; ?>" id="reviewImage"  alt="review"  />
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="Description"  cols="30" rows="10">
            <?php echo $current_Product['detail']; ?>
        </textarea>
    </div>
    <input type="hidden" name="id" value=" <?php echo $current_Product['id']; ?>">
    <button type="submit" name="updateProduct" class="btn btn-outline-secondary mr-2">Save</button>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
    </button>

</form>