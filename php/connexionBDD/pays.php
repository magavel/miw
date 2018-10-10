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



$pays=$_GET['pays'];

if(isset($pays)){

    $infoPays = $bdd->prepare('select name, continent, governmentform, surfacearea
from country
where code=:pays');
    $infoPays->execute( array('pays'=>$pays));
    while ($row=$infoPays->fetch()){
        echo '<h1>Pays choisi: '.$row['name'].'</h1>';
        echo '<p>Continent: '.$row['continent'].'</p>';
        echo '<p>Gouvernement: '.$row['governmentform'].'</p>';
        echo '<p>Surface du pays: '.$row['surfacearea'].'</p>';

    }

    $listeVilles = $bdd->prepare('select city.name as name
        from country as country
        inner join city as city on country.code = city.countrycode
where country.code=:pays
order by city.population desc limit 0,10');
    $listeVilles->execute( array('pays'=>$pays));
    echo '<table>';
    echo '<h2>liste des villes</h2>';

    while ($row=$listeVilles->fetch()){

        echo '<tr><td>'.$row['name'].'</td></tr>';
    }
    echo '</table><br><br>';
}

?>


<form method="post" action="pays.php">
    <input type='submit' name='ASC' value='Tri ascendant'/>
    <input type='submit' name='DESC' value='Tri descendant'/>
</form>

<?php
$trisAsc=$_POST['ASC'];

$requete='select country.code as codePays, country.name as name, country.population as population, count(city.name) as nbreVille
                from country as country
                inner join city as city on country.code = city.countrycode
                group by country.code';
$tri= ' country.name';

//$ordreTri=trier;

if(isset($_POST['ASC'])&&!empty($_POST['ASC'])){
    $requete.=' ORDER BY '.$tri;

}if (isset($_POST['DESC'])&&!empty($_POST['DESC'])){
    $requete.= ' ORDER by '.$tri.' DESC';
}else{
    $requete=$requete;
}

$req=$bdd->prepare($requete);

$req ->execute();

echo '<table>';
while ($row = $req->fetch()) {

    echo '<tr> <td>pays: ';
    echo '<a href="pays.php?pays='.$row['codePays'].'">'.$row['name'] .'</a></td><td>'.' population: '.$row['population'].' </td><td>Nbre de villes: '.$row['nbreVille'].'</td></tr>';
}
echo '</table>';







$res->closeCursor();