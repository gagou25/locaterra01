<?php

class Associations implements JsonSerializable

{
    private $id_association = 0;
    private $nom_association = null;
    private $mail_association = null;
    private $adresse_association = null;
    private $telephone_association = null;
    private $secteur_activite = null;
    private $description = null;
    private $mdp_association = null;
    private $logo = null;
    private $lat_association = null;
    private $long_association = null;

    public function __construct($id_association = 0, $nom_association=null, $mail_association =null, $adresse_association=null, $telephone_association=null, $secteur_activite=null, $description=null, $mdp_association=null, $logo =null, $lat_association=null, $long_association=null){
        $this->id_association 	= $id_association;
        $this->nom_association 	= $nom_association;
        $this->mail_association = $mail_association;
        $this->adresse_association = $adresse_association;
        $this->telephone_association = $telephone_association;
        $this->secteur_activite = $secteur_activite;
        $this->description = $description;
        $this->mdp_association = $mdp_association;
        $this->logo = $logo;
        $this->lat_association = $lat_association;
        $this->long_association = $long_association;
    }
    public function getId_association (){return $this->id_association;}
    public function getNom_association (){return $this->nom_association ;}
    public function getMail_association(){return $this->mail_association;}
    public function getAdresse_association(){return $this->adresse_association;}
    public function getTelephone_association(){return $this->telephone_association;}
    public function getSecteur_activite(){return $this->secteur_activite;}
    public function getDescription(){return $this->description;}
    public function getMdp_association(){return $this->mdp_association;}
    public function getLogo(){return $this->logo;}
    public function getLat_association(){return $this->lat_association;}
    public function getLong_association(){return $this->description;}

    public function setId_association($id_association){$this->id_association=$id_association;}
    public function setNom_association($nom_association){$this->nom_association=$nom_association;}
    public function setMail_association($mail_association){$this->mail_association=$mail_association;}
    public function setAdresse_association($adresse_association){$this->adresse_association=$adresse_association;}
    public function setTelephone_association($telephone_association){$this->telephone_association=$telephone_association;}
    public function setSecteur_activite($secteur_activite){$this->secteur_activite=$secteur_activite;}
    public function setDescription($description){$this->description=$description;}
    public function setMdp_association($mdp_association){$this->mdp_association=$mdp_association;}
    public function setLogo($logo){$this->logo=$logo;}
    public function setLat_association($lat_association){$this->lat_association=$lat_association;}
    public function setLong_association($description){$this->description=$description;}


    public function jsonSerialize(){ return get_object_vars($this); }
}
?>