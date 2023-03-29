<?php
define("APP_PATH",__DIR__);

session_start();
//redirect to login page if no valid session is present else continue to index.php
if(!isset($_SESSION['is_loggin']) && empty($_SESSION['is_loggin'])) {
    header("Location: ".APP_PATH."/pages/login.php");
}else{
    header("Location: index.php");
}
?>