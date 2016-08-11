<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 06/08/2016
 * Time: 15:12
 */

include 'connect.php';
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
    $query = "SELECT title FROM timelines";
    $result = mysqli_query($link,$query);
    while ($row = $result->fetch_assoc()) {
        echo " id = " . $row['id'] . "\n";
        echo " title = " . $row['title'] . "\n";

    }
    ?>
</body>
</html>

