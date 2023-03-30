<?php
session_start();
if(!isset($_SESSION['is_loggin']) || empty($_SESSION['is_loggin'])) {
    header('Location: pages/login.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>COVID WATCH 2023 | WEB DEV TOT</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="resources/plugins/fontawesome-free/css/all.min.css" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
        <!-- iCheck -->
        <link rel="stylesheet" href="resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
        <!-- JQVMap -->
        <link rel="stylesheet" href="resources/plugins/jqvmap/jqvmap.min.css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="resources/css/adminlte.min.css" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
        <!-- Daterange picker -->
        <link rel="stylesheet" href="resources/plugins/daterangepicker/daterangepicker.css" />
        <!-- summernote -->
        <link rel="stylesheet" href="resources/plugins/summernote/summernote-bs4.min.css" />
    </head>