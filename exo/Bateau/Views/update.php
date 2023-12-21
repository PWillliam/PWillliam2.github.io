<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier votre bateau</title>
    <style> 
        form {
            width: 50%;
            margin: 100px auto;
        }
        form * {
            margin: 5px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <?php
    require_once('../db.php');
    if (isset($_POST) && !empty($_POST)) {
        $update = $BDD->prepare('SELECT * FROM bateaux WHERE id=?');
        $update->execute(array(
            $_POST['update']
        ));
        $update = $update->fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <form action="../Controllers/update_ctrl.php" method='post'>
        <fieldset>
            <legend>Modifier votre bateau</legend>
            <pre>
                <label for="id">ID :</label>
                <input type="number" name="id" id="id" readonly value="<?php echo $update['id'] ?>">
                <label for="nom">Titre :</label>
                <input type="text" name="nom" id="nom" value="<?php echo $update['nom'] ?>">
                <label for="modele">ISBN :</label>
                <input type="text" name="modele" id="modele" maxlength="49" pattern='{0,50}' value="<?php echo $update['modele'] ?>">
                <label for="taille">taille :</label>
                <textarea name="taille" id="taille" cols="30" rows="10"><?php echo $update['taille'] ?></textarea>
                <label for="proprietaire">proprietaire :</label>
                <textarea name="taille" id="taille" cols="30" rows="10"><?php echo $update['proprietaire'] ?></textarea>

                <input type="submit" value="Modifier">
            </pre>
        </fieldset>
    </form>
    
</body>
</html>