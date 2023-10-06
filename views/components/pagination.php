<?php
/**
 * @var int $page
 * @var int $maxPages
 */
?>

<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="/admin/dashboard?page=<?= previousPage($page)?>">Previous</a></li>
        <?php
        $setNumber = ceil($page / 3);
        $startingValue = 1 + ($setNumber - 1) * 3;

        for ($i = 0; $i < 3; $i++){
            $pageNumber = $startingValue + $i;
            $active = $page === (int) $pageNumber ? "active" : "";
            $disabled = $pageNumber > $maxPages ? "disabled" : "";
            echo "<li class=\"page-item  {$active} {$disabled}\"><a class=\"page-link\" href=\"/admin/dashboard?page={$pageNumber}\">$pageNumber</a></li>";
        }

        ?>
        <li class="page-item"><a class="page-link" href="/admin/dashboard?page=<?= nextPage($page, $maxPages) ?>">Next</a></li>
    </ul>
</nav>