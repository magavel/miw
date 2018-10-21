<?php
/**
 * Created by PhpStorm.
 * User: avelferonpapel
 * Date: 10/10/2018
 * Time: 09:19
 */




 try{
     $bdd= new PDO(
         'mysql:host=localhost;dbname=miw;charset=utf8',
         'root',
         'root',
         array(PDO::ATTR_ERRMODE=>PDO::ATTR_ERRMODE_WARNING)
     );
 }catch(Exception $e){
     die('Erreur: '.$e->getMessage));
 }