<?php

function displayLoginError()
{
    if (isset($_GET['login']) && $_GET['login'] === 'invalid') {
        echo "Login failed! Invalid credentials.";
    }
}