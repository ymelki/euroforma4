<?php

//ajouter un produit
function add_product_form(){
    //appel de la vue
    include __DIR__.'/../../templates/ajouter_produit.php';
}
//ENREGISTRER un produit
function save_product(){
    //appelle du modele
    include __DIR__.'/../Entity/Produit.php';
    save_produit_m();
    // appelle de la vue a faire
    echo "test";
    
}

//afficher tout les produit
function afficher_product(){
     //appelle du modele le modele des produits
    include __DIR__.'/../Entity/Produit.php';
    $liste_produit=afficher_produit_m();  
    // inclus la vue
    include __DIR__.'/../../templates/liste_produits.php';

}


function afficher_un_product(){
         //appelle du modele le modele des produits
         include __DIR__.'/../Entity/Produit.php';
         $id=$_GET['id'];
         $produit=afficher_un_produit_m($id);
        // var_dump($produit)  ;
         // inclus la vue
         include __DIR__.'/../../templates/un_produit.php';
     
}