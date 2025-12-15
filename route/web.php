 <?php
 $page = isset($_GET['page']) == 'home';

    if($page == 'home') include "page/home.php";
    else if ($page == 'page2') include "page/product.php"
    ?>