<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="shortcut icon" href="./../img/icon.png" type="image/png">
</head>
<body>
    <?php
        if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numero']) && isset($_POST['mail'])) {
            if ($_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['numero'] != "" && $_POST['mail'] != "") {
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $numero = $_POST['numero'];
                $mail = $_POST['mail'];
                $qualite = ' ';
                if (isset($_POST['qualite'])) {
                    if ($_POST['qualite'] != "") {
                        $qualite = $_POST['qualite'];
                    }
                }
    
                try
                {
                
                    $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
                    $reponse = $bdd->query("SELECT id FROM contact;");
                    $id = 1;
                    while ($donnees = $reponse->fetch())
                    {
                        $id = $donnees['id'] + 1;
                    }
                    $reponse->closeCursor();
                    $bdd->query("INSERT INTO contact VALUES ($id, \"$nom\", \"$prenom\", \"$numero\", \"$mail\", \"$qualite\");");
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
            }
        }
    ?>
    <script src="./../js/auto_go_back_add.js"></script>
</body>
</html>
