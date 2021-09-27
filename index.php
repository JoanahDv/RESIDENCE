<?php

require('configuration/config.php');
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');
// require('controllers/frontend/login.php');



if (isset($_GET['action'])) {

    if ($_GET['action'] == 'contact') {
        contact($_POST);
    } elseif ($_GET['action'] == 'app') {
        app($_POST);
    } elseif ($_GET['action'] == 'adminlogin') {
        adminlogin($_POST);
    } elseif ($_GET['action'] == 'userlogin') {
        userlogin($_POST);
    } elseif ($_GET['action'] == 'usersignup') {
        usersignup($_POST);
    }elseif ($_GET['action'] == 'settings') {
        settings($_POST);
    }elseif ($_GET['action'] == 'dashboard') {
        dashboard($_POST);
    }elseif ($_GET['action'] == 'favorite') {
        favorite($_POST);
    }elseif ($_GET['action'] == 'add_favorite') {
        addFavorite($_POST);
    }elseif ($_GET['action'] == 'deleteFavorite') {
        deleteFavorite($_POST);
    } elseif ($_GET['action'] == 'contactList') {
        contactList();
    } elseif ($_GET['action'] == 'logout') {
        logout();
    
    }
} else { // no action is set
    welcome(); // default to welcome page
}
