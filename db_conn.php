<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="midterm";

$conn = mysqli_connect($servername,$dbusername,$dbpassword,$dbname);


if (!$conn){
    die("Maintenance Mode.");
}
session_start();
include_once ("sql_utilities.php");
?>

