<?php
if(!empty($_GET['id'])){
$id= $_GET['id'];
include_once 'connection.php';
$fordring = "DELETE FROM opskrifter WHERE id=$id;";
$svar = $forbindelse->query($fordring);
header('location: indexkage.php');
}
?>