<?php SESSION_START();
$_SESSION['llogin'] = $result['login'];
?>
<!DOCTYPE html>
<html>
<title>HandiMaps</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/stylecss.css">
</head>
<body>
<div class="w3-histo">
<!-- Navbar (sit on top) -->
<?php include '../includes/headerlog.php'; ?>




       <h2> Voici votre Historique de navigation </h2>



<?php
                   include '../includes/database.php';
                   global $db;
                   extract($_POST);


                   $q = $db->query("SELECT * from historique where logUsers = 'lolo'");
                while (  $histo = $q ->fetch()){
                   echo $histo['lieu'];
                   echo '<br>';

                }


?>

</div>


</body>
</html>
