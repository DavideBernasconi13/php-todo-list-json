<?php
$content = file_get_contents('data.json');
$todolist = json_decode($content, true);
var_dump($todolist);
var_dump($content);



//var_dump($todolist);
