<!-- <?php
  // require('models/connect.php');

  // class StationManager
  // {
  //     public function getStations(
        //$name, -->
        //$city,
  //       $minTravelTime, 
  //       $maxTravelTime,
  //       $seaside, 
  //       $mountain, 
  //       $countryside,
  //       $park,
  //       $lake, 
  //       $fibre
  //     ) {
  //         global $db;
  //         $query = 'SELECT * FROM station';

  //         // add filters
  //         $filters = array();
  //         $filter_values = array();
          
  //         //if ($name){
  //           //$filters[]="stationName = true";
  //         //}
  //         //if ($city){
  //           //$filters[]="cityName = true";
  //         //}

  //         if ($minTravelTime) {
  //           $filters[] = "travelTime > ?";
  //           $filter_values[] = $minTravelTime;
  //         }

  //         if ($maxTravelTime) {
  //           $filters[] = "travelTime < ?";
  //           $filter_values[] = $maxTravelTime;
  //         }
          
  //         if ($mountain){
  //           $filters[] = "hasMountains = true";
  //           $filter_values[] =$mountain;
  //         }
  //         if ($lake){
  //           $filters[] = "hasLake = ?";
  //           $filter_values[] =$lake;
  //         }
  //         if ($seaside){
  //           $filters[] = "hasCoastline = true";
  //         }
  //         if ($park){
  //           $filters[] = "hasPark = ?";
  //           $filter_values[] =$park;
  //         }
  //         if ($countryside){
  //           $filters[] = "hasCountryside = ?";
  //           $filter_values[] =$countryside;
  //         }
  //         if ($fibre){
  //           $filters[] = "hasFibre = true";
  //           $filter_values[] =$fibre;
  //         }

  //         if ($filters) {
  //           $filters_string = implode(" AND ", $filters);
  //           $query = $query . " WHERE " . $filters_string;
  //         }

  //         $sql = $db->prepare($query);
  //         $sql->execute($filter_values);
  //         $stations = $sql->fetchall(PDO::FETCH_ASSOC);
  //         return $stations;
  //     }
  // }

//