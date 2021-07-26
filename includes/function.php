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

    if ($item['prix'] <= 12) {
        $color = 'green';
    } else {
        $color = 'red';
    }

?>

    <tr>
        <td colspan="2"><?= $item['id'] ?> </td>
        <td colspan="2"><?= $item['designation'] ?> </td>
        <td colspan="2"><?= number_format(prixHt($item['prix']), 2) ?> €</td>
        <td style="color: <?= $color ?>;" colspan="2"><?= $item['prix'] ?> €</td>
        <td colspan="2"><?= $item['description'] ?> </td>
        <td colspan="2"><img width="90px" src="src/img/<?= $item['image'] ?> " alt="<?= $item['designation'] ?>"> </td>
    <tr>
    <?php
}
