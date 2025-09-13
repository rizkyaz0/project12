<?php
error_reporting(0);
 setcookie('id', '');
if ($_COOKIE['id'] != '') {
    include 'dashboard.php';
}else{
    include 'stocker-home.php';
}
?>