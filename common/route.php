<?php

// ambil URL dari parameter
$url = explode('/', $_GET['url']);
$pages =$url[0];
$file = $url[1];
$var = array_slice($url, 2);


 ?>
