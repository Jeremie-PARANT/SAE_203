<?php
//     -----    BASE DE DONNEE   -----     //
$link = mysqli_connect("localhost", "root", "", "sae_203");

//select session autorisation
    if (!empty($_SESSION['mail']) && !empty($_SESSION['autorisation'])) {
        $mail = $_SESSION['mail'];
        $autorisation = $_SESSION['autorisation'];
    }

//     -----    BASE DE DONNEE   -----     //

//recupere URL
$url = $_SERVER['REQUEST_URI'];
?>