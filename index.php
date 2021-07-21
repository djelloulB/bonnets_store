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
<p class="text-center"> <?php echo date('d-m-d H:i:s');?> </p> 
<br>

 <?php
include('variables.php');
include('function.php');
?>

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
       
        foreach($bonnets as $i => $item){
            
            displayItem($i, $item);
        
            }


        ?>               
        

    </tbody>
</table>

</div>

</body>
</html>