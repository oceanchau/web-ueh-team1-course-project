<?php require_once('views/components/Header.php') ?>

<main>
    <!-- section -->

    <section class="my-lg-14 my-8">
        <!-- container -->
        <div class="container">
            <div class="row">
                <!-- col -->
                <div class="offset-lg-2 col-lg-8 col-12">
                    <div class="mb-8">
                        <!-- heading -->
                        <h1 class="h3">Liên hệ hợp tác</h1>
                    </div>
                    <!-- form -->
                    <form class="row">
                        <!-- input -->
                        <div class="col-md-12 mb-3">
                            <label class="form-label" for="fname"> Họ tên <span class="text-danger">*</span></label>
                            <input type="text" id="fname" class="form-control" name="fname"
                                   placeholder="Nhập họ tên" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <!-- input -->
                            <label class="form-label" for="company"> Đơn vị<span class="text-danger">*</span></label>
                            <input type="text" id="company" name="company" class="form-control"
                                   placeholder="Nhập tên công ty" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <!-- input -->
                            <label class="form-label" for="title"> Chủ đề</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Nhập chủ đề"
                                   required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="emailContact">Email<span class="text-danger">*</span></label>
                            <input type="email" id="emailContact" name="emailContact" class="form-control"
                                   placeholder="Nhập email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <!-- input -->
                            <label class="form-label" for="phone"> Số điện thoại</label>
                            <input type="text" id="phone" name="phone" class="form-control"
                                   placeholder="Nhập số điện thoại" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <!-- input -->
                            <label class="form-label" for="comments"> Nội dung</label>
                            <textarea rows="3" id="comments" class="form-control"
                                      placeholder="Nhập nội dung"></textarea>
                        </div>
                        <div class="col-md-12">
                            <!-- btn -->
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>

    </section>
</main>