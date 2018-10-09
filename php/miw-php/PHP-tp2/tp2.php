<?php
/**
 * Created by PhpStorm.
 * User: MIW
 * Date: 02/10/2018
 * Time: 10:06
 */


var_dump($_GET);
var_dump($_POST);




?>

<form
    action="tp2.php?page=mapage"
    method="post">
    <input type="text" name="prenom" value="Mon prénom"/> <br/>
    <textarea name="contenu" id="" cols="30" rows="10">Mon contenu ici</textarea>
    <input type="submit" value="Valider"/>

</form>
