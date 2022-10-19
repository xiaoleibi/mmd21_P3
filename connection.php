<?php  

$forbindelse =
new mysqli('localhost','root','root','koder_til_web');

if($forbindelse->connect_error){
    die('Kan ikke forbinde til databasen'.
    $forbindelse->connect_errno.'; '.
    $forbindelse->connect_error);
    }


    $forbindelse->set_charset('utf8');

?>