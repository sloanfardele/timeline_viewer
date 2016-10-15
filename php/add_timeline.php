<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:42
 */

session_start();
session_destroy();
include 'C:/Users/link0/Desktop/dBug/dBug.php';
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Create a new timeline</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
    <h1 class="title">New Timeline</h1>
    <div class="icon">
        <a href="index.php">
            <img src="../media/home.png">
        </a>
    </div>
</header>
<div class="fields">
    <form action="actionadd.php" method="get">
        Name
        <br>
        <input type="text" name="name_timeline" required style="width: 300px;">
        <br>
        <input type="image" src="../media/ok.png" alt="submit" height="10%" width="auto">
    </form>
</div>
</body>
</html>

