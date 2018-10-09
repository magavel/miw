<?php

require 'fonction.php';


$donnees=getData();

echo'<div><ul>';
foreach ($donnees as $key =>$value){
    echo '<li><a href="';
    echo 'index.php?page='.$key;
    echo '">';
    echo getTitle($key);
    $corpsPage = getTitle($key);
    echo'</a></li>';
}

echo'</ul></div>';

echo getContent($_GET['page']);

?>



<?php
echo '<BR> <BR> <BR>';
echo 'données envoyées par le formulaire<br>';

echo 'nom: '.$_POST['nom'];
echo '<br>prenom: '.$_POST['prenom'];
echo '<br>message texte: '.$_POST['contenu'];

echo '<br>........'
?>

<form
        action="index.php?page=mapage" method="post">
    <input type="text" name="nom" value="Mon nom"/> <br/>
    <input type="text" name="prenom" value="Mon prénom"/> <br/>
    <textarea name="contenu" id="" cols="30" rows="10">Mon contenu ici</textarea>
    <input type="submit" value="Valider"/>

</form>
