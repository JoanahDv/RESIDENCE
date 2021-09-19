<?php

require('models/backend/userManager.php');
require('models/backend/contactManager.php');
require('models/backend/favoriteManager.php');

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
    require('views/backend/app.php');

}

function addFavorite($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $favoriteManager = new FavoriteManagerBackend();
        $stationId = $post_parameters['stationId'];
        $userId = $_SESSION['id'];
        $stationName = $post_parameters['stationName'];
        $travelTime = $post_parameters['travelTime'];
        $cityName = $post_parameters['cityName'];
        $result = $favoriteManager->addFavourite(
            $_SESSION["id"],
            $stationId,
            $stationName,
            $travelTime,
            $cityName
        );
        if ($result) {
            echo "Favourite station added.";
        } else {
            echo "Problem adding station to your favourites.";
        }
        exit;
    }
}

function deleteFavorite($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $favoriteManager = new FavoriteManagerBackend();
        $favoriteId = $post_parameters['id'];
        $result = $favoriteManager->deleteFavorite($favoriteId);
        header('Location:/index.php?action=favorite'); // redirect to favorites page
        exit();
    }
}

function profileEdit()
{
    redirectIfNotLoggedin();
    require('views/backend/profileEdit.php');
}

function passwordEdit()
{
    redirectIfNotLoggedin();
    require('views/backend/profileEdit.php');
}
function favorite()
{
    redirectIfNotLoggedin();
    $favoriteManager = new favoriteManagerBackend();
    $favorites = $favoriteManager->getFavorite();
    require('views/backend/favoritePage.php');
}
function dashboard()
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in
    
    $contactManager = new ContactManagerBackend();
    $contacts = $contactManager->getContacts();
    require('views/backend/dashboard.php');
}
function contactList()
{
    redirectIfNotLoggedin();
    $contactManager = new contactManagerBackend();
    $contacts = $contactManager->getContacts();
    require('views/backend/contactPage.php');
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
