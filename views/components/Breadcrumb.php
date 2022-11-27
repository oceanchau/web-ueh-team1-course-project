<div class="mt-4">
    <div class="container">
        <!-- row -->
        <div class="row ">
            <!-- col -->
            <div class="col-12">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <?php
                        for ($i = 0; $i < count($levels); $i++) {
                            if (count($levels) - 1 === $i) {
                                echo '
                                <li class="breadcrumb-item active " aria-current="page">
                                    ' . $levels[$i]->name . '
                                </li>
                                ';
                            } else {
                                $link = '?controller=' . $levels[$i]->controller . '&action=' . $levels[$i]->action;
                                if (isset($levels[$i]->id)) {
                                    $link .= '&id=' . $levels[$i]->id;
                                }
                                echo '
                                <li class="breadcrumb-item">
                                    <a href="' . $link . '">' . $levels[$i]->name . '</a>
                                </li>
                                ';
                            }
                        }
                        ?>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>