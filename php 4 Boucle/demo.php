<?php 
/*$nbr = null;
while($nbr != 5){
    $nbr = (int)readline('Entrée votre selection : ');{}

    if($nbr < 5){
        echo "Plus grand que" . ' - ' . $nbr . ' ' ;
    }elseif ($nbr > 5) {
        echo "plus petit que " . ' - ' . $nbr . ' ' ;
    }else {
        echo ' ' ."Okok" . ' ';
    }
}
echo "Bravo \n";

for ($p = 0; $p < 10; $p ++ ){
    echo "- $p \n";
}

$note = [15, 16, 11];
for( $e = 0; $e < 3; $e ++){
    echo "Voici les diférente note" . ' ' . $note[$e] ."\n"; 
}

$eleve = [
    'Bts' => 'Manu',
    'Dut' => 'Yolande'
];
foreach($eleve as $classe => $eleve){
    echo "Voici les différent profile de l'école -> " . $eleve .  ' | '. $classe . "\n";
}

$class = [
    'CE1' => ['Louis', 'Jean', 'Marc'],
    'CE2' => ['Alice', 'Marie']
];
foreach($class as $niv => $listClass){

    echo "\n" . "Voici la classe \n" . $niv . "\n" ;
    foreach($listClass as $class){
        echo $class . "\n";
    }
}
$note  = [];

while(true){
    $action = readline("Merci de bien vouloir entrée vos note : Fin pour Terminer action");{
    }
    if ($action === "fin"){
       break;
    }elseif ($action > 20){
        echo "\n Cette Valeur est inconue \n";
    } else {
        $note[] = (int)$action;
        echo "\n" . "Vous avez entrée "  . ' ' . $action . "/20" . "\n";
    }
}

foreach($note as $list){
    echo "Voici les note entrée " . $list  . "/20" . "\n";
}
*/
$creneaux = [];
while(true){
    echo " \n";
    $heurOn = (int)readline("\n Quel sont voos horaire d'ouverture ? : ");
    echo " ------------\n";
    $heurOff = (int) readline("Quel sont vos horaire de fermeture ? : ");
    if($heurOn >= $heurOff){
        echo "Les heurs ne peuvent êtres saves car l'ouverture est ($heurOn) est supérieur et l'heur de femeture est à ($heurOff)";
    }
    elseif($heurOn > 24 || $heurOff > 24){
        echo "($heurOn) est inconnue !? ou ($heurOff) ";
    }else {
        $creneaux[] = [$heurOn,$heurOff];
        $choix = readline("Voulez vous ajoutez d'autre heur /n Oui = o Non = n ");
        if($choix == "n"){
            break;
        }
    }
}
echo "Le magazin est ouvert de ";
foreach($creneaux as $k => $creneau){
    if ($k >= 1){
        echo " et de ";
    }
    echo "{$creneau[0]} à {$creneau[1]}";
}

/*
$heur = readline("Heur de demande d'ouverture");
$creneauTrueFalse = false ;
    foreach ($creneaux as $creaneau){
        if ($heur >= $creaneau[0] && $heur <= $creaneau[1]){
            $creneauTrueFalse = true;
        } 
    }

    if ($creneauTrueFalse) {
        echo " Le shop est On";
    }else {
        echo " Le shop est off";
    }
*/

    
