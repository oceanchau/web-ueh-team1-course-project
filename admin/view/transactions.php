<?php
require_once "models/transaction_model.php";
$transaction = new Transaction();
$pageNumber = getParams("pageNumber");
$limit = getParams("limit");
$transactions = $transaction->getTransactions();
$total_pages = ceil(count($transactions) / $limit);


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
                <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
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
                    <th scope="col">Product</th>
                    <th scope="col">Amout</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                    <th scope="col">OrderAt</th>
                    <th scope="col">OrderBy</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $variable = array("success", "primary", "danger", "warning");
                foreach ($transactions as $key => $value) {
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <div class="me-2 d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-<?php echo $value['status']; ?>"><i
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
                            <small class="fw-semibold">
                                <?php echo $value['amount']; ?>
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
                            <small class="fw-semibold">
                                <?php echo $value['amount'] * $value['price']; ?>
                            </small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> 10/12/2022</small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> orderby DTD</small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small
                                class="fw-semibold text-<?php echo $value['status'] !== 'success' ? 'danger' : $value['status']; ?>">
                                <?php echo $value['status']; ?>
                            </small>
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