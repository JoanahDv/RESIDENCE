<?php

require('configuration/config.php');
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');
// require('controllers/frontend/login.php');



if (isset($_GET['action'])) {

    if ($_GET['action'] == 'contact') {
        contact($_POST);
        // LE POST EST TRAVAIL DANS JS
        /*-------------APP ----------*/
    } elseif ($_GET['action'] == 'app') {
        app($_POST); 
        /*-------------ABOUT US PAGE ----------*/
    } elseif ($_GET['action'] == 'aboutUs') {
        aboutUs();
        /*-------------ADMIN LOG IN ----------*/
    } elseif ($_GET['action'] == 'adminlogin') {
        adminlogin($_POST);
        /*-------------USER LOGIN- SIGNUP ----------*/
    } elseif ($_GET['action'] == 'userlogin') {
        userlogin($_POST);
    } elseif ($_GET['action'] == 'usersignup') {
        usersignup($_POST);
        /*-------------SETTINGS ----------*/
    } elseif ($_GET['action'] == 'settings') {
        settings($_POST);
        /*-------------DASHBOARD ----------*/
    } elseif ($_GET['action'] == 'dashboard') {
        dashboard($_POST);
    } elseif ($_GET['action'] == 'favorite') {
        favorites($_GET['page']);
    } elseif ($_GET['action'] == 'add_favorite') {
        addFavorite($_POST);
    } elseif ($_GET['action'] == 'deleteFavorite') {
        deleteFavorite($_POST);
    } elseif ($_GET['action'] == 'contactList') {
        contactList();
        /*-------------LOGOUT ----------*/
    } elseif ($_GET['action'] == 'logout') {
        logout();
    }
} else { // no action is set
    welcome(); // default to welcome page
}
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
