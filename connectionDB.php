<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="collage";

$conn=New mysqli($serverName,$userName,$password,$dbName);
if(!$conn){
    die("connected_error");
}

?>