<?php


function authentification(){
    include __DIR__.'/../../templates/authentification_user.php';
} 

function authentification_user(){
    // appel du modele
    include __DIR__.'/../Entity/User.php';

    if (authentification_user_m()==true) { 
        include __DIR__.'/../../templates/home.php';
    }
    else {    // appel de la vue
    include __DIR__.'/../../templates/authentification_user.php';
    }
}

function inscription(){
    include __DIR__.'/../../templates/inscription_user.php';
} 

function enregistrer_user(){
    // appel du modele
    include __DIR__.'/../Entity/User.php';
    save_user_m();


    // appel de la vue
    include __DIR__.'/../../templates/home.php';
}