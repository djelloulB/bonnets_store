
<?php 
    include('includes/header.php');
?>

<table class="table shadow">
    <thead>
        <tr class="table-dark">
            <th  colspan="2">#</th>
            <th  colspan="2">Désignation</th>
            <th colspan="2">Prix HT</th>
            <th colspan="2">Prix TTC</th>
            <th colspan="2">Description</th>
            <th colspan="2">Image</th>
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


<?php
    include_once('includes/footer.php');
?>