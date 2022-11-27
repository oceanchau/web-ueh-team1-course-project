<ul class="navbar-nav ">
    <?php
    foreach ($categories as $category) {
        if ($category->$active) {
            return;
        }
        echo '
            <li class="nav-item ">
                <a class="nav-link" href="?controller=shop&id=' . $category->$id . '">
                    ' . $category->name . '
                </a>
            </li>
        ';
    }
    ?>
</ul>
