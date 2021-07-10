<?php 
$section = (int)readline('Entrée votre selection : ');{
    if($section === 1){
        echo "Attaque -> Type -> ? ";
    }elseif($section === 2 ){
        echo "Défend -> Type -> ? ";
    }
    else {
        echo "passe sont tour -> Type -> ? ";
    }
}

$choix = (int) readline('feu : 4 - bouclier : 5 - eau : 6');{
    switch ($choix) {
        case 4 :
            echo "Vous avez choisi un café";
            break;
            
        case 5 : 
            echo "Vous avez choisi un chocolat";
            break;

        case 6 : 
            echo "Vous avez choisi un Gateau";
            break;

        default :
            "Je ne comprend pas votre selection";
            break;
        }
    }
        

