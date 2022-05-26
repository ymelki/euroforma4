<?php include "header.php";     ?>
<?php

       
?>

      <p class="h1">Votre panier</p>


 <table class="table">
  <thead>
    <tr> 
      <th scope="col">ID_PRODUIT</th>
      <th scope="col">QUANTITE</th> 
    </tr>
  </thead>
  <tbody>
      <?php   foreach($_SESSION['cart']  as $key => $value){ ?>

    <tr> 
      <td><?=$key ?></td>
      <td><?=$value ?></td> 
    </tr>
    <?php   } ?>
  </tbody>
</table>




   

   

</body>
</html>