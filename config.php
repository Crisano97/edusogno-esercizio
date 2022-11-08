<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "utenti";

$connection = mysqli_connect($host, $user, $password, $dbname);
//CHECK CONNECTION 
if(!$connection){
    die("Connection failed:" . mysqli_connect_error());
}