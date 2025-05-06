<?php 

define('DB_SERVER',"localhost:3306");
define('DB_USERNAME',"root");
define('DB_PASSWORD',"");
define('DB_DATABASE',"panel_vorrathdev");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn){
    die("Conection Failed: ". mysqli_connect_error());
} 

?>