<?php
$dsn="mysql:host=localhost;dbname=prison_management_db;charset=utf8mb4";
try{$pdo=new PDO($dsn,"root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);}catch(PDOException $e){exit("Database connection failed. Import database/database.sql first.");}
?>