<?php

//file_put_contents(time().".txt", $_SERVER);

echo file_get_contents($_SERVER["REQUEST_URI"], false, stream_context_create([
    'http' => [
        'method' => 'GET',
        'request_fulluri' => true,
        'proxy' => 'tcp://l-proxy.aichi-c.ed.jp:8080',
        'timeout' => 10,
    ]
]));