<?php
include_once __DIR__.'/../function.php';
    
    function save_user_m(){
        
        
          
          
        $PDO=connect_bd();


        $sql = "INSERT INTO user (id, email, pwd)
        VALUES (?,?,?)";
        $stmt= $PDO->prepare($sql);
        $stmt->execute([NULL,
         $_POST['email'], 
         $_POST['pwd']
    ]);
    }



