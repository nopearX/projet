<?php
  extract($_POST);
  include '../includes/database.php';
  global $db;

            $q = $db->prepare("SELECT lieu, commentaires from lieux where lieu = :place ");
            $q->execute(['lieu' => $place]);
            $result = $q -> fetch();


 ?>
