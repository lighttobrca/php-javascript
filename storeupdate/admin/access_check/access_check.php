<?php

session_start();
if(empty($_SESSION["ID"])){
header("location:localhost/php_kadai05/store/login_index.php?errormsg='正常にログインしてぐださい。'");
}
?>