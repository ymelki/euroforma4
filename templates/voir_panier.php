<?php include "header.php";     ?>
<?php


       
?>

      <p class="h1">Votre panier</p>
<?php if (isset($_SESSION['cart'])) { ?>
 <table class="table">
  <thead>
    <tr> 
      <th scope="col">NUM</th>
      <th scope="col">ID_PRODUIT</th>
      <th scope="col">NOM</th>
      <th scope="col">PRIX</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">QUANTITE</th> 
      <th scope="col">PRIX TOTAL (P. * Q.)</th> 
    </tr>
  </thead>
  <tbody>
      <?php  
     
      foreach($produits  as $key => $value){ 
        ?>

    <tr> 
      <td><?=$key ?> </td>
      <td><?=$value['product']['id']; ?></td> 
      <td><?=$value['product']['nom']; ?></td> 
      <td><?=$value['product']['prix']; ?></td>
      <td><?=$value['product']['description']; ?></td> 
      <td><?=$value['quantite']; ?></td> 
      <td><?=$value['product']['prix']*$value['quantite']; ?></td>  
      
    </tr>
    <?php   }
    ?>
  </tbody>
</table>
<div class="container">
    <div class="row align-items-end">
    TOTAL : <?=$PT;?>
    </div> 
</div>

<p><a href="/passer_commande" class="btn btn-success  active" role="button" data-bs-toggle="button" aria-pressed="true">Passer la commande</a></p>


<br />
<a href="/vider_panier" class="btn btn-primary"> Vider le panier </a>  
<?php } else { echo "le panier est vide"; } ?>




   

   

</body>
</html>