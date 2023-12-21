<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title> information du bateaux</title>
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
<form action="../Controllers/create_ctrl.php" method='post'>
        <fieldset>
            <legend>Créer un livre</legend>
            <pre>
                <label for="nom">nom :</label>
                <input type="text" name="nom" id="nom">
                <label for="modele">modele :</label>
                <input type="text" name="modele" id="modele">
                <label for="resume">Résumé :</label>
                <textarea name="resume" id="resume" cols="30" rows="10"></textarea>
                <label for="taille">taille :</label>
                <input type="text" name="taille" id="taille">
                <label for="proprietaire">proprietaire :</label>
                <input type="text" name="proprietaire" id="proprietaire">
                <label for="id_carnet">id carnet :</label>
                <input type="text" name="id_carnet" id="id_carnet">
                <input type="submit" value="Créer">
            </pre>
        </fieldset>
    </form>
</body>
</html>