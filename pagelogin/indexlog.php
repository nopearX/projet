<?php SESSION_START();

?>
<!DOCTYPE html>
<html>
<title>HandiMaps</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../css/stylecss.css">

<body>

<!-- Navbar (sit on top) -->

<?php include '../includes/headerlog.php'; ?>

<div class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://cdn.mapsinternational.co.uk/pub/media/catalog/product/cache/image/beff4985b56e3afdbeabfc89641a4582/w/o/world-wall-map-political-without-flags_wm00001_h.jpg" alt="Architecture" width="1500" height="800"></img>
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>HM</b></span> <span class="w3-hide-small w3-text-light-grey"><FONT color="#000000">HandiMaps</span></h1>
  </div>
</div>



<!-- presentation -->
<center>
<h2> Ce site est un projet Universitaire </h2>
<h6> Site à disposition principale pour des personnes handicapés, il permet d'avoir des renseignements sur l'accessibilité et sur le lieu en général.</h6>
<h6> Crée un compte des maintenant pour vous joindre à nous est voius simplifier la vie </h6>
<h6> Vous pouvez même ajouter votre propre avis sur un lieu </h6>
</center>

<center>
<a class="w3-input w3-section w3-border w3-add" type="button" value="button" href="../include/ajoutlieulog.php"> Ajouter un lieu</a>
</center>
<!-- ecart entre image et carte-->
<?php include "../includes/carte.php";?>
<?php include "../includes/recoVocale.php";?>
<!-- ajout bouton ajout lieu  -->


  </body>
</html>
