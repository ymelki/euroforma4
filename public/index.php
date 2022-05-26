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
    include __DIR__.'/../src/Controller/ProductController.php';
    afficher_product();
}

if ($path=='/voir')  { 
    include __DIR__.'/../src/Controller/ProductController.php';
    afficher_un_product();

}

if ($path=='/panier')  { 
    session_start();

    // $_SESSION["mavar"]="test";
 
    var_dump($_SESSION);
  

}



if ($path=='/ajouter_panier')  { 
    session_start();
    // CAS 1 : le panier n'existe pas

    //1 VERIFIE SI LE PANIER EXISTE

    //2 CREATION DE MON PANIER
    // dans le cas il n'existe pas
    if (!isset($_SESSION["cart"])){
        $_SESSION["cart"]=array(); 
    }
    // si non le panier existe deja
    $_SESSION["cart"]=[1,1];

    

    // CAS 2 : le panier existe deja

    
    echo "j ajoute au panier l'identifiant n ° 1";
    var_dump($_SESSION);
  

}

if ($path=='/vider_panier')  {
    session_start();
    session_destroy();

}






 



?>