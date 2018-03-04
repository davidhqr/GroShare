<?php
$string = file_get_contents("request.json");
$arr = json_decode($string, true);
$json = json_encode($arr);
print_r($arr[0][0]);
echo $arr;

?>