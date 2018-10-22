<?php
/**
 * Created by PhpStorm.
 * User: avelferonpapel
 * Date: 10/10/2018
 * Time: 09:19
 */




try{
    $bdd = new PDO(
        'mysql:host=localhost;dbname=miw;charset=utf8',
        'root',
        'root',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING)
    );
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

if(isset($_GET['codePays'])){
    $pays = $_GET['codePays'];
    $infoPays = $bdd->prepare('select name, continent, governmentform, surfacearea
                                          from country
                                          where code=:pays');
    $infoPays->execute(array('pays'=>$pays));


    while($row=$infoPays->fetch()){
            echo '
                <h1>'.$row[name].'</h1>
                <p>'.$row[continent].'</p>
                <p>'.$row[governmentform].'</p>
                <p>'.$row[surfacearea].'</p>
            ';
    }
    $infoPays->closeCursor();

    $listeVille=$bdd->prepare('select city.name as listeVille from city
inner join country  on city.countrycode = country.code
where country.code=:pays
order by country.population limit 0,10');

    $listeVille->execute(array('pays'=>$pays));
    echo '<table><h2>Liste des villes</h2>';
    while($row=$listeVille->fetch()){
        echo '<tr><td>'.$row['listeVille'].'</td></tr>';
    }
    echo '</table>';
}







 $nbreVille = 'select country.code as codePays ,country.name as nomPays, country.population as populationPays , count(city.name) as nbreVille
from country
       inner join city on country.code = city.countrycode
group by country.code';

 $req=$bdd->prepare($nbreVille);
 $req->execute();

 echo '<table>
        <tr>
            <th> Pays</th>
            <th> Population</th>
            <th> Nbre de ville</th>
        </tr>
            ';

 while($row = $req->fetch()){
     echo '
        <tr>
            <td> <a href="pays2.php?codePays='.$row['codePays'].'">'.$row['nomPays'].'</a></td>
            <td> '.$row['populationPays'].'</td>
            <td> '.$row['nbreVille'].'</td>
            
     ';
 }
 $req->closeCursor();


 echo '</table>';



