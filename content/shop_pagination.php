<div class="pagination_style">
    <div class="item_page">
        <form action="#" method="get">
            <label for="page_select">Show</label>
            <select id="page_select" name="kichthuoctrang">
                <option value="9" selected>9</option>
                <!-- <option value="10">10</option>
                <option value="11">11</option> -->
            </select>
            <input type="hidden" name="action" value="search">
            <span>Products by page</span>
        </form>
    </div>
    <form method='get'>
        <input type="hidden" name="action" value="search">
        <div class="page_number">
            <span>Pages: </span>
            <ul>
                <?php
                $tht = isset($_GET['tranghientai']) ? intval($_GET['tranghientai']) : 1;
                ?>
                <li><a data-page="1" href="../pages/shop1.php?tranghientai=<?php echo ($tht == 1) ? 1 : $tht - 1; ?>">«</a></li>
                <li><a data-page="1" href="../pages/shop1.php?tranghientai=1">1</a></li>
                <li><a data-page="2" href="../pages/shop1.php?tranghientai=2">2</a></li>
                <li><a data-page="3" href="../pages/shop1.php?tranghientai=3">3</a></li>
                <li><a data-page="2" href="../pages/shop1.php?tranghientai=<?php echo ($tht < $sotrang) ? $tht + 1 : $sotrang; ?>">»</a></li>
            </ul>
        </div>
    </form>
</div>
