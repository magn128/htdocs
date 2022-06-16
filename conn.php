<?php
// brukernavnet er root
$user = 'root';
$password = '';
 

$database = '13.06utviklingsoppgave';
 
// Server er på localhost

$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
// Ser etter tilkoblinger
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

?>