
<!-- passe au W3C juste erreur a cause des balise php -->



<?php session_start();?>
<!DOCTYPE html>
<html>
<title>HandiMaps</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/stylecss.css">
<body>

<!-- Navbar (sit on top) -->
<?php include '../includes/header.php';?>

<div class="w3-content w3-padding" style="max-width:1564px">

  <h2> créer un compte : </h2>

<form id='form1' method="post">
  <input class="w3-input w3-section w3-border" type="text" name="nom" id="nom" placeholder="Votre Nom" required value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
  <input class="w3-input w3-section w3-border" type="text" name="prenom" id="prenom" placeholder="Votre prenom" required  value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>" /><br /><br/>
  <input class="w3-input w3-section w3-border" type="text" name="login" id="login" placeholder="Votre login" required value="<?php if(isset($_POST['login'])) { echo $_POST['login']; } ?>" /><br /><br/>
  <input class="w3-input w3-section w3-border" type="text" name="email" id="email" placeholder="Votre Email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" /><br /><br/>
  <input class="w3-input w3-section w3-border" type="password" name="password" id="password" placeholder="Votre Mot de passe" required ><br/>
  <input class="w3-input w3-section w3-border" type="password" name="cpassword" id="cpassword" placeholder="confirmer Votre Mot de passe" required >
  <input class="w3-input w3-section w3-border" type="submit" name="formsend" id="formsend" value="Inscription">
</form>


<?php include '../includes/inscrip.php';?>


</div>



</body>
</html>
