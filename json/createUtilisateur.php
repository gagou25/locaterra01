<?php

header("Access-Control-Allow-Origin: *");

require_once 'cnx.php';
/*
echo"<pre>";
print_r($_POST);
echo"</pre>";
 */
if (isset($_POST['envoyer_utilisateur'])) {
    $sql = "INSERT INTO utilisateurs(prenom, nom, mail, sexe, age, mdp) "
        . " VALUES(?, ?, ?, ?, ?, ?)";
    $requete = $pdo->prepare($sql);
    $requete->bindParam(1, $_POST['prenom']);
    $requete->bindParam(2, $_POST['nom_utilisateur']);
    $requete->bindParam(3, $_POST['mail_utilisateur']);
    $requete->bindParam(4, $_POST['sexe']);
    $requete->bindParam(5, $_POST['age']);
    $requete->bindParam(6, $_POST['mdp']);
    echo $requete->execute();
} else {
    echo -1;
}

