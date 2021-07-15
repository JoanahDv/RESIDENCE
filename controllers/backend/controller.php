<?php

// require('models/backend/ChapterManager.php');
// require('models/backend/commentManager.php');
// require('models/backend/contactManager.php');


function adminlogin($post_parameters)
{
    if (!empty($post_parameters)) {   // if form is submitted
        $LoginManager = new LoginManagerFrontend();

        $username = $post_parameters['uname'];
        $password = $post_parameters['psw'];

        $user = $LoginManager->getUser($username, $password);
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
// function userlogin($post_parameters)
// {
//     if (!empty($post_parameters)) {   // if form is submitted
//         $LoginManager = new LoginManagerFrontend();

//         $username = $post_parameters['uname'];
//         $password = $post_parameters['psw'];

//         $user = $LoginManager->getUsers($username, $password);
//         if ($user) {
//             session_start();
//             $_SESSION['loggedin'] = True;
//             // header('Location:/index.php?action=dashboard'); // redirect backend
//             exit();
//         } else {
//             $message = "Username and Password is incorrect";
//         }
//     }
//     require('views/frontend/userlogin.php');
// }
 ?>