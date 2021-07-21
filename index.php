<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
</head>
<body>
<h1>Hello world !</h1>
<p>
 <?php echo date('d-m-d H:i:s');?>
 </p> 
 <?php
$bonnets = [
    1 => [
        'designation' => 'Bonnet en laine', 
        'prix' => 10,
        'description' => "Jaune"
    ],
    2 => [
        'designation' => 'Bonnet en laine bio', 
        'prix' => 15,
        'description' => "Bleu"
    ],
    3 => [
        'designation' => 'Bonnet en laine et cachemire', 
        'prix' => 20,
        'description' => "Vert"
    ],
    4 => [
        'designation' => 'Bonnet arc-en-ciel', 
        'prix' => 18,
        'description' => "Violet"
    ]
    // 1 => 'Bonnet en laine', 
    // 2 => 'Bonnet en laine bio',
    // 3 => 'Bonnet en laine et cachemire',
    // 4 => 'Bonnet arc-en-ciel'
    ];


//print_r($bonnets);

?>
<br>
<table>
    <thead>
        <tr>
            <th colspan="2">id</th>
            <th colspan="2">Désignation</th>
            <th colspan="2">Prix</th>
            <th colspan="2">description</th>
        </tr>
        
    </thead>
    <tbody>
        <?php
        foreach($bonnets as $i => $item){
            $color = '';

            if( $item['prix'] <= 12){
                $color ='green';
            } else {
                $color ='red';
            }

            ?>


           <tr>
                    <td  colspan="2"><?= $i?> </td> 
                    <td colspan="2"><?= $item['designation'] ?> </td>

                    <td style="color: <?php echo $color ?>;" colspan="2"><?= $item['prix'] ?> </td>
                    <td colspan="2"><?= $item['description'] ?> </td>
            <tr>

        <?php
            }
        ?>               
        

    </tbody>
</table>

</body>
</html>