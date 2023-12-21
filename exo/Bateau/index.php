<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <style>
        table, tr,td,th {
            border: 1px dotted black;
            padding: 10px;
            border-collapse: collapse;
        }
        button {
            padding: 10px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <form action="./Views/update.php" method="POST" id='form'>
        <button formaction='./Views/create.php'>Créer un nouveau bateau</button>
        <button formaction='./Views/read.php'>Liste des bateaux</button>
        <table>
            <tr>
                <th>ID</th>
                <th>nom</th>
                <th>modele</th>
                <th>taille</th>
                <th>proprietaire</th>
            </tr>
            <?php
                require_once './ctrl/read_ctrl.php';
                foreach ($ListLivre as $Listlivre) {
                    // Syntaxe Here Document (HereDoc) sert à dire que on est bien en chaine de cractère mais permet
                    // de faire du code php quand même
                    echo <<<Heredoc
                        <tr>
                            <td>{$livre['id']}</td>
                            <td>{$livre['titre']}</td>
                            <td>{$livre['ISBN']}</td>
                            <td>{$livre['résumé']}</td>
                            <td>
                                <button name='update' value="{$livre['id']}">Modifier</button>            
                                <button formaction="./Controllers/delete_ctrl.php" name="delete" value="{$livre['id']}">Supprimer</button>
                            </td>
                        </tr>
                    Heredoc;
                    // Juste au dessus j'ai mis 'value="{$livre['id']}"' puisque dans notre read j'ai mis un fetchall 
                    // PDO::FETCH_ASSOC si je l'aurai mis en PDO::FETCH_CLASS j'aurai plutôt du mettre 'value="{$livre->id}"'
                }
            ?>
        </table>
    </form>
    <script>
        document.getElementById('form').addEventListener('submit', function(DataEvent) {
            if (DataEvent.submitter.name == 'delete') {
                if (!confirm('Voulez vous vraiment supprimé le livre ?')) {
                    DataEvent.preventDefault();
                
                }
            }
        })
    </script>
</body>
</html> 