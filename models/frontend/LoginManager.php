<?php
require('models/connect.php');

class LoginManagerFrontend
{
    public function getUser($username, $password, $is_admin = false)
    {
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM user
            WHERE username = ?
            AND is_admin = ?
            LIMIT 1
        ');
        $req->execute(array($username, $is_admin));
        $result = $req->fetch(); // fetch result
        if (!$result) {
            return false;
        }
        $req->closeCursor();
        $is_password_right = password_verify($password, $result["password"]);
        if (!$is_password_right) {
            return false;
        }
        return $result;
    }

    public function createUser($username, $email, $password)
    {
        global $db;
        // we could preemptively select user with the same username to
        // inform the user that is trying to sign up that a user with the same
        // username already exists
        $req = $db->prepare('
            INSERT INTO user (username, email, password) VALUES (?,?,?)
        ');
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $result = $req->execute(array($username,$email, $password_hash));  // insert record
        if (!$result) {
            return false;
        }
        return true;
    }
}
?>
