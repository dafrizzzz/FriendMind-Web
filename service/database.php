<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "mental_health_test_db";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error){
    die("error!");
}

?>