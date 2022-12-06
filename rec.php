<?php
extract($_GET);
extract($_POST);
date_default_timezone_set('America/New_York');
$timestamp = date('Y-m-d--') . date('H-i-s');
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain; charset=utf-8");


if($status){
    file_put_contents("status-$t.statuses.json", $status);
}