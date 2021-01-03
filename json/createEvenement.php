<?php

header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
/*
echo"<pre>";
print_r($_POST);
echo"</pre>";
 */
if (isset($_POST['envoyer_evenement'])) {
    $sql = "INSERT INTO evenements (nom_evenement, adresse_evenement, description_evenement, heure_debut, heure_fin, date) "
        . " VALUES(?, ?, ?, ?, ?, ?)";
    $requete = $pdo->prepare($sql);
    $requete->bindParam(1, $_POST['nom_evenement']);
    $requete->bindParam(2, $_POST['adresse_evenement']);
    $requete->bindParam(3, $_POST['description_evenement']);
    $requete->bindParam(4, $_POST['hdebut']);
    $requete->bindParam(5, $_POST['hfin']);
    $requete->bindParam(6, $_POST['date_evenement']);
    echo $requete->execute();
} else {
    echo -1;
}
