<?php

$pdo = new PDO('mysql:host=localhost; dbname=festivals', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$stmt = $pdo->prepare('UPDATE festivals SET festival=:festival, style=:style, month1=:month1, country=:country, city=:city WHERE id=:id');
$stmt->bindParam(':festival', $_POST['festival']);
$stmt->bindParam(':style', $_POST['style']);
$stmt->bindParam(':month1', $_POST['month1']);
$stmt->bindParam(':country', $_POST['country']);
$stmt->bindParam(':city', $_POST['city']);
$stmt->execute();

header('Location: /list.php'); 