<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lecture</title>
</head>
<body>
    <a href="login.php">Connexion</a>
    <?php
        $_GET['page'] = 'read';
        require_once("../Controllers/read_ctrl.php");
    ?>

        <?php
            foreach ($Tableau as $ligne) {
                echo "<ul>";

                foreach ($ligne as $column) {
                    echo "<li>$column</li>";
                }

                echo "</ul><br>";
            }
        ?>


</body>
</html>