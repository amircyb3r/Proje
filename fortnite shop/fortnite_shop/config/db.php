<?php

define('DB_HOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','shop');

if(! $link = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME)){
    die("Not connected");
}
else{

}
mysqli_set_charset($link,"utf8");




?>