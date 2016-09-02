<?php
/**
 * Created by PhpStorm.
 * User: Sloan
 * Date: 11/08/2016
 * Time: 18:13
 */
session_start();
?>

<?php

include 'connect.php';
include 'C:/Users/link0/Desktop/dBug/dBug.php';

$link = connect();

$timeline = $_GET['timeline'];
$date = $_GET['date'];
$event = addslashes($_GET['event']);
$desc_event =addslashes($_GET['desc']);


$query = "INSERT INTO tv_events (id_timeline, date_event, name_event, desc_event) VALUES ('".$timeline."', '".$date."', '".$event."', '".$desc_event."')";


$result = mysqli_query($link,$query);

if(!$result){
    echo 'Error, can\'t add this new event';
    exit;
}

$_SESSION['is_event_add'] = 1;
$_SESSION['name_event'] = $event;
$_SESSION['id_timeline'] = $timeline;
$_SESSION['name_timeline'] = null;

header('Location: edit_timeline.php');

