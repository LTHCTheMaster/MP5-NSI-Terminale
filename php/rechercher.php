<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="shortcut icon" href="./../img/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <div class="col-12" align="center">

            <button onclick="goto_rechercher();">Rechercher</button>

            <?php
                $first = true;
                $obj_of_req = "";

                if (isset($_POST['nom'])) {
                    if ($_POST['nom'] != ""){
                        if ($first) {
                            $temp = $_POST['nom'];
                            $obj_of_req .= " WHERE nom=\"$temp\" ";
                            $first = false;
                        }
                    }
                }
                if (isset($_POST['prenom'])) {
                    if ($_POST['prenom'] != ""){
                        if ($first) {
                            $temp = $_POST['prenom'];
                            $obj_of_req .= " WHERE prenom=\"$temp\" ";
                            $first = false;
                        }
                        else {
                            $temp = $_POST['prenom'];
                            $obj_of_req .= " AND prenom=\"$temp\" ";
                        }
                    }
                }
                if (isset($_POST['numero'])) {
                    if ($_POST['numero'] != ""){
                        if ($first) {
                            $temp = $_POST['numero'];
                            $obj_of_req .= " WHERE numero=\"$temp\" ";
                            $first = false;
                        }
                        else {
                            $temp = $_POST['numero'];
                            $obj_of_req .= " AND numero=\"$temp\" ";
                        }
                    }
                }
                if (isset($_POST['mail'])) {
                    if ($_POST['mail'] != ""){
                        if ($first) {
                            $temp = $_POST['mail'];
                            $obj_of_req .= " WHERE email=\"$temp\" ";
                            $first = false;
                        }
                        else {
                            $temp = $_POST['mail'];
                            $obj_of_req .= " AND email=\"$temp\" ";
                        }
                    }
                }
                if (isset($_POST['qualite'])) {
                    if ($_POST['qualite'] != ""){
                        if ($first) {
                            $temp = $_POST['qualite'];
                            $obj_of_req .= " WHERE qualite=\"$temp\" ";
                            $first = false;
                        }
                        else {
                            $temp = $_POST['qualite'];
                            $obj_of_req .= " AND qualite=\"$temp\" ";
                        }
                    }
                }

                try
                {
                
                    $bdd = new PDO('mysql:host=localhost;dbname=contact;charset=utf8', 'root', '');
                    $reponse = $bdd->query("SELECT * FROM contact$obj_of_req;");
                    while ($donnees = $reponse->fetch())
                    {
                        $nom = $donnees['nom'];
                        $prenom = $donnees['prenom'];
                        $numero = $donnees['numero'];
                        $mail = $donnees['email'];
                        $qualite = $donnees['qualite'];
                        echo "<p>$nom $prenom | $numero | $mail | $qualite </p>";
                    }
                    $reponse->closeCursor();
                    
                }
                catch(Exception $e)
                {
                        die('Erreur : '.$e->getMessage());
                }
            ?>
        </div>
    </div>

    <script src="./../js/goto_rechercher.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
