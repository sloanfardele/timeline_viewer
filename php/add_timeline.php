<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:42
 */
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Add a new timeline</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1 class="title">New Timeline</h1>
<div id="home_icon">
<a href="main.php">
    <img src="../media/home.png">
</a>
</div>
<div class="fields">
<form action="actionadd.php" method="get">
    <label>Name : </label>
    <input type="text" name="name_timeline" required>
    <br>
    <br>
    <input type="image" src="../media/ok.png" alt="submit">
</form>
</div>
</body>
</html>

