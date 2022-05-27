<?php
    include_once __DIR__.'/../function.php';
    
    function ligne_commande_m(){
    
        $PDO=connect_bd();
        $produits=getallpanier();

        foreach ( $produits as $key=>$value   ) {
            $sql = "INSERT INTO ligne_commande (id, id_produit , quantite , total)
            VALUES (?,?,?,?)";
            $stmt= $PDO->prepare($sql);
            $stmt->execute([NULL, 
            $value['product']['id']  , 
            $value['quantite'],
            $value['quantite'] * $value['product']['prix']
            ]);
        }
    }
 
