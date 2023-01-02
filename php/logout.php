<?php 
session_start();

if(isset($_SESSION['unique_id'])){
    include "config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if(isset($logout_id)){
        $status = "Offline now";
        $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}'");
        if($sql){
            session_unset();
            session_destroy();
            header("Location: ../login.php");
            
        }
    }else{
        header("Location: ../users.php");

    }

}else{
    header("Location: ../login.php");
}




?>