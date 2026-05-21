<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if($page == "home"){
    include "page/home.php";
}
elseif($page == "detail"){
    include "page/detail.php";
}
elseif($page == "product"){
    include "page/product.php";
}

?>