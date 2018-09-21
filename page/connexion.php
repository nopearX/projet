
<!-- passe au w3C -->


<?php session_start();
$_SESSION['login'] = $login;
?>



<!DOCTYPE html>
<html>
<title>HandiMaps</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/stylecss.css">
<body>
<!-- ajout du header  -->
<?php include '../includes/header.php';?>

<!-- formulaire connection  -->
<div class="w3-content w3-padding" style="max-width:1564px">

<h2> se connecter : </h2>
<form id='form' method="post">
  <input class="w3-input w3-section w3-border" type="text" name="llogin" id="llogin" placeholder="Votre login" required><br/>
  <input class="w3-input w3-section w3-border" type='password' name="lpassword" id="lpassword" placeholder="Votre Mot de passe" required >
  <input class="w3-input w3-section w3-border" type="submit" name="formlogin" id="formlogin" value="Se connecter">
</form>



<!-- connection à la base et fichier de login  -->

<?php include '../includes/login.php'; ?>

</div>



</body>
</html>
