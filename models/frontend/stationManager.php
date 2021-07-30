<?php
  require('models/connect.php');

  class StationManager
  {
      public function getStations($minTravelTime, $maxTravelTime)
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