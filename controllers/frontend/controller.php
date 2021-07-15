<?php

require('models/frontend/postManager.php');
require('models/frontend/LoginManager.php');
require('models/frontend/contactManager.php');
require('models/frontend/commentManager.php');
 
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

function app(){
    require('views/frontend/app.php');
}
function userSignUp(){
    require('views/frontend/usersignup.php');
}
function userLogin(){
    require('views/frontend/userlogin.php');
}
  


 