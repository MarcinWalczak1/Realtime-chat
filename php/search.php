<?php 
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];

$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

$output = "";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE name LIKE '%{$searchTerm}%'  OR last_name LIKE '%{$searchTerm}%'");

if(mysqli_num_rows($sql) > 0){

    include "data.php";

}else{
    $output = "Nie znaleziono takiego użytkownika!";

}
echo $output;



?>