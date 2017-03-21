<?php
/**
 * Created by PhpStorm.
 * User: link0
 * Date: 01/09/2016
 * Time: 15:39
 */

session_start();
?>

<?php

include "connect.php";
include("../dBug.php");

$name_timeline = $_GET['name_timeline'];

$now = date('Y-m-d');

$link = connect();
$query = "INSERT INTO tv_timelines (nom, date_de_creation) VALUES ('".$name_timeline."', '".$now."')";


$result = mysqli_query($link,$query);

if(!$result){
    echo 'Error, can\'t add this new timeline';
    exit;
}

$_SESSION['name_timeline'] = $name_timeline;

header('Location: edit_timeline.php');