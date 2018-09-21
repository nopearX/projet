

<!DOCTYPE html>
<html>
<title>HandiMaps</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/stylecss.css">
<body>

<!-- Navbar (sit on top) -->
<?php include '../includes/headerlog.php';?>

<div class="w3-content w3-padding" style="max-width:1564px"><z>
<center>
  <h2> Ajouter un lieu : </h2>
  <div align="center">
<form id='form1' method="post">
  <input class="w3-input w3-section w3-border" type="text" name="lieu" id="lieu" placeholder="Nom du lieu" required value="<?php if(isset($_POST['lieu'])) { echo $_POST['lieu']; } ?>" /><br /><br />  <!--permet de garder les champs remplis en cas d'erreurs -->
  <input class="w3-input w3-section w3-border" type="text" name="commentaires" id="commentaires" placeholder="Votre avis" required  value="<?php if(isset($_POST['commentaire'])) { echo $_POST['commentaire']; } ?>" /><br /><br/>

  <center><input class="w3-input w3-section w3-border" type="submit" name="formsend" id="formsend" value="Enregistrer"></center>
</form>
</div>

<?php
if(isset($_POST['formsend'])){

  extract($_POST);
include 'database.php';
global $db;

    if(!empty("lieu") && !empty("commentaires")){

            $q = $db->prepare("INSERT INTO lieux (lieu,commentaires) values (:lieu,:commentaires)");
            $q->execute([
                'lieu' => $lieu,
                'commentaires' => $commentaires
          ]);
          echo "lieu ajouté";
       }
     }


?>


</center>
</div>

</body>
</html>
