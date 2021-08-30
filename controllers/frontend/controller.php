<?php

require('models/frontend/LoginManager.php');
require('models/frontend/contactManager.php');
require('models/frontend/stationManager.php');
 
function contact($post_parameters)
    {
        if (!empty($post_parameters)) {  // if form is submitted
            $contactManager = new contactUs();
            $contactManager->sendMessage(
                htmlspecialchars($post_parameters['firstname']),
                htmlspecialchars($post_parameters['lastname']),
                htmlspecialchars($post_parameters['email']),
                htmlspecialchars($post_parameters['subject']),
                htmlspecialchars($post_parameters['messagebox'])

            );
            echo 'ok';
            die();
        }
        
    require('views/frontend/contact.php');
}

function welcome()
{   
    // $chapterManager = new ChapterManagerFrontend();
     require('views/frontend/welcome.php');
   
}


function userLogin($post_parameters)
{
    if (!empty($post_parameters)) {   // if form is submitted
        $LoginManager = new LoginManagerFrontend();

        $username = $post_parameters['uname'];
        $password = $post_parameters['psw'];

        $user = $LoginManager->getUser($username, $password);
        if ($user) {
            session_start();
            $_SESSION['loggedin'] = True;
            header('Location:/index.php?action=app'); // redirect the app
            exit();
        } else {
            $message = "Username and Password is incorrect";
        }
    }
    require('views/frontend/userlogin.php');
}



function adminlogin($post_parameters)
{
    if (!empty($post_parameters)) {   // if form is submitted
        $LoginManager = new LoginManagerFrontend();

        $username = $post_parameters['uname'];
        $password = $post_parameters['psw'];

        $user = $LoginManager->getUser($username, $password, true);
        if ($user) {
            session_start();
            $_SESSION['loggedin'] = True;
            header('Location:/index.php?action=dashboard'); // redirect backend
            exit();
        } else {
            $message = "Username and Password is incorrect";
        }
    }
    require('views/frontend/adminlogin.php');
}
function userSignUp($post_parameters){
    if (!empty($post_parameters)) {   // if form is submitted
        $LoginManager = new LoginManagerFrontend();

        $username = $post_parameters['uname'];
        $email= $post_parameters['email'];
        $password = $post_parameters['psw'];


        $user = $LoginManager->createUser($username, $password,$email);
        if ($user) {
            header('Location:/index.php?action=userlogin'); // redirect to login
            exit();
        } else {
            $message = "Unexpected problem occured";
        }
    }
    require('views/frontend/usersignup.php');
}


