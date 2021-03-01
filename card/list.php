<br>
<br>
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Id du Produit</th>
      <th scope="col">Nom du Produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantité</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
  <?php
  if(!empty($_SESSION["cadie"])):
    $somme = 0; 
    foreach($_SESSION["cadie"] as $cadie):
        $total= $cadie["priceProduct"] * $cadie[ 'quantityProduct'];
        $somme+= $total;
  ?>
        <tr>
          <td><?= $cadie[ "idProduct"]    ?></td>
          <td><?= $cadie["nameProduct"]    ?></td>
          <td><?= $cadie['priceProduct']    ?></td>
          <td><?= $cadie[ 'quantityProduct']    ?></td>
          <td><?=  $total ?></td>
        </tr>
    <?php endforeach; ?>
    <td></td>
    <td></td>
    <td></td>
    <th>Somme :</th>
    <th><?= $somme ?></th>
  <?php endif; ?>
 
  </tbody>
</table>