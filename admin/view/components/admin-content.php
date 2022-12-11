<div class="row">
    <div class="col-lg-8 mb-4 order-0">
        <!-- welcome card -->
        <?php include_once "cards/admin-welcome-card.php"; ?>
        <!-- end welcome card -->
    </div>
    <!-- small card -->
    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <?php include_once "cards/admin-profit-card.php"; ?>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <?php include_once "cards/admin-sales-card.php"; ?>
            </div>
        </div>
    </div>
    <!-- end small card -->
    <!-- table -->
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        <?php include_once "admin-transactions.php"; ?>
    </div>
    <!-- end table -->
    <!-- sumary -->
    <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
        <div class="row">
            <div class="col-6 mb-4">
                <?php include_once "cards/admin-payments-card.php"; ?>
            </div>
            <div class="col-6 mb-4">
                <?php include_once "cards/admin-transactions-card.php"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <?php include_once "cards/admin-report-card.php"; ?>
            </div>
        </div>
    </div>
    <!-- end sumary -->
</div>