<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des bateaux</title>
    <style>
        li {
            margin: 15px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <ol>
        <?php
            require_once '../db.php';

            $Listlivre = $BDD->prepare('SELECT * FROM bateaux');
            $Listlivre->execute();
            $Listlivre = $Listlivre->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($Listlivre as $livre) {
                echo <<<echo
                <li>
                    <ul>
                        <li>{$bateau['id']}</li>
                        <li>{$bateau['nom']}</li>
                        <li>{$bateau['modele']}</li>
                        <li>{$bateau['taille']}</li>
                        <li>{$bateau['proprietaire']}</li>
                        <li>{$bateau['id_carnet']}</li>
                    </ul>
                </li>
                echo;
            }
        ?>
    </ol>
</body>
</html>