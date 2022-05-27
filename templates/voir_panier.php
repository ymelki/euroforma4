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
      $PT=0;
      foreach($produits  as $key => $value){ 
        $PT=($value['product']['prix']*$value['quantite']) + $PT
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
    echo $PT;
    
    ?>
  </tbody>
</table>


<a href="/vider_panier" class="btn btn-primary"> Vider le panier </a>  
<?php } else { echo "le panier est vide"; } ?>




   

   

</body>
</html>