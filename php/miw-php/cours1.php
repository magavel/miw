<?php
/**
 * Created by PhpStorm.
 * User: avelferonpapel
 * Date: 25/09/2018
 * Time: 11:30
 */
//tp nmr 1

//question 1

$nom = 'FERON';
$prenom = 'Avel';

define('AGE', '45');


//question 2
echo 'question 2 <br>';

echo 'Je m\'apppelle: '.$prenom.' '.$nom.'<br>';
echo 'J\'ai: '.AGE. 'ans <br>';



//question 3

echo '<br><br>Question number 3  <br> ';

$nbrAleatoire = rand(0,100);

if($nbrAleatoire<AGE){
    echo 'le nbre aleatoire '.$nbrAleatoire. ' est plus PETIT que mon grand age';
}else{
    echo 'le nbre aleatoire '. $nbrAleatoire.' est plus GRAND que mon age';
}



///////////////////
//question 4///////
///////////////////

echo '<br><br>Question number 4  <br> ';


function boucleAleatoire(){
    $autreNbreAleatoire = rand(0,100);

    while ($autreNbreAleatoire>AGE){
        echo 'le nbre aleatoire '.$autreNbreAleatoire. ' est plus GRAND que mon grand age<br>';
        $autreNbreAleatoire = rand(0,100);
    }
    for ($i=0;$i<$autreNbreAleatoire; $i++){
        echo '-*-';
    }
    echo '<br>le nbre aleatoire '.$autreNbreAleatoire. ' est ENFIN plus PETIT que mon grand age<br>';

}
boucleAleatoire();







//question 5

echo '<br><br>Question number 5  <br> fonction recursive <br>';




    /**
     * @param $nbrAleatoire
     */
function recursive(){
    $nbre2aleatoire=rand(0,100);
    echo 'le nbre aleatoire est de: '.$nbre2aleatoire;

    if ($nbre2aleatoire>AGE){
        //$nbre2aleatoire = rand(0,100);
        echo '<br> le nbre aleatoire est encore trop grand<br>';
        recursive();
    }else{
        echo '<br> le nbre aléatoire en en dessous de mon age<br>---------------------------------------------<br>';
    }
}



recursive();

////correction de la fonction recursive
///

function randRec($AGE){
    $rand=rand(0,100);

}

//question 6

echo '<br><br>Question number 6  <br><br>';

//$tab = array(4,43,9,15,6,1);

//tab proposé par Romain Lemercier

$tab = array(
    -5=>5,
    2=>6,
    99=>0,
    -4=>10,
    60=>1,
);



/**
 * @param $tab
 */
function somme($tab){
    $sommeTab=0;
    foreach ($tab as $key => $value){
        echo 'les valeurs du tab sont: '.$value.' et l\'index correspondant est: '.$key.'<br>';
        $sommeTab+= $value;
    }

    echo '---------------------------------------------------------------<br>';
    echo 'la somme des nombres de mon tableau est de: '.$sommeTab;
    echo '<br>---------------------------------------------------------------<br><br>';

}
somme($tab);

/**
 * fonction qui fournit la valeur la plus haute
 * @param $tab
 */
function maxValue($tab){
    //$valeurMax=0;
    $valeurMax=null;

    foreach ($tab as $key => $value){
        if ($valeurMax<$value){
            $valeurMax=$value;
        }
    }
    return $valeurMax;
    echo 'la valeur max du tableau est de: '.$valeurMax;
}
maxValue($tab);


/**
 * fonction qui fournit la valeur la plus basse
 * @param $tab
 */
function minValue($tab){
    $valeurMin=1;
    foreach ($tab as $key => $value){
        if($valeurMin>$value){
            $valeurMin=$value;
        }
    }
    echo ' <br>la valeur mini du tableau est de: '.$valeurMin;
    echo '<br>--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*--*<br><br>';

}
minValue($tab);

// index des tableaux

/**
 * fonction qui fournit l'index du plus grand nbre du tab
 * @param $tab
 */
function maxKey($tab){
    $keyMax =0;
    $valeurMax=0;
    foreach ($tab as $key => $value){
        // echo '<br>la key/value est de: '.$key.' / '.$value;
        if ($value>$valeurMax){
            $keyMax=$key;
            $valeurMax= $value;
        }

    }
    echo ' <br>l\'index du nbre le plus grand: '. $keyMax;
}

maxKey($tab);




/**
 * fonction qui l'index du nbre le plus petit du tab
 * @param $tab
 */
function minKey($tab){
    $keyMin = 0;
    $valeurMin=1;
    foreach ($tab as $key => $value){
        if ($value<$valeurMin){
            $keyMin=$key;
            $valeurMin= $value;
        }
    }
    echo ' <br>l\'index du nbre le plus petit est de: '. $keyMin;
}
minKey($tab);
