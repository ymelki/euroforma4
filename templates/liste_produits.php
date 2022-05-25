<?php include "header.php";     ?>
<?php

       
?>

      <p class="h1">Bienvenue sur notre site</p>



<div class="row row-cols-1 row-cols-md-3 g-4">

<?php  
      


    foreach($liste_produit  as $ligne){

    ?>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> <a href=voir.php?id=<?=$ligne['id']?> >  <?= $ligne['nom']."</a> ". $ligne['prix']." € "?></h5>
        <p class="card-text"><?= $ligne['description'] ?></p>
      </div>
    </div>
  </div>

  <?php
	}  

  ?>
  
</div>





   

   

</body>
</html>