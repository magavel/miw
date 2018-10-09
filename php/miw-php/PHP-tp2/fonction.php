<?php
/**
 * Created by PhpStorm.
 * User: avel feron
 * Date: 02/10/2018
 * Time: 10:07
 */
/**
 * fct qui retourne un tableau
 */
function getData(){

    $tab=array(
        '404'=> array(
            'title'=>'ERROR 404',
            'content'=>'contenu de la page 404 : page not found'
        ),
        'test'=> array(
            'title'=>'Ma page de test',
            'content'=> '<h1>Ma page de test</h1><p>Le contenu de ma page de test</p>'
        ),
        'accueil'=> array(
            'title'=>'Ma page de d\'accueil',
            'content'=> '<h1>Ma page d\'accueil</h1><p>Le contenu de ma page</p>'
        ),
        'photo'=> array(
            'title'=>'Mon diaporama',
            'content'=> '<h1>Ma page avec plein de photos</h1><p>Les photos</p>'
        ),
        'presentation'=> array(
            'title'=>'Ma page de de présentation',
            'content'=> '<h1>Ma page de présentatin</h1><p>Le contenu de ma page de présentation</p>'
        ),
    );
    return $tab;

}
/**
 * fonction qui retourne le titre de la page
 * @param $page
 * @return mixed
 */
function getTitle($page){

    $tab=getData();
    if(isset($tab[$page])){
        return $tab[$page]['title'];

    }
    else
        return $tab['404']['title'];
}

/**
 * fonction qui retourne le contenu de la page
 * @param $page
 * @return mixed
 */
function getContent($page){
    $tab=getData();
    if(isset($tab[$page])){
        return $tab[$page]['content'];
    }
    else
        return $tab['404']['content'];
}
