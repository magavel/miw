<?php
/**
 * Created by PhpStorm.
 * User: avelferonpapel
 * Date: 10/10/2018
 * Time: 09:19
 */



try{
    $bdd =new PDO(
        'mysql:host=localhost;dbname=miw;charset=utf8',
        'root',
        'root'
    );
}catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}


//requete pour recuperer la liste des pays avec le nom du pays, la population, les 10 plus grande ville

$reqSql='select country.name as pays, country.population as pop, count(city.name) as nbreVille
from country
       inner join city on country.code = city.countrycode
group by country.code';

$req = $bdd->prepare($reqSql);
$req->execute();
?>

<table>
<?php
while ($row =$req->fetch()){
    ?>
    <tr><td>
    <?php
    echo $row['pays'].'<td>'.$row['pop'].'</td>'.'<td>'.$row['nbreVille'].'</td>';

    ?>
        </td></tr>

    <?php
}

?>
</table>
