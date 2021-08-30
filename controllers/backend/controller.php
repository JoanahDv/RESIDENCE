<?php

require('models/backend/userManager.php');
// require('models/frontend/stationManager.php');
function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=login'); // redirect
        exit();
    }
}
function app()
{
    redirectIfNotLoggedin();
    $userManagerBackend =  new UserManagerBackend();
    $userid = $_SESSION['id'];
    $user = $userManagerBackend->getUser($userid);
    require('views/backend/app.php');

}
function logout()
{
    // redirectIfNotLoggedin();
    session_destroy();
    header('views/frontend/login.php'); // redirect to frontend
    exit();
}

function profile()
{
    redirectIfNotLoggedin();
    require('views/backend/profile.php');
}
