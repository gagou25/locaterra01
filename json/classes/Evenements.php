<?php

require_once('Utilisateurs.php');
require_once('Associations.php');
require_once('Photos.php');

class Evenements implements JsonSerializable

{
    private $id_evenement = 0;
    private $nom_evenement = null;
    private $adresse_evenement = null;
    private $description_evenement = null;
    private $heure_debut = null;
    private $heure_fin = null;
    private $date = null;
    private $lat_evenement = null;
    private $long_evenement = null;
    private $nombre_participant = null;

    private $lesPhotos = array();
    private $lesParticipants = array();
    private $association_organisatrice = null;

    public function __construct($id_evenement = 0, $nom_evenement = null, $adresse_evenement = null,  $description_evenement = null, $heure_debut = null, $heure_fin = null, $date = null, $lat_evenement = null, $long_evenement = null, $nombre_participant = null){
        $this->id_evenement = $id_evenement;
        $this->nom_evenement = $nom_evenement;
        $this->adresse_evenement = $adresse_evenement;
        $this->description_evenement = $description_evenement;
        $this->heure_debut = $heure_debut;
        $this->heure_fin = $heure_fin;
        $this->date = $date;
        $this->lat_evenement = $lat_evenement;
        $this->long_evenement = $long_evenement;
        $this->nombre_participant = $nombre_participant;
    }
    public function getId_evenement (){return $this->id_evenement;}
    public function getNom_evenement (){return $this->nom_evenement;}
    public function getAdresse_evenement(){return $this->adresse_evenement;}
    public function getDescription_evenement(){return $this->description_evenement;}
    public function getHeure_debut(){return $this->heure_debut;}
    public function getHeure_fin(){return $this->heure_fin;}
    public function getDate(){return $this->date;}
    public function getLat_evenement(){return $this->lat_evenement;}
    public function getLong_evenement(){return $this->long_evenement;}
    public function getNombre_participant(){return $this->nombre_participant;}
    public function getLesPhotos (){return $this->lesPhotos ;}
    public function getLesParticipants(){return $this->lesParticipants;}
    public function getAssociation_organisatrice(){return $this->association_organisatrice;}


    public function setId_evenement($id_evenement){$this->id_evenement=$id_evenement;}
    public function setNom_evenement($nom_evenement){$this->nom_evenement=$nom_evenement;}
    public function setAdresse_evenement($adresse_evenement){$this->adresse_evenement=$adresse_evenement;}
    public function setDescription_evenement($description_evenement){$this->description_evenement=$description_evenement;}
    public function setHeure_debut($heure_debut){$this->heure_debut=$heure_debut;}
    public function setHeure_fin($heure_fin){$this->heure_fin=$heure_fin;}
    public function setDate($date){$this->date=$date;}
    public function setLat_evenement($lat_evenement){$this->lat_evenement=$lat_evenement;}
    public function setLong_evenement($long_evenement){$this->long_evenement=$long_evenement;}
    public function setNombre_participant($nombre_participant){$this->nombre_participant=$nombre_participant;}
    public function setLesPhotos($lesPhotos){$this->lesPhotos=$lesPhotos;}
    public function setLesParticipants($lesParticipants){$this->lesParticipants=$lesParticipants;}
    public function setAssociation_organisatrice($association_organisatrice){$this->association_organisatrice=$association_organisatrice;}


    public function jsonSerialize(){ return get_object_vars($this); }
}
?>