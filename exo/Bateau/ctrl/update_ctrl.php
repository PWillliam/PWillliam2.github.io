<?php
require_once('../db.php');


if (isset($_POST) && !empty($_POST)) {
    $update = $BDD->prepare('UPDATE Bateaux SET nom=?, modele=?, taille=?, propietaire=?, id_carnet, WHERE id=?');
    $update->execute(array(
        $_POST['nom'],
        $_POST['modele'],
        $_POST['taille'],
        $_POST['propietaire'],
        $_POST['id_carnet'],
        $_POST['id']
    ));
}
header('Location: ../index.php');