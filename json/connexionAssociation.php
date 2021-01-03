<?php


require_once 'cnx.php';

session_start();
if (isset($_POST['envoyer_connexion'])) {
    if (empty($_POST['mail_connexion'])) {
        echo "Le champ Mail est vide.";
    } else {

        if (empty($_POST['mdp_connexion'])) {
            echo "Le champ Mot de passe est vide.";
        } else {

            $Mail = htmlentities($_POST['mail_connexion'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = htmlentities($_POST['mdp_connexion'], ENT_QUOTES, "ISO-8859-1");

            $mysqli = mysqli_connect("7301b.myd.infomaniak.com", "7301b_admin", "adminlocaterra", "7301b_bddlocaterra");

            if (!$mysqli) {
                echo "Erreur de connexion à la base de données.";
            } else {

                $Requete = mysqli_query($mysqli, "SELECT mail_association, mdp_association FROM associations WHERE  mail_association = '" . $Mail . "' AND mdp_association = '" . $MotDePasse . "' ");


                if (mysqli_num_rows($Requete) == 0) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {

                    $_SESSION['mail_connexion'] = $Mail;
                    echo "Vous êtes à présent connecté !";
                }
            }
        }
    }
}