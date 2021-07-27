<?php

include('variables.php');

function prixHt($prixTtc)
{
    return $prixTtc / 1.2;
}

//exercice 5
function displayItem($i, $item)
{
    $color = '';

    if ($item->getPrix() <= 12) {
        $color = 'green';
    } else {
        $color = 'red';
    }

?>

    <tr>
        <td colspan="2"><?= $item->getId(); ?> </td>
        <td colspan="2"><?= $item->getDesignation();  ?> </td>
        <td colspan="2"><?= number_format(prixHt($item->getPrix()), 2) ?> €</td>
        <td style="color: <?= $color ?>;" colspan="2"><?= $item->getPrix() ?> €</td>
        <td colspan="2"><?= $item->getDescription();?> </td>
        <td colspan="2"><img width="90px" src="src/img/<?= $item->getImage() ;?> " alt="<?= $item->getDesignation();?>"> </td>
    <tr>
    <?php
}
