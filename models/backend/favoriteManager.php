<?php

require('models/connect.php');

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
          WHERE user_id = ?
          ORDER BY travel_time');
        $req->execute(array($user_id));
        $favorite = $req->fetchAll();
        $req->closeCursor();
        return $favorite;
    
    }
    public function getFavorites($pageNumber, $user_id)
    {
        $favoritesPerPage = 6;
        $offset = $favoritesPerPage * $pageNumber - $favoritesPerPage; // 
        global $db;
        $req = $db->prepare('
            SELECT *
            FROM favorites 
            WHERE user_id = ?
            ORDER BY travel_time 
            LIMIT ' . $offset . ', ' . $favoritesPerPage);
        $req->execute(array($user_id));
        $result = $req->fetchall();
        $req->closeCursor();
        return $result;
    }

    public function getFavoritePagination($user_id)
    {
        global $db;
        // count all favs
        $req = $db->prepare('
            SELECT COUNT(*)
            FROM favorites
            WHERE user_id = ?
        ');
        $req->execute(array($user_id));
        $numberOfFavorites = $req->fetch()[0]; // fetch result
        $numberOfPages = ceil ($numberOfFavorites/6);
        return $numberOfPages;
    }

    public function deleteFavorite($id)
    {
        global $db;
        $sql = $db->prepare('DELETE FROM favorites WHERE id = ?');
        $result = $sql->execute(array($id));
        return $result;
    }
}