<?php
require_once './db.php';

$ListLivre = $BDD->prepare('SELECT * FROM bateaux');
$ListLivre->execute();
$ListLivre = $ListLivre->fetchAll(PDO::FETCH_ASSOC);
