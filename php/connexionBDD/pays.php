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
    echo $pays;
    $listeVilles = $bdd->prepare('select city.name as name
        from country as country
        inner join city as city on country.code = city.countrycode
where country.code=:pays
order by city.population desc limit 0,10');
    $listeVilles->execute( array('pays'=>$pays));
    echo '<table>';
    echo '<br>liste des villes<br>';
    while ($row=$listeVilles->fetch()){

        echo '<tr><td>'.$row['name'].'</td></tr>';
    }
    echo '</table>';
}







$ordre = 'ASC';
$req = $bdd ->prepare ('select country.code as codePays, country.name as name, country.population as population, count(city.name) as nbreVille 
                from country as country 
                inner join city as city on country.code = city.countrycode
                group by country.code 
                order by :ordre');

$req ->bindValue('ordre', $ordre, PDO::PARAM_STR);
$req ->execute(array('ordre'=>$ordre));

echo '<table>';
while ($row = $req->fetch()) {
    echo '<tr> <td>pays: ';
    echo '<a href="pays.php?pays='.$row['codePays'].'">'.$row['name'] .'</a></td><td>'.' population: '.$row['population'].' </td><td>Nbre de villes: '.$row['nbreVille'].'</td></tr>';
}
echo '</table>';







$res->closeCursor();