<?php 
    session_start();
    include "../../config/database.php";

//IF USER IS ALREADY LOGGED IN, SEND THEM TO CORRECT DASHBOARD
    
    if(isset($_session["role"]) == "admin"){
        header("Location: ../../index.php");
        exit;
    }

    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    //DELETE SQL COMMMAND
    mysqli_query($conn, "DELETE FROM users WHERE id =$id AND role='student'");
    header("Location: index.php");
    exit;   
?>