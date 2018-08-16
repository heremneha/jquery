<?php 
$response=array('Roman' => 1,
    'Arabic' => 2
  );
echo json_encode($neha);

$response['Roman'] = 1;
$response['Arabic'] = 2;
echo json_encode($response);

?>