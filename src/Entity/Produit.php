<?php
    include __DIR__.'/../function.php';
    
    function save_produit_m(){
    
        $PDO=connect_bd();


        $sql = "INSERT INTO produit (id, nom, description, prix)
        VALUES (?,?,?,?)";
        $stmt= $PDO->prepare($sql);
        $stmt->execute([NULL, $_POST['nom'],  $_POST['desc'], $_POST['prix']]);
    }

 