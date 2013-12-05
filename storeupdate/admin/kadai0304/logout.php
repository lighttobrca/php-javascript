<?php
//logout.php
session_start();

//配列の中身を空にする。
$_SESSION = array();

session_destory();

header("Location:index.php");
?>