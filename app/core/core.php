<?php

$request['METHOD'] = $_SERVER['REQUEST_METHOD'];
$request['PATH'] = explode('?', str_replace(BASE_URL, '', $_SERVER['REQUEST_URI']))[0];
