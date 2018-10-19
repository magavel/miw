<?php
/**
 * Created by PhpStorm.
 * User: MIW
 * Date: 09/10/2018
 * Time: 11:18
 */


/*
1/ Sur l'index afficher dans un tableau tous les pays en base, afficher le nom, la population et le nombre de villes.
**Le tableau devra être triable sur les trois colonnes, dans l'ordre croissant/décroissant**
Un lien sur le nom du pays enverra sur le détail du pays avec toutes les infos en base et un tableau des 10 villes les plus peuplée.

*/


try{
    $bdd = new PDO(
        'mysql:host=localhost;dbname=miw;charset=utf8',
        'root',
        '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING)
    );
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}


if(!empty($_GET['pays']))
   $pays=$_GET['pays'];

if(isset($pays)){

    $infoPays = $bdd->prepare('select name, continent, governmentform, surfacearea
from country
where code=:pays');
    $infoPays->execute( array('pays'=>$pays));
    while ($row=$infoPays->fetch()){
        echo '  <h1>Pays choisi: '.$row['name'].'</h1>
                <h2>Infos de base</h2>
                <p>Continent: '.$row['continent'].'</p>
                <p>Gouvernement: '.$row['governmentform'].'</p>
                <p>Surface du pays: '.$row['surfacearea'].'</p>';
    }

    $listeVilles = $bdd->prepare('select city.name as nameCity
        from country as country
        inner join city as city on country.code = city.countrycode
where country.code=:pays
order by city.population desc limit 0,10');
    $listeVilles->execute( array('pays'=>$pays));





    echo '<table>';
    echo '<h2>liste des villes</h2>';

    while ($row=$listeVilles->fetch()){

        echo '<tr><td>'.$row['nameCity'].'</td></tr>';
    }
    echo '</table><br><br>';
    $listeVilles->closeCursor();
}



    echo '<h1>Liste des pays</h1><table>';

    if(empty($_GET["tri_name"]) || $_GET["tri_name"]=="DESC")
        $tri_name="ASC";
    else
        $tri_name="DESC";

    if(empty($_GET["tri_pop"]) || $_GET["tri_pop"]=="DESC")
        $tri_pop="ASC";
    else
        $tri_pop="DESC";

    if(empty($_GET["tri_ville"]) || $_GET["tri_ville"]=="DESC")
        $tri_ville="ASC";
    else
        $tri_ville="DESC";




?>

    <thead>
    <tr>
        <th><a href="?tri_name=<?php echo $tri_name;?>">Name</a></th>
        <th><a href="?tri_pop=<?php echo $tri_pop;?>">Population</a></th>
        <th><a href="?tri_ville=<?php echo $tri_ville;?>">Nb Villes</a></th>
    </tr>
    </thead>

    <tbody>
<?php


$nbrePays = $bdd->prepare('select count(country.code) as nbrPays from country');
$nbrePays->execute();

$row = $nbrePays->fetch();
    $nbrPays=$row['nbrPays'];
    var_dump($nbrPays);






if(!empty($_POST['ASC']))
    $trisAsc=$_POST['ASC'];

$requete='select country.code as codePays, country.name as name, country.population as population, count(city.name) as nbreVille
                from country as country
                inner join city as city on country.code = city.countrycode
                group by country.code
                order by ';


if(!empty($_GET["tri_name"])){
    $requete.=' name '.$_GET["tri_name"];
    $variableTri='tri_name='.$_GET["tri_name"];
    }
else if (!empty($_GET["tri_pop"])){
    $requete.=' population '.$_GET["tri_pop"];
    $variableTri='tri_pop='.$_GET["tri_pop"];
    }
else if (!empty($_GET["tri_ville"])){
    $requete.=' nbreVille '.$_GET["tri_ville"];
    $variableTri='tri_ville='.$_GET["tri_ville"];
    }

if(isset($_GET['page'])){
    var_dump($_GET['page']);
}



$req=$bdd->prepare($requete);

$req ->execute();


while ($row = $req->fetch()) {


    echo '<tr> 
                
            <td>pays: <a href="pays.php?pays='.$row['codePays'].'&'.$variableTri.'">'.$row['name'] .'</a></td>
            <td>'.' population: '.$row['population'].' </td>    
        <td>Nbre de villes: '.$row['nbreVille'].'</td>
        </tr>';
}


?>

</tbody>

<?php $req->closeCursor();?>