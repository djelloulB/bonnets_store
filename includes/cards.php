<?php

//foreach($bonnets as $i => $item){
    for($i = 1; $i <= 3 ; $i++){
?>
    
    <div class="col-4">
        <div class="card shadow" style="width: 18rem;">
        <img src="src/img/<?= $bonnets[$i]['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?= $bonnets[$i]['designation']?></h5>
        <p class="card-text"><?= $bonnets[$i]['description']?></p>
        <a href="#" class="btn btn-primary">Voir plus..</a>
        </div>
        </div>
    </div>          
  <?php          
        
        }

?>