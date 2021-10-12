<?php
    require('models/connect.php');
    
     class ContactManagerBackend
    {
         public function getContact()
        {
            // use global $conn object in function
            global $db;
            $req = $db->prepare('
            SELECT *
            FROM contact
            WHERE id =?');
            $req->execute();
            $contact =$req ->fetchAll();
            $req->closeCursor();
            return $contact;
        }
    
         public function getContacts()
         {
              global $db;
             $req = $db->prepare('
                 SELECT *
                 FROM contact
             ');
             $result = $req->execute();
             $contacts = $req->fetchall();
             $req->closeCursor();
             return $contacts;
         }
         
         public function deleteContact($id)
         {
             global $db;
             $sql = $db->prepare('DELETE FROM contact WHERE id = ?');
             $result = $sql->execute(array($id));
             return $result;
         }
    }
