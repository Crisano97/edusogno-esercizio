<?php
// session_start();
// $host = "localhost";
// $user = "root";
// $password = "";
// $dbname = "utenti";

// $connection = mysqli_connect($host, $user, $password, $dbname);
// //CHECK CONNECTION 
// if(!$connection){
//     die("Connection failed:" . mysqli_connect_error());
// }

//DEFINIAMO UNA NUOVA COSTANTE, CON IL VALORE ASSEGNATO COME SECONDO ARGOMENTO
define('DB_SERVER_ADDRESS', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'utenti');

//CONNESSIONE AL DB
$connection = new mysqli(DB_SERVER_ADDRESS, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($connection && $connection->connect_error){
    echo "Connection failed: " . $connection->connect_error;
}