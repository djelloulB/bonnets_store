<?php
$length = count($bonnets);
//foreach($bonnets as $i => $item){

for ($i = 1; $i <= $length; $i++) {

?>
    <div class="col-4">
        <div class="card shadow" style="width: 18rem;">
            <img src="src/img/<?= $bonnets[$i]->getImage();?>" class="card-img-top" alt="<?= $bonnets[$i]->getDesignation();?>">
            <div class="card-body">
                <h5 class="card-title"><?= $bonnets[$i]->getDesignation(); ?></h5>
                <p class="card-text"><?= $bonnets[$i]->getDescription(); ?></p>
                <a href="#" class="btn btn-primary">Voir plus..</a>
            </div>
        </div>
    </div>
<?php
    if ($i == 3) {
        break;
    }
}
?>