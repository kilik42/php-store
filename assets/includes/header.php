<?php
$companyName = "Franklin's Fine Dining";
include ('arrays.php'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <style type="text/css">
        body {
            font-family: 'Helvetica Neue', arial;
            text-align: center;
        }
        table {
            font-size: small;
            text-align: left;
            margin: 100px auto 0 auto;
            border-collapse: collapse;
        }
        td {
            padding: 2px 8px;
            border: 1px solid #ccc;
        }
    </style>
    <title>Document</title>
</head>
<body  id="final-example">
<div class="wrapper">
    <div id="banner">
        <a href="img/banner.png"title="return to home"></a>
    </div>
    <div id="nav">

           <?php include ('assets/includes/nav.php');?>

    </div>

    <div id="content">