<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:43
 */

include "connect.php";
include 'C:/Users/link0/Desktop/dBug/dBug.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Edit a timeline</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1 class="title">
    Edit a timeline
</h1>
<div id="home_icon">
    <a href="main.php">
        <img src="../media/home.png">
    </a>
</div>
<div class="fields">
    <form method="get" action="actionedit.php">
        Frise
        <br>
        <select name="timeline" required style="font-family: inherit; font-size: 12pt;">
            <?php
            $link = connect();
            $query = 'SELECT * FROM tv_timelines';
            $result = mysqli_query($link, $query);
            if(!$result){
                echo 'Error, can\'t acces the database';
                exit;
            }
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row['id'].'">'.$row['nom'].'</option>';
            }
            ?>
        </select>
        <br>
        Date
        <br>
        <input type="number" required name="date">
        <br>
        Evènement
        <br>
        <input type="text" name="event" required style="width: 500px;">
        <br>
        Description
        <br>
        <textarea name="desc" required maxlength="250"
                  style="height: 100px; width: 500px; font-family: 'Segoe UI Light'; font-size: 12pt"></textarea>
        <br>
        <input type="image" src="../media/ok.png" alt="submit" height="10%" width="auto">
    </form>
</div>
</body>
</html>
