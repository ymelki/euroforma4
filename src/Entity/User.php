<?php
include_once __DIR__.'/../function.php';
    
function save_user_m(){
        
        
          
          
    $PDO=connect_bd();


    $sql = "INSERT INTO user (id, email, pwd)
    VALUES (?,?,?)";
    $stmt= $PDO->prepare($sql);
    $stmt->execute([NULL,
     $_POST['email'], 
     password_hash($_POST['pwd'], PASSWORD_BCRYPT)
]);
}


function authentification_user_m(){
          
    $PDO=connect_bd();
    // POST
    $mail=$_POST['email'];
    $mdp=$_POST['pwd'];
 
    // Récupère les données de la table produits
    $requete1 = "SELECT * FROM user where email='$mail'";
    $resultat = $PDO->prepare($requete1);

    $resultat->execute();

    
            
    // nouveau tableau initialisé à vide
    $rows=array();

    while($ligne = $resultat->fetch()) {  
        // enrichir mon tableau avec le tab $ligne
        $rows[]=$ligne;
    } 
 

    // cas mot de passe OK
    if (($mail==$rows[0]['email']) && (password_verify($mdp, $rows[0]['pwd'] ))   ){
         return true;
    }
    else { 
     // cas mot de passe KO 
        return false;
    }
 
}



