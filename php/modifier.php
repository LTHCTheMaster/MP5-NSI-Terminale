<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="shortcut icon" href="./../img/icon.png" type="image/png">
</head>
<body>
    <div class="container">
        <div class="col-12" align="center"><h1>Modifier</h1></div>
        <div class="col-12" align="center">
            <button onclick="go_back();">Go Back</button>
        </div>

        <div class="col-12" align="center">
            <div class="col-9">
                <p>Anciennes informations enregistrées, utilisez le bouton rechercher pour avoir les vraies valeurs. Complétez ce que vous connaissez puis recherchez</p>
                <form action="./modifier.php" method="post">
                    <div id ="toflex">
                        <p>Nom: </p>
                        <input type="text" name="nom" id="nom"></input>
                    </div>
                    <div id ="toflex">
                        <p>Prénom: </p>
                        <input type="text" name="prenom" id="prenom"></input>
                    </div>
                    <div id ="toflex">
                        <p>Numéro de téléphone: </p>
                        <input type="text" name="numero" id="num"></input>
                    </div>
                    <div id ="toflex">
                        <p>email: </p>
                        <input type="text" name="mail" id="mail"></input>
                    </div>
                    <div id ="toflex">
                        <p>qualité: </p>
                        <input type="text" name="qualite" id="quality"></input>
                    </div>
                    <button type="submit" name="research">Rechercher</button>

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
                                if (isset($_POST['research'])) {
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
                                elseif(isset($_POST['modify'])) {
                                    $first_c = true;
                                    $obj_of_req_c = "";

                                    if (isset($_POST['nom_c'])) {
                                        if ($_POST['nom_c'] != ""){
                                            if ($first_c) {
                                                $temp_c = $_POST['nom_c'];
                                                $obj_of_req_c .= " SET nom=\"$temp_c\" ";
                                                $first_c = false;
                                            }
                                        }
                                    }
                                    if (isset($_POST['prenom_c'])) {
                                        if ($_POST['prenom_c'] != ""){
                                            if ($first_c) {
                                                $temp_c = $_POST['prenom_c'];
                                                $obj_of_req_c .= " SET prenom=\"$temp_c\" ";
                                                $first_c = false;
                                            }
                                            else {
                                                $temp_c = $_POST['prenom_c'];
                                                $obj_of_req_c .= " ,  prenom=\"$temp_c\" ";
                                            }
                                        }
                                    }
                                    if (isset($_POST['numero_c'])) {
                                        if ($_POST['numero_c'] != ""){
                                            if ($first_c) {
                                                $temp_c = $_POST['numero_c'];
                                                $obj_of_req_c .= " SET numero=\"$temp_c\" ";
                                                $first_c = false;
                                            }
                                            else {
                                                $temp_c = $_POST['numero_c'];
                                                $obj_of_req_c .= " ,  numero=\"$temp_c\" ";
                                            }
                                        }
                                    }
                                    if (isset($_POST['mail_c'])) {
                                        if ($_POST['mail_c'] != ""){
                                            if ($first_c) {
                                                $temp_c = $_POST['mail_c'];
                                                $obj_of_req_c .= " SET email=\"$temp_c\" ";
                                                $first_c = false;
                                            }
                                            else {
                                                $temp_c = $_POST['mail_c'];
                                                $obj_of_req_c .= " ,  email=\"$temp_c\" ";
                                            }
                                        }
                                    }
                                    if (isset($_POST['qualite_c'])) {
                                        if ($_POST['qualite_c'] != ""){
                                            if ($first_c) {
                                                $temp_c = $_POST['qualite_c'];
                                                $obj_of_req_c .= " SET qualite=\"$temp_c\" ";
                                                $first_c = false;
                                            }
                                            else {
                                                $temp_c = $_POST['qualite_c'];
                                                $obj_of_req_c .= " ,  qualite=\"$temp_c\" ";
                                            }
                                        }
                                    }
                                    $bdd->query("UPDATE contact$obj_of_req_c$obj_of_req;");
                                }
                                
                            }
                            catch(Exception $e)
                            {
                                    die('Erreur : '.$e->getMessage());
                            }
                        ?>
                        <p>Nouvelles informations à enregistrer. Appuyez sur modifier une fois fini</p>
                        <div id ="toflex">
                            <p>Nom: </p>
                            <input type="text" name="nom_c" id="nom"></input>
                        </div>
                        <div id ="toflex">
                            <p>Prénom: </p>
                            <input type="text" name="prenom_c" id="prenom"></input>
                        </div>
                        <div id ="toflex">
                            <p>Numéro de téléphone: </p>
                            <input type="text" name="numero_c" id="num"></input>
                        </div>
                        <div id ="toflex">
                            <p>email: </p>
                            <input type="text" name="mail_c" id="mail"></input>
                        </div>
                        <div id ="toflex">
                            <p>qualité: </p>
                            <input type="text" name="qualite_c" id="quality"></input>
                        </div>
                        <button type="submit" name="modify">Modifier</button>
                </form>
            </div>
        </div>
    </div>

    <script src="./../js/go_back.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
