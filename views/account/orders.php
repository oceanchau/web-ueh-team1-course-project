<?php
require_once('views/components/Header.php');

function showStatus(string $status): string
{
    $color = 'warning';
    if ($status === 'Completed') {
        $color = 'success';
    } elseif ($status === 'Cancel') {
        $color = 'danger';
    }
    return $color;
}

?>
<main>
    <!-- section -->
    <section>
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                        <!-- heading -->
                        <h3 class="fs-5 mb-0">Account Setting</h3>
                        <!-- button -->
                        <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 "
                                type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                            <i class="bi bi-text-indent-left fs-3"></i>
                        </button>
                    </div>
                </div>

                <?php require_once("views/components/AccountSideBar.php") ?>

                <div class="col-lg-9 col-md-8 col-12">
                    <div class="py-6 p-md-6 p-lg-10">
                        <!-- heading -->
                        <h2 class="mb-6">Đơn hàng của bạn</h2>

                        <div class="table-responsive border-0">
                            <!-- Table -->
                            <table class="table mb-0 text-nowrap">
                                <!-- Table Head -->
                                <thead class="table-light">
                                <tr>
                                    <th class="border-0">&nbsp;</th>
                                    <th class="border-0">Sản phẩm</th>
                                    <th class="border-0">Đơn hàng</th>
                                    <th class="border-0">Ngày đặt</th>
                                    <th class="border-0">Số lượng</th>
                                    <th class="border-0">Trạng thái</th>
                                    <th class="border-0">Thành tiền</th>

                                    <th class="border-0"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <!-- Table body -->
                                <?php
                                foreach ($orders as $order) {
                                    echo '
                                    <tr>
                                        <td class="align-middle border-top-0 w-0">
                                            <a href="#"> <img src="assets/images/products/' . $order->getImg()[0] . '"
                                                              alt="' . $order->getImg()[0] . '"
                                                              class="icon-shape icon-xl"></a>
    
                                        </td>
                                        <td class="align-middle border-top-0">
                                            <a href="#" class="fw-semi-bold text-inherit">
                                                <h6 class="mb-0">' . $order->getProductName() . '</h6>
                                            </a>
                                        </td>
                                        <td class="align-middle border-top-0">
                                            <a href="#" class="text-inherit">#' . $order->getId() . '</a>
    
                                        </td>
                                        <td class="align-middle border-top-0">
                                        ' . date("d-m-Y", strtotime($order->getCreatedAt())) . '
    
                                        </td>
                                        <td class="align-middle border-top-0">
                                        ' . $order->getQuantity() . '
    
                                        </td>
                                        <td class="align-middle border-top-0">
                                            <span class="badge bg-' . showStatus($order->getStatus()) . '">' . $order->getStatus() . '</span>
                                        </td>
                                        <td class="align-middle border-top-0">
                                        đ' . number_format($order->getAmount(), 0, '', '.') . '
                                </td>
                                </tr>
                                ';
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>