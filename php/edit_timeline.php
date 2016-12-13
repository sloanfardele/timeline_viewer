<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:43
 */

session_start();

include "connect.php";
include 'C:/Users/link0/Desktop/dBug/dBug.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Add an event</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
    <h1 class="title">
        Add an event
    </h1>
    <div class="icon">
        <a href="index.php">
            <img src="../media/home.png">
        </a>
    </div>
</header>
<div class="fields">
    <form method="get" action="actionedit.php">
        Frise
        <br>
        <select name="timeline" required style="font-family: inherit; font-size: 12pt;">
            <?php
            $link = connect();
            $query = 'SELECT * FROM tv_timelines';
            $result = mysqli_query($link, $query);
            if (!$result) {
                echo 'Error, can\'t acces the database';
                exit;
            }
            while ($row = $result->fetch_assoc()) {
                if ($_SESSION['name_timeline'] == $row['nom'] || $_SESSION['id_timeline'] == $row['id']) {
                    echo '<option value="' . $row['id'] . '" selected>' . $row['nom'] . '</option>';
                } else {
                    echo '<option value="' . $row['id'] . '">' . $row['nom'] . '</option>';
                }
            }
            ?>
        </select>
        <br>
        Date
        <br>
        <input type="date" required name="date">
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
<div id="confirmation_adding_event">
    <?php
    if (isset($_SESSION['is_event_add']) && $_SESSION['is_event_add'] == 1) {
        echo 'L\'évènement ' . $_SESSION['name_event'] . ' a bien été ajouté';
    }
    ?>
</div>
</body>
</html>
