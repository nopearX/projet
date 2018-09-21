<?php
if(isset($_POST['formsend'])){


include '../includes/database.php';
global $db;
extract($_POST);

    if(!empty("password") && !empty("cpassword") && !empty("email") && !empty("login") && !empty("email")){
        if($password == $cpassword){
            $options = ['cost' => 12,];
            $hashpass = password_hash($password, PASSWORD_DEFAULT, $options);
            $q = $db->prepare("INSERT INTO users (password,nom,prenom,email,login) values (:password,:nom,:prenom,:email,:login)");
            $q->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => $email,
                'login' => $login,
                'password' => $hashpass
          ]);
          echo "Compte créé";
       }else{
         echo "Les mots de passe ne correspondent pas";
       }
     }

   }
?>
