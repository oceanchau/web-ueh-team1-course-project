<?php
$initial_pages = ($pageNumber) * $limit;

$isPreDisable = $pageNumber == 0 ? "disabled" : "";
$isNextDisable = $pageNumber == $total_pages - 1 ? "disabled" : "";
?>
<nav aria-label="...">
    <ul class="pagination">
        <li class="page-item <?php echo $isPreDisable; ?>">
            <a class="page-link" href="<?php echo getHyperLink($pages, $pageNumber - 1, $limit); ?>"
                tabindex="-1">Previous</a>
        </li>
        <?php
        for ($i = 0; $i < $total_pages; $i++) {
            $isActive = $pageNumber == $i ? "active" : "inactive";
        ?>

        <li class="page-item <?php echo $isActive; ?>">
            <a class="page-link" href="<?php echo getHyperLink($pages, $i, $limit); ?>">
                <?php echo $i; ?>
            </a>
        </li>

        <?php } ?>
        <li class="page-item <?php echo $isNextDisable; ?>">
            <a class="page-link" href="<?php echo getHyperLink($pages, $pageNumber + 1, $limit); ?>">Next</a>
        </li>
    </ul>
</nav>