<?php
require_once "models/transaction_model.php";

$db = new Transaction();

include_once("components/modal/add-product-modal.php");
?>

<div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
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
                    <th scope="col">Amout</th>
                    <th scope="col">Price</th>                  
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $variable = array("success", "primary", "danger", "warning");
                foreach ($variable as $key => $value) {
                    # code...
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <div class="me-2 d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class='bx bxs-shopping-bag-alt'></i></span>
                            </div>
                            <div class="div">
                                <h6 class="mb-0">Electronic</h6>
                                <small class="text-muted">Mobile, Earbuds, TV</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> orderby DTD</small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> orderby DTD</small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> orderby DTD</small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> orderby DTD</small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> orderby DTD</small>
                        </div>
                    </td>

                </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>
    <div class="card-footer">
        <?php include_once "components/admin-pagination.php"; ?>
    </div>
</div>