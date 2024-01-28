<?php

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["userID"]) && isset($_POST["pwd"])) {
    $userID = $_POST["userID"];
    $pwd = $_POST["pwd"];

    require_once '../classes/User.php';

    $user = new Login($userID, $pwd);
    $user->login();

}

