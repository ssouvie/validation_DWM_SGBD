<?php

$pdo = new PDO('mysql:host=localhost; dbname=festivals', 'root', '0000', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); 
$stmt = $pdo->prepare('SELECT * FROM festivals');
$stmt->execute();
$festivals = $stmt->fetchAll(PDO::FETCH_ASSOC);