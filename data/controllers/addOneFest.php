<?php
 
$pdo = new PDO('mysql:host=localhost; dbname=festivals', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('INSERT INTO festivals (festival, style, month1, country, city) VALUES (:festival, :style, :month1, :country, :city)');
$stmt->bindParam(':festival', $_POST['festival']);
$stmt->bindParam(':style', $_POST['style']);
$stmt->bindParam(':month', $_POST['month']);
$stmt->bindParam(':country', $_POST['country']);
$stmt->bindParam(':city', $_POST['city']);

$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
header('Location: /list.php');