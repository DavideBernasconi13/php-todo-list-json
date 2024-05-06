<?php
$content = file_get_contents('data.json');
//var_dump($content);
$todolist = json_decode($content, true);
$print = json_encode($todolist);
//echo $print;
echo $print;



header('Content-type: application/json');
