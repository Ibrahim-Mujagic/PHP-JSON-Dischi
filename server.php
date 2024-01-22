<?php
$db_string = file_get_contents('db.json');
$records = json_decode($db_string);


header('Content-Type: application/json');
echo json_encode($records);
