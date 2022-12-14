<div class="card">
    <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
                <img src="./assets/icons/chart-success.png" alt="Credit Card" class="rounded" />
            </div>
            <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                    <a class="dropdown-item" href="javascript:void(0);">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
            </div>
        </div>
        <span class="fw-semibold d-block mb-1">Transactions</span>
        <!-- <h5 class="card-title mb-2"></h5> -->
        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
            <?php echo getTotalMoneyTransactions(); ?>
        </small>
    </div>
</div>