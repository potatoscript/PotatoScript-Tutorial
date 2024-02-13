<?php
header('Content-Type:application/json');

$datalist=[
  ["名前","個数"],
  ["potato","5"],
  ["apple","10"]
];

echo json_encode($datalist);

?>
