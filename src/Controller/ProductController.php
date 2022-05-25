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

//ENREGISTRER un produit
function afficher_product(){
    echo "je passe par la fonction afficher_product";
    //appelle du modele le modele des produits
    include __DIR__.'/../Entity/Produit.php';
    afficher_produit_m();   
    
}