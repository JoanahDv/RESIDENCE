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
             $user =$req ->fetch();
             $req->closeCursor();
             return $user;
         }
     }
    
    ?>