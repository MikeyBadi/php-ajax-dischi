<?php

  include __DIR__ . '../../disc_db.php'; 

  header('Content-Type: application/json');

  echo json_encode($discs_db);
?>