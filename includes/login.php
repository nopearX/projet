<?php

// appuie sur le bouton
 if(isset($_POST['formlogin'])){

   include '../includes/database.php';
   global $db;
  extract($_POST);
// verification des champs
     if(!empty("llogin") && !empty("lpassword"))
    {
       $_SESSION['llogin']= $logincompte;

         $q = $db->prepare("SELECT * FROM users WHERE login = :login");
         $q -> execute(['login' => $llogin]);
         $result = $q->fetch();

// var_dump($result);
              if($result == true)
              {
                        if(password_verify($lpassword, $result['password']))
                            {
                               $_SESSION['llogin'] = $result['login'];
                               ?>
                               
                               <script type='text/javascript'>document.location.replace('../pagelogin/indexlog.php');</script>;
                              <?php
                             }else{
                              echo "le mot de passe n'est pas bon";
                                  }
              }else {
                echo" le login ne correspond à aucun compte";
              }
    }
 }
?>
