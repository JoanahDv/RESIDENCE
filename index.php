<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('configuration/config.php');
require('controllers/frontend/controller.php');
require('controllers/backend/controller.php');


// require('controllers/frontend/login.php');
if ($_GET['action'] == 'contact') {
    contact($_POST);
} elseif ($_GET['action'] == 'app') {
    app($_POST);
} elseif ($_GET['action'] == 'filter_stations') {
    stations($_POST);
} elseif ($_GET['action'] == 'adminlogin') {
    adminlogin($_POST);
} elseif ($_GET['action'] == 'userlogin') {
    userlogin($_POST);
} elseif ($_GET['action'] == 'usersignup') {
    usersignup($_POST);
} else { // no action is set
    welcome(); // default to welcome page
}
