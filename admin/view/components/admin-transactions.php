<div class="card h-100">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
            <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                <a class="dropdown-item" href="?p=orders&pageNumber=1&limit=20">View more</a>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive p-0 my-2">
        <table class="table table-hover">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Amout</th>
                    <th scope="col">OrderAt</th>
                    <th scope="col">OrderBy</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($transactions as $key => $value) {
                    ?>
                <tr>
                    <th scope="row"><?php echo $value['id']; ?></th>
                    <td>
                        <div class="me-2 d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label"><i
                                        class='bx bxs-shopping-bag-alt'></i></span>
                            </div>
                            <div class="div">
                                <h6 class="mb-0"><?php echo $value['username']; ?></h6>
                                <small class="text-muted"> shippingAddressId: <?php echo $value['shippingAddressId']; ?></small>
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
                            <small class="fw-semibold"><?php echo $value['createdAt']; ?></small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small class="fw-semibold"> <?php echo $value['orderId']; ?></small>
                        </div>
                    </td>
                    <td>
                        <div class="user-progress">
                            <small
                                class="fw-semibold text-<?php echo $value['status'] !== 'PAID' ? 'danger' : 'success' ?>">
                                <?php echo $value['status']; ?>
                            </small>
                        </div>
                    </td>

                </tr>
                <?php } ?>

            </tbody>
        </table>


    </div>
</div>