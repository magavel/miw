<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 09/10/2018
 * Time: 11:15
 */

try {
    $bdd = new PDO(
        'mysql:host=localhost;dbname=miw;charset=utf8',
        'root',
        '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>
<html>
<head>
    <title>TP3</title>
</head>
<body>
<?php
if (!empty($_GET["code"])) {
echo '<h1>Detail of country</h1><table>';
?>
<thead>
<tr>
    <th>Code</th>
    <th>Name</th>
    <th>Continent</th>
    <th>Region</th>
    <th>Surface</th>
    <th>Independant Year</th>
    <th>Population</th>
    <th>Life Expectancy</th>
    <th>GNP</th>
    <th>GNP Old</th>
    <th>Local Name</th>
    <th>Government Form</th>
    <th>Head of State</th>
    <th>Capital</th>
    <th>Code2</th>
</tr>
</thead>
<tbody>
<?php
$req = $bdd->query('SELECT * FROM country WHERE code="' . $_GET['code'] . '"');
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>
                        <td>' . $row['code'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['continent'] . '</td>
                        <td>' . $row['region'] . '</td>
                        <td>' . $row['surfacearea'] . '</td>
                        <td>' . $row['indepyear'] . '</td>
                        <td>' . $row['population'] . '</td>
                        <td>' . $row['lifeexpectancy'] . '</td>
                        <td>' . $row['gnp'] . '</td>
                        <td>' . $row['gnpold'] . '</td>
                        <td>' . $row['LocalName'] . '</td>
                        <td>' . $row['governmentform'] . '</td>
                        <td>' . $row['headofstate'] . '</td>
                        <td>' . $row['capital'] . '</td>
                        <td>' . $row['code2'] . '</td>
                      </tr>';
}
$req->closeCursor();
echo '</tbody></table><br />';
echo '<h2>10 city</h2><table>';
?>
<thead>
<tr>
    <th>Name</th>
    <th>Population</th>
</tr>
</thead>
<tbody>
<?php
$req = $bdd->query('SELECT name, population FROM city WHERE countrycode="' . $_GET['code'] . '" ORDER BY population DESC LIMIT 10');
while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['population'] . '</td>
                  </tr>';
}
$req->closeCursor();
echo '</tbody></table>';
} else {
echo '<h1>List of country</h1><table>';
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
    <th><a href="./?tri_name=<?php echo $tri_name;?>">Name</a></th>
    <th><a href="./?tri_pop=<?php echo $tri_pop;?>">Population</a></th>
    <th><a href="./?tri_ville=<?php echo $tri_ville;?>">Nb Villes</a></th>
</tr>
</thead>
<tbody>
<?php
$my_requete = 'SELECT country.code, country.name, country.population, 
COUNT(city.id) AS nb_ville 
FROM country 
INNER JOIN city ON country.code = city.countrycode 
GROUP BY countrycode 
ORDER BY ';
//$req = $bdd->prepare('SELECT country.code, country.name, country.population, COUNT(city.id) AS nb_ville FROM country INNER JOIN city ON country.code = city.countrycode GROUP BY countrycode ORDER BY :tri');

if(!empty($_GET["tri_name"]))
    $my_requete.=' country.name '.$_GET["tri_name"];
else if (!empty($_GET["tri_pop"]))
    $my_requete.=' country.population '.$_GET["tri_pop"];
else if (!empty($_GET["tri_ville"]))
    $my_requete.=' nb_ville '.$_GET["tri_ville"];

$req = $bdd->query($my_requete);

while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>
                        <td><a href="./?code=' . $row['code'] . '">' . $row['name'] . '</a></td>
                        <td>' . $row['population'] . '</td>
                        <td>' . $row['nb_ville'] . '</td>
                      </tr>';
}
$req->closeCursor();
echo '</tbody></table>';
}
?>
</body>
</html>

