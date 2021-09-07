<?php
require('models/connect.php');

class FavoriteManagerBackend
{
    public function addFavourite($user_id, $station_id, $station_name,$travel_time,$city_name)
    {
        global $db; // defined in models/connect.php
        $query = $db->prepare('
            INSERT INTO favorites(user_id, station_id, station_name, travel_time, city_name)
            VALUES(?,?,?,?)
          ');
        $result = $query->execute(array($user_id, $station_id, $station_name,$travel_time,$city_name));
    }

    public function getFavorite()
    {
        global $db;
        $req = $db->prepare('
          SELECT *  
          FROM favorite');
        $req->execute();
        $favorite = $req->fetchAll();
        $req->closeCursor();
        return $favorite;
    
    }

    public function deleteFavorite($id)
    {
        global $db;
        $sql = $db->prepare('DELETE FROM favorite WHERE id = ?');
        $affectedLines = $sql->execute(array($id));
    }
}
