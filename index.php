<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>


</head>
<body>
<div class="container">
<h1 class="text-center">Bonnets Store</h1>
<p class="text-center">
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
<table class="table">
    <thead>
        <tr class="table-dark">
            <th  colspan="2">#</th>
            <th  colspan="2">Désignation</th>
            <th colspan="2">Prix HT</th>
            <th colspan="2">Prix TTC</th>
            <th colspan="2">description</th>
        </tr>
        
    </thead>
    <tbody>
        <?php
        //exercice 4
        
        function prixHt( $prixTtc){
            return $prixTtc /1.2;
        }

        //exercice 5
        function displayItem($i,$item){
            $color = '';

            if( $item['prix'] <= 12){
                $color ='green';
            } else {
                $color ='red';
            }

            $prixTtc =  prixHt( $item['prix']);

            ?>

           <tr>
                    <td  colspan="2"><?= $i?> </td> 
                    <td colspan="2"><?= $item['designation'] ?> </td>
                    <td colspan="2"><?= number_format($prixTtc, 2) ?> €</td>
                    <td style="color: <?php echo $color ?>;" 
                    colspan="2"><?= $item['prix'] ?> €</td>

                    <td colspan="2"><?= $item['description'] ?> </td>
            <tr>
                <?php
        }


        //Exercice 3
        foreach($bonnets as $i => $item){
            
            displayItem($i, $item);
        
            }



        ?>               
        

    </tbody>
</table>

</div>

</body>
</html>