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
    </tr>
  </thead>
  <tbody>
      <?php var_dump($produits);
       foreach($produits  as $key => $value){ ?>

    <tr> 
      <td><?=$key ?> </td>
      <td><?=$value['product']['id']; ?></td> 
      <td><?=$value['product']['nom']; ?></td> 
      <td><?=$value['product']['prix']; ?></td>
      <td><?=$value['product']['description']; ?></td> 
      <td><?=$value['quantite']; ?></td> 


    </tr>
    <?php   } ?>
  </tbody>
</table>


<a href="/vider_panier" class="btn btn-primary"> Vider le panier </a>  
<?php } else { echo "le panier est vide"; } ?>




   

   

</body>
</html>