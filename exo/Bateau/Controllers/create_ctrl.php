<?php
require_once('../db.php');


if (isset($_POST) && !empty($_POST)) {
    $select = $BDD->prepare('SELECT * FROM bateaux WHERE modele=?');
    $select->execute(array(
        $_POST['modele']
    ));
    $select = $select->rowCount();

    if ($select < 1) {
        $create = $BDD->prepare('INSERT INTO bateaux (nom, modele, taille, proprietaire, id_carnet) VALUES (?, ?, ?, ?, ?)');
        $create->execute(array(
            $_POST['nom'],
            $_POST['modele'],
            $_POST['taille'],
            $_POST['proprietaire'],
            $_POST['id_carnet'],
        ));
        header('Location: ../index.php');
    } else {
        echo '<script>
                alert("Ce modele déjà existant !"); 
                window.location.replace("../index.php")
            </script>';
    }
}
