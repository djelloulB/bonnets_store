<?php
require_once('config.inc.php');


//$sql =  'select * FROM beanie';
//$sql = 'INSERT INTO `beanie`(`id`, `designation`, `prix`, `description`, `image`) VALUES (1,"Bonnet en laine",10,jaune,"localhost/"http://localhost/cdA18_PHP/src/img/bonnet-jaune.jpg")';
//$statement = $connection->query($sql);
$bonnets = [
    1 => [
        'designation' => 'Bonnet en laine',
        'prix' => 10,
        'description' => "Jaune",
        'image' => 'bonnet-jaune.jpg'
    ],
    2 => [
        'designation' => 'Bonnet en laine bio',
        'prix' => 15,
        'description' => "Bleu",
        'image' => 'bonnet-pompon-bleu.jpg'
    ],
    3 => [
        'designation' => 'Bonnet en laine et cachemire',
        'prix' => 20,
        'description' => "Vert",
        'image' => 'vert.jpeg'
    ],
    4 => [
        'designation' => 'Bonnet arc-en-ciel',
        'prix' => 18,
        'description' => "Violet",
        'image' => 'arc-en-ciel'
    ]
];

$sql = "INSERT INTO beanie ( designation, prix, description, image) VALUES ( :designation,:prix,:description,:image)";

$pdoStatement = $connection->prepare($sql);



foreach ($bonnets as $beanie) {
    $pdoStatement->bindParam(':designation', $beanie['designation']);
    $pdoStatement->bindParam(':prix', $beanie['prix']);
    $pdoStatement->bindParam(':description', $beanie['description']);
    $pdoStatement->bindParam(':image', $beanie['image']);

    $count = $pdoStatement->execute();
}
