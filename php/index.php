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
        $query_events = 'SELECT date_event, name_event, desc_event FROM tv_events WHERE id_timeline = ' . $_SESSION['id_timeline'];
        $query_timeline_name = 'SELECT DISTINCT nom FROM tv_timelines WHERE id = ' . $_SESSION['id_timeline'];

        $result = mysqli_query($link, $query_timeline_name);

        $timeline_name_array = $result->fetch_assoc();
        $timeline_name = $timeline_name_array['nom'];

        $result = mysqli_query($link, $query_events);


        echo '<table>';

        echo '<caption>' . $timeline_name . '</caption>';
        ?>

        <thead>
        <tr>
            <th>Date</th>
            <th>Nom</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<th>';
            echo $row['date_event'];
            echo '</th>';
            echo '<th>';
            echo $row['name_event'];
            echo '</th>';
            echo '<th>';
            echo $row['desc_event'];
            echo '</th>';
            echo '</tr>';
        }
        ?>
        </tbody>
        </table>
    <?php } ?>
</div>
</body>
</html>

