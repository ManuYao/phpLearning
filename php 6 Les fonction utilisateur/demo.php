<?php
declare(strict_type=1); // Forcer à utiliser les bons paramètre d'une fonction définie 

function theEnd (string $quesion):boolean{ // Cette fonction return un true or false 
    while($mots != true || $mots != false){
        $mots = readline ($quesion . "Oui = o / Non = n : ");
        if($mots === 'o'){
            return true;
        }elseif($mots === 'n') {
            return false;
        }else {
            echo 'Je ne comprend pas ! | ';
        }
    } 
}
function demanderCreneau (string $creneau = 'Votre horaire'):array{
    echo $creneau . "\n" ;
    if($creneau == null){
        return 'Quel sont vos horaire ? : ' . "\n";
    }
    while (true){
        $hr1 = (int)readline ("Quel sont les horaire d'ouverture ? : ");
        if($hr1 >= 0 && $hr1 <= 23){
            break;
        }
    }
    while (true){
        $hr2 = (int)readline ("Quel sont les horaire de fermeture ? : "); 
        if($hr2 >=0 && $hr2 <= 23 && $hr2 > $hr1){
            break;
        }
    }
    return [$hr1, $hr2];
}
function listCreneau (string $listCreneau = 'Votre horaire'):?array{
    $hr = [];
    $continuer = true;
    while ($continuer){
        $hr[] = demanderCreneau();
        $continuer = theEnd('Tu veut quitez ? : ');
    } 
    foreach($hr as $k => $heur){
        echo $k;
    }
    return $hr;

}
$testF = listCreneau ();
var_dump ($testF);
//$maFonction = theEnd("Voulez vous quitté | o/n :");
//var_dump($maFonction);
/*
function ac ($name = null){
    if($name === null){
        return "Salut, tu n'a pas de nom ";
    }else 
        return 'Bonjour ' . $name ;
}

$bjr = ac();
echo $bjr;
*/