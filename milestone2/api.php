<?php

  include __DIR__ . '../../disc_db.php'; 

  $filteredSong=[];
  $request= $_GET['genChosen'];

  if(empty($request)){
    $filteredSong = $discs_db;
  }else{
    foreach($discs_db as $disc){
      if($disc['genre']=== $request){
        $filteredSong[] = $disc;
      }
    }
  }

  header('Content-Type: application/json');

  echo json_encode($filteredSong);
?>