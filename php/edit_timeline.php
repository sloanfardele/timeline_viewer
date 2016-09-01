<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:43
 */

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Timeline maker</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<h1 class="title">
    Frise Chronologique
</h1>
<div id="fields">
    <form method="post" action="actionform.php">
        Date :
        <input type="text" name="date" required>
        <br>
        Evènement :
        <input type="text" name="event" required>
        <br>
        <input type="submit" value="Ajouter" onclick="submit()">
    </form>
</div>
<script type="text/javascript" src="../js/functions.js"></script>
</body>
</html>
