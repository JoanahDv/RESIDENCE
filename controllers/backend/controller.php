<?php

require('models/backend/userManager.php');
require('models/backend/contactManager.php');
require('models/backend/favoriteManager.php');

// ENSURE THE SECUTIRY OF THE WEBSITE 
function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=userlogin'); // redirect
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
    // clean up session
    session_start();
    unset($_SESSION['loggedin']);
    unset($_SESSION['id']);
    header('Location:/index.php');
    exit();
}
// ADDING  TO FAVORITES 
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
function favorites($page)
{
    redirectIfNotLoggedin();
    $favoriteManager = new FavoriteManagerBackend();
    $favorites = $favoriteManager->getFavorites($page, $_SESSION["id"]); // get fav
    $numberOfPages = $favoriteManager->getFavoritePagination($_SESSION['id']); // get page numbers

    require('views/backend/favorite.php');
}

// DELETING FAVORITES FROM THE LIST AND DB
function deleteFavorite($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $favoriteManager = new FavoriteManagerBackend();
        $favoriteId = $post_parameters['id'];
        $result = $favoriteManager->deleteFavorite($favoriteId);
        header('Location:/index.php?action=favorite&page'); // redirect to favorites page
        exit();
    }
}
// DELETING CONTACT FROM THE LIST AND FROM DB
function deleteContact($post_parameters)
{
    redirectIfNotLoggedin();
    if (!empty($post_parameters)) {  // if form is submitted
        $contactManager = new ContactManagerBackend();
        $contactId = $post_parameters['id'];
        $result = $contactManager->deleteContact($contactId);
        header('Location:/index.php?action=dashboard'); // redirect to favorites page
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
    require('views/backend/passwordEditPage.php');
}

function dashboard($id)
{
    redirectIfNotLoggedin(); // call function to redirect to login page in not logged in

    $contactManager = new ContactManagerBackend();
    $contacts = $contactManager->getContacts();
    $adminPage = true;
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
        $userManager->editUser($username, $password, $_SESSION["id"]); // for password u use edit password
        $successMessage = "your edit has been saved.";
        $userManager->editPassword($username, $password, $_SESSION["id"]); // for password u use edit password
        $successMessage = "your Password has been saved.";
    }
    $userManager = new userManagerBackend();
    // get user after saving modifications
    $user = $userManager->getUser($_SESSION["id"]);
    require('views/backend/settings.php');
}
