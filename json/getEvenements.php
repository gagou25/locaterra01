<?php
require_once('classes/Evenements.php');
require_once 'cnx.php';

$sql = "SELECT * FROM evenements";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$retour = json_encode($results);

echo $retour;

?>



