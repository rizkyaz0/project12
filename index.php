<?php
error_reporting(0);
 setcookie('id', '');
if ($_COOKIE['id'] != '') {
    include 'dashboard.php';
}else{

    $active[2][0] = "active";
    include 'stocker-home.php';
}
?>