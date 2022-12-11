<?php
require_once "models/transaction_model.php";
$transaction = new Transaction();
$transactions = $transaction->getBetSeller();
?>
<div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Best Seller</h5>
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
    <div class="card-body">
        <ul class="p-0 m-0">
            <?php
            foreach ($transactions as $key => $value) {
            ?>
            <li class="d-flex mb-4 pb-1">
                <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                </div>
                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0">
                            <?php echo ($value['name']); ?>
                        </h6>
                        <small class="text-muted">Tổng số lượng:
                            <?php echo $value['total'] . " cái"; ?>
                        </small>
                    </div>
                    <div class="user-progress">
                        <small class="fw-semibold">
                            <?php echo number_format($value['total'] * $value['price'], 0, ".", ",") . " VND"; ?>
                        </small>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>