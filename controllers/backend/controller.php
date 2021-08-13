<?php

// require('models/frontend/stationManager.php');
function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=login'); // redirect
        exit();
    }
}
function app(){
      redirectIfNotLoggedin();
    require('views/backend/app.php');
}
function logout()
{
    // redirectIfNotLoggedin();
    session_destroy();
    header('Location:/index.php?action=login'); // redirect to frontend
    exit();
}
