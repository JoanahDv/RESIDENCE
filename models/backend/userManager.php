<?php
require('models/connect.php');

class UserManagerBackend
{
    public function getUser($id)
    {
        // use global $conn object in function
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM user
            WHERE id = ?');
        $result = $req->execute(array($id));
        $user = $req->fetch();
        $req->closeCursor();
        return $user;
    }

    function editUser($username,$email, $password, $id)
    {
        global $db; // defined in models/connect.php
        $query = $db->prepare('
        UPDATE user
        SET username = ?, $password = ?, $email =?
        WHERE id = ?
      ');
        $result = $query->execute($username, $email, $password, $id);
        return $result;
    }
    
}
