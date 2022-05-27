<?php
function get_total_panier($produits){
    $PT=0;
    foreach($produits  as $key => $value){ 
        $PT=($value['product']['prix']*$value['quantite']) + $PT;
    }
    return $PT;
}

function panier(){
    $produits=getallpanier();
    $PT=get_total_panier($produits);
     
    // afficher la vue du panier
    include __DIR__.'/../../templates/voir_panier.php';
}


function vider_panier(){
    
    session_destroy();
    // redirection vers le controlleur des produits pour afficher le catalogue
    include __DIR__.'/../Controller/ProductController.php';
    afficher_product();

}

 function ajouter_panier(){

    // on recuperer l IDENTIFIANT DU PRODUIT    
    $id=$_GET['id']; 


    // CAS 1 : le panier n'existe pas

    //1 VERIFIE SI LE PANIER EXISTE

    //2 CREATION DE MON PANIER
    // dans le cas il n'existe pas
    // premier fois qu on cree le panier
    if (!isset($_SESSION["cart"])){
        $_SESSION["cart"]=array(); 
    }
    // si non le panier existe deja
    // Ajouter au panier dans le tableau cart
    // clé : Identifiant => valeur Quantité
    // on ajoute dans le tableau cart un element uniquement si il n'existait pas
    // si il existait on ajoute la quantité +1

    // si l element est deja present dans le tableau initial
    if ( array_key_exists( $id, $_SESSION["cart"]) ){
        echo "element deja existant";
        $_SESSION["cart"][$id]=$_SESSION["cart"][$id] + 1;
    }
    else {
        // nouvelle element non present dans le tab initial
       $_SESSION["cart"][$id]=1;
    }
     
    // CAS 2 : le panier existe deja 
    $produits=getallpanier();
    $PT=get_total_panier($produits);
    include __DIR__.'/../../templates/voir_panier.php'; 
}



 function getallpanier(){

    include __DIR__.'/../Entity/Produit.php';


    // tableau initialisé à vide
    $tab_produit_full=array();

    // boucle sur mon panier de session 
    foreach($_SESSION['cart']  as $key => $value){

       // grace au modele je recupere la ligne complete du produit
       $produit = afficher_un_produit_m($key);

       // a chaque boucle je met la ligne produite complete et sa quantite
       $tab_produit_full[]=[
           'product'=>$produit,
           'quantite'=>$value
        ]; 
    }

    return $tab_produit_full;

 }
 

?>