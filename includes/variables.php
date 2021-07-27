<?php

use Factory\BeanieFactory;

require_once('config.inc.php');
$email = 'toto@fr.fr';
$pwd = 'toto';

// define('EMAIL','toto@fr.fr');
// define('MDP', 'toto');
$sql = "SELECT * FROM beanie";
$pdoStatement = $connection->prepare($sql);
$success = $pdoStatement->execute();

$results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
$bonnets = [];
$factory = new BeanieFactory();
foreach ($results as $bonnet) {
    $bonnets[] = $factory->create($bonnet);
    
}
//exit(var_dump($bonnets));
