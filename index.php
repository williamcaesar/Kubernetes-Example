<?php

$http = new swoole_http_server("0.0.0.0", 80);
$http->on("start", function ($server) {
    echo "running on port 80";
});

$http->on("request", function ($request, $response) {
    $response->header("Content-type", "text/html");
    $response->end("hello world");
});

$http->start();