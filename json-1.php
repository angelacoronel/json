<?php 
include 'config.php';
include 'class.tracks.php';
header('Content-Type: application/json');
$track = new Track();
$list=$track->get_track();
echo "{\"Tracks\":";
echo json_encode($list);
echo "}";
?>
