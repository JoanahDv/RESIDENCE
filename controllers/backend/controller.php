<?php

require('models/backend/userManager.php');
require('models/backend/contactManager.php');

function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=userlogin.php'); // redirect
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

function favorites()
{
    redirectIfNotLoggedin();

    require('views/backend/favorite.php');
}
function dashboard()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
     
    $contactManager = new ContactManagerBackend();
    $contacts = $contactManager->getContacts();
    // $numberOfPages = $chapterManager->getChapterManagerPagination();
    require('views/backend/dashboard.php');
}
function contactList()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
    $contactManager = new contactManagerBackend();
    $contacts = $contactManager->getContacts();
    require('views/backend/contactList.php');
}
function settings($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $userManager = new userManagerBackend();
        $username = $post_parameters['uname'];
        $password = $post_parameters['psw'];
        $email = $post_parameters['email'];
        $userManager->editUser($username, $email, $password, $_SESSION["id"]); // for password u use edit password
        $successMessage = "your edit has been saved.";
    }
    $userManager = new userManagerBackend();
    // get user after saving modifications
    $user = $userManager->getUser($_SESSION["id"]);
    require('views/backend/settings.php');
}
