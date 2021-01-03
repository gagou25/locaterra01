<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'cnx.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";


if (isset($_POST['envoyer_association'])) {
    $image = $_FILES['image']['name'];

    if (move_uploaded_file($_FILES['image']['tmp_name'], "imagesLogo/" . $image)) {
        $sql = "INSERT INTO associations(nom_association, adresse_association, mail_association, telephone_association, secteur_activite, description, logo, mdp_association) "
            . " VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST["association.nom"]);
        $requete->bindValue(2, $_POST["association.adresse"]);
        $requete->bindValue(3, $_POST["association.mail"]);
        $requete->bindValue(4, $_POST["association.tel"]);
        $requete->bindValue(5, $_POST["association.secteur"]);
        $requete->bindValue(6, $_POST["association.description"]);
        $requete->bindValue(7, $image);
        $requete->bindValue(8, $_POST["association.mdp"]);

        echo $requete->execute();
    } else {
        echo -2;
    }
} else {
    echo -1;
}
