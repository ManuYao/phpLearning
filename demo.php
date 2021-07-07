<?php 
$classe = [
    [
    "name" => 'Michel',
    "surname" => 'popo',
    'notes' =>[14,13,18]
],
    [
        "name" => 'Pierre',
        "surname" => 'popo',
        'notes' =>[14,13,17]
        ]
    ];

    echo 'Bonjour' ." ". $classe[0]['name']. " " .'vous avez' . " " .$classe[0]['notes'][2] ." " . '^^';
        

