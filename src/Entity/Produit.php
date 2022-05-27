<?php
    include_once __DIR__.'/../function.php';
    
    function save_produit_m(){
    
        $PDO=connect_bd();


        $sql = "INSERT INTO produit (id, nom, description, prix)
        VALUES (?,?,?,?)";
        $stmt= $PDO->prepare($sql);
        $stmt->execute([NULL, $_POST['nom'],  $_POST['desc'], $_POST['prix']]);
    }

    function afficher_produit_m(){
        
        $PDO=connect_bd();

                
        // Récupère les données de la table produits
        $requete1 = 'SELECT * FROM produit';

        // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
        // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
        $resultat = $PDO->prepare($requete1);
        $resultat->execute();
            
        // nouveau tableau initialisé à vide
        $rows=array();

        while($ligne = $resultat->fetch()) { 
            // enrichir mon tableau avec le tab $ligne
            $rows[]=$ligne;
        } 

        return $rows;
 
    }


    
    function afficher_un_produit_m($id){
        
        $PDO=connect_bd();

                
        // Récupère les données de la table produits
        $requete1 = "SELECT * FROM produit where id = ".$id;

        // le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
        // l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
        $resultat = $PDO->prepare($requete1);
        $resultat->execute();
            
        // nouveau tableau initialisé à vide
        $rows=array();

        while($ligne = $resultat->fetch()) { 
            // enrichir mon tableau avec le tab $ligne
            $rows=$ligne;
        } 

        return $rows;
 
    }
 

    function supprimer_un_produit_m($id){ 
        $PDO=connect_bd(); 
        // Récupère les données de la table produits
        $requete1 = " DELETE FROM produit WHERE id = ".$id;

        $stmt= $PDO->prepare($requete1);
        $stmt->execute(); 
    }
