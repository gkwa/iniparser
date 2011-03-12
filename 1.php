<?php

define('BIRD', 'Dodo bird');

$ini  = parse_ini_file("licenses.ini", true);
// print_r($ini_array);

foreach($ini as $key=>$val){
    foreach($val as $key1=>$val){
        echo "$key1:$val\t";
    }
    echo "\n";
}

?>
