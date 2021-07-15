<?php
    require('models/connect.php');
     class ContactManagerBackend
    {
       
        public function getContact($id)
        {
            // use global $conn object in function
            global $db;
            $req = $db->prepare('
            SELECT *
            FROM contact');
            $req->execute();
            $contact =$req ->fetchAll();
            $req->closeCursor();
            return $contact;
        }

        public function getContacts(){
            global $db;
            $req = $db->prepare('
          SELECT *
          FROM contact');
            $req->execute();
            $contacts = $req->fetchAll();
            $req->closeCursor();
            return $contacts;
    
         }
    }
    ?>