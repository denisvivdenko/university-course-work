<?php

header('Content-Type: text/plain');
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    echo 'This is a GET request.';
} elseif ($method === 'POST') {
    $data = $_POST['data'] ?? '';
    echo 'This is a POST request. Received data: ' . $data;
} else {
    echo 'Unsupported request method.';
}
?>