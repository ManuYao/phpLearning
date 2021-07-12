<?php
echo str_repeat("-=", 10);
$mots = readline('entrée mots : ');
$insulte = ["merde", "con"];
$asterisque = [];
foreach($insulte as $insultes){
    $asterisque[] = substr($insultes, 0, 1) . str_repeat("*", strlen($insultes) -1);
}
$maj = strtoupper($mots);
if($maj > tr){
    echo "Votre mots contient des majs IMPOSSIBLE ";
}

echo $mots;

/*
$insultes = ['con', 'nique'];
$mots = readline('entrée mots : ');
foreach($insultes as $insulte){
    $replacee = str_repeat("*", strlen($insulte));
    $mots = str_replace($insultes, $replacee, $mots);
}  
echo $mots;


$note = [10,20,13];
$addNote = array_sum($note);
$contTab = count($note);
echo ("Voici la moyen " .round($addNote / $contTab) . ' / 20' );

$player = readline('Voyon voir ! : ');
$reverse = strrev (lcfirst ($player));
if(lcfirst($player) == $reverse ){
    echo "----------------";
    echo lcfirst ($reverse);
    echo "----------------";
}else {
    echo "votre mots n'est pas valide" . "\n" . "celà donne actuellement {$reverse}" ;
}*/
