<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$timeout = isset($_GET['timeout']) ? $_GET['timeout'] : 0;

sleep($timeout);

echo json_encode([
    'timeout' => $timeout
]);