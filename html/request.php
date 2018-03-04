<?php
$file = fopen("request.json","a");

$json = $_POST['json'];

$jsonDecode = json_decode($json);

fwrite($file, json_encode($jsonDecode, JSON_PRETTY_PRINT));
fclose($file);

?>