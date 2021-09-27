<?php
require('models/connect.php');

function redirectIfNotLoggedin()
{
    session_start();
    if ($_SESSION['loggedin'] != true) { // if logged in is not true
        header('Location:/index.php?action=userlogin.php'); // redirect
        exit();
    }
}

class FavoriteManagerBackend
{
    public function addFavourite($user_id, $station_id, $station_name,$travel_time,$city_name)
    {
        global $db; // defined in models/connect.php
        $query = $db->prepare('
            INSERT INTO favorites(user_id, station_id, station_name, travel_time, city_name)
            VALUES(?,?,?,?,?)
          ');
        $result = $query->execute(array($user_id, $station_id, $station_name,$travel_time,$city_name));
        return $result;
    }

    public function getFavorite($user_id)
    {
        global $db;
        $req = $db->prepare('
          SELECT *  
          FROM favorites
          WHERE user_id = ?');
        $req->execute(array($user_id));
        $favorite = $req->fetchAll();
        $req->closeCursor();
        return $favorite;
    
    }

    public function deleteFavorite($id)
    {
        redirectIfNotLoggedin();
        global $db;
        $sql = $db->prepare('DELETE FROM favorites WHERE id = ?');
        $result = $sql->execute(array($id));
        return $result;
    }
}
