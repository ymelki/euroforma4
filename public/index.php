<?php  
if (!isset($_SERVER['PATH_INFO'])) {
    $path="";
}
if (isset($_SERVER['PATH_INFO'])) {
    $path=$_SERVER['PATH_INFO'];
}

if ($path==''){
    echo "vous etes sur la page d accueil";
 }
if ($path=='/catalogue'){
    echo "vous etes sur la page catalogue";
 }
// la route des produits
 if ($path=='/ajouter_produit'){
    include __DIR__.'/../src/Controller/ProductController.php';
    add_product_form();
 }
 if ($path=='/enregistre_produit'){
    include __DIR__.'/../src/Controller/ProductController.php';
    save_product();
}
// routeur : url /afficher_produit => controlleur des produits
if ($path=='/afficher_produit')  {
    echo "afficher produit";
    include __DIR__.'/../src/Controller/ProductController.php';
    afficher_product();
}

 



?>