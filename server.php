<?php
$db_string = file_get_contents('db.json');
$records = json_decode($db_string,true);

if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['poster']) ) {
  $genres = ['pop','Jazz','Rock','Metal'];
  $random_genre = $genres[rand(0, count($genres) - 1)];

  $record =[
    'title'=>$_POST['title'],
    'author'=>$_POST['author'],
    'poster'=> $_POST['poster'],
    'year'=> rand(1980,2024),
    'genre'=> $random_genre,
  ];
  $records[] = $record;
  file_put_contents('db.json',json_encode($records));
}
if (isset($_POST['itemIndex'])) {
  $index = $_POST['itemIndex'];

  if (isset($records[$index])) {
    $foundRecord = $records[$index];
  
    header('Content-Type: application/json');
    echo json_encode($foundRecord);
    exit();
  }
}

header('Content-Type: application/json');
echo json_encode($records);
