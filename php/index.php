<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 06/08/2016
 * Time: 15:12
 */

session_start();
$_SESSION['is_event_add'] = null;
$_SESSION['name_event'] = null;

include 'connect.php';
include 'C:/Users/link0/Desktop/dBug/dBug.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Timeline maker</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/timeline.css">
    <script type="text/javascript" src="../js/functions.js"></script>
</head>
<body>
<header>
    <h1 class=title>Please select a timeline</h1>
    <div class="icon">
        <a href="add_timeline.php">
            <img id="add" src="../media/add.png">
        </a>
        <a href="edit_timeline.php">
            <img id="edit" src="../media/edit.png">
        </a>
    </div>
</header>
<div class="fields">
    <form method="get" action="actionindex.php">
        <select name="timeline" required style="font-family: inherit; font-size: 20pt;">
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
        <div id="validation_icon">
            <input type="image" src="../media/ok.png" alt="submit" height="10%" width="auto">
        </div>
    </form>
</div>
<div id="timeline_display">
    <?php
    if (isset($_SESSION['id_timeline'])) {
    $link = connect();
    $query_events = 'SELECT date_event, name_event, desc_event FROM tv_events WHERE id_timeline = ' . $_SESSION['id_timeline'] . ' ORDER BY date_event';
    $query_timeline_name = 'SELECT DISTINCT nom FROM tv_timelines WHERE id = ' . $_SESSION['id_timeline'];


    $result = mysqli_query($link, $query_timeline_name);

    $timeline_name_array = $result->fetch_assoc();
    $timeline_name = $timeline_name_array['nom'];

    $result = mysqli_query($link, $query_events);


    echo $timeline_name;
    ?>
    <ol>
        <?php


        while ($row = $result->fetch_assoc()) {
            echo '<li>';
            echo '<p class="diplome">';
            echo $row['date_event'].' : '.$row['name_event'];
            echo '</p>';
            echo '<span class="point"></span>';
            echo '<p class="description">';
            echo $row['desc_event'];
            echo '</p>';
            echo '</li>';
        }
        }
        ?>
    </ol>
</div>
</body>
</html>

