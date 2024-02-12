<?php
header('Content-Type:application/json');
$datalist=array();

$datalist={
{0:"名前",1:"個数"},
{0:"potato",1:"5"},
}

echo json_encode($datalist);

?>
