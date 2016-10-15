<?php
/**
 * Created by PhpStorm.
 * User: link0
 * Date: 19/09/2016
 * Time: 21:21
 */
session_start();
$_SESSION['id_timeline'] = $_GET['timeline'];
?>

<?php


header('Location: index.php');
