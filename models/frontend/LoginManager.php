<?php
require('models/connect.php');

class LoginManagerFrontend
{
    public function getUser($username, $password)
    {
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM user
            WHERE username = ?
            LIMIT 1
        ');
        $req->execute(array($username));
        $result = $req->fetch(); // fetch result
        $req->closeCursor();
        $is_password_right = password_verify($password, $result["password"]);
        if (!$is_password_right) {
            return false;
        }
        return $result;
    }  

    public function getUsers($username, $password)
    {
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM users
            WHERE username = ?
            LIMIT 1
        ');
        $req->execute(array($username));
        $result = $req->fetch(); // fetch result
        $req->closeCursor();
        $is_password_right = password_verify($password, $result["password"]);
        if (!$is_password_right) {
            return false;
        }
        return $result;
    }  
    
    
}
?>
