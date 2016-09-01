<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 06/08/2016
 * Time: 15:12
 */

include 'connect.php';
include 'C:/Users/link0/Desktop/dBug/dBug.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Timeline maker</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1>Please select a timeline</h1>
    <?php
    $link = connect();
    $query = "SELECT * FROM tv_events";
    $result = mysqli_query($link,$query);
    while ($row = $result->fetch_assoc()) {
        echo " id = " . $row['id_event'] . "\n";
        echo " name = " . $row['name_event'] . "\n";

    }
    ?>
</body>
</html>

