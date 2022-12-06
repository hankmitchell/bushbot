<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain; charset=utf-8");
extract($_GET);
extract($_POST);
//error_reporting(E_ALL);
date_default_timezone_set('America/New_York');
$timestamp = date('Y-m-d--') . date('H-i-s');
if ($url) {
    echo "<!--$url-->\n\n\n\n";
    exit(file_get_contents($url));
}
echo (file_get_contents("../$id"));
