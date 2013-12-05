<?php

session_start();
if(empty($_SESSION["ID"])){
header("location:../login_index.php?errormsg='正常にログインしてぐださい。'");
}
?>