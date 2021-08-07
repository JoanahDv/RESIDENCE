<?php
  require('models/connect.php');

  class StationManager
  {
      public function getStations($minTravelTime, $maxTravelTime, $seaside, $mountain, $lake, $park, $countryside, $fibre)
      {
          global $db;
          $query = 'SELECT * FROM station';

          // add filters
          $filters = array();
          $filter_values = array();

          if ($minTravelTime) {
            $filters[] = "travelTime > ?";
            $filter_values[] = $minTravelTime;
          }

          if ($maxTravelTime) {
            $filters[] = "travelTime < ?";
            $filter_values[] = $maxTravelTime;
          }
          
          if ($mountain){
            $filters[] = "hasMountains = ?";
            $filter_values[] =$mountain;
          }
          if ($lake){
            $filters[] = "hasLake = ?";
            $filter_values[] =$lake;
          }
          if ($seaside){
            $filters[] = "hasCoastline = true";
          }
          if ($park){
            $filters[] = "hasPark < ?";
            $filter_values[] =$park;
          }
          if ($countryside){
            $filters[] = "hasCountryside < ?";
            $filter_values[] =$countryside;
          }
          if ($fibre){
            $filters[] = "hasFibre < ?";
            $filter_values[] =$fibre;
          }

          if ($filters) {
            $filters_string = implode(" AND ", $filters);
            $query = $query . " WHERE " . $filters_string;
          }

          $sql = $db->prepare($query);
          $sql->execute($filter_values);
          $stations = $sql->fetchall(PDO::FETCH_ASSOC);
          return $stations;
      }
  }

?>