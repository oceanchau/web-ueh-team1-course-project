<?php
include_once("view/components/modal/add-product-modal.php");
?>

<div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Products</h5>
        <div class="dropdown">
            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Product Modal
                </button>
                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive p-0 my-2">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>

                    <th scope="col">Status</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products
                     as $key => $value) {
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $value['id']; ?>
                    </th>
                    <td>
                        <div class="me-2 d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img class="w-100" src="<?php echo $value['img']; ?>" alt="banner">
                            </div>
                            <div class="div">
                                <h6 class="mb-0">
                                    <?php echo $value['name']; ?>
                                </h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold">
                                <?php echo $value['status']; ?>
                            </small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold">
                                <?php echo $value['price']; ?>
                            </small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <a class="btn btn-warning" href="?p=edit-product&id=<?php echo $value['id']; ?>">Edit</a>
                        </div>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>
    <div class="card-footer">
        <?php include_once "view/components/admin-pagination.php"; ?>
    </div>
</div>