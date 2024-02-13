<?php 
    session_start();
    include '../connect.php';

    // Check if the user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location: login.php');
        exit();
    }

?>
