<?php
header('Content-Type:application/json');
$datalist=array();
$data=array();

$data[0]="名前";
$data[1]="個数";
array_push($datalist,$data);

$data[0]="potato";
$data[1]="1";
array_push($datalist,$data);

echo json_encode($datalist);

?>