<?php

$pdo = new PDO('mysql:host=localhost; dbname=festivals; charset=utf8', 'root', '0000');
$stmt = $pdo->prepare('DELETE FROM festivals WHERE id=:id');
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

header('Location: /list.php');