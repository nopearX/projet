<?php

    define('HOST', 'db741589090.db.1and1.com');
    define('DB_NAME','db741589090');
    define('USER','dbo741589090');
    define('PASS','gBKJpZu6wgHp');

    try{
     $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
     $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
      echo $e;
    }
