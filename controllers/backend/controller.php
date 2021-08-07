<?php

// require('models/frontend/stationManager.php');

function app(){
    require('views/backend/app.php');
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

function logout()
{
    // redirectIfNotLoggedin();
    session_destroy();
    header('Location:/index.php?action=login'); // redirect to frontend
    exit();
}
 ?>