<?php

if($_SERVER["REQUESTE_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once "../Classes/Dbh.php";
    require_once "../Classes/signup.php";

    $signup = new Signup($username, $pwd);
    $signup->signUpuser();  
}