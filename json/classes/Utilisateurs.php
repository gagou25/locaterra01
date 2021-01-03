<?php

class Utilisateurs implements JsonSerializable

{
    private $id_utilisateur = 0;
    private $nom = null;
    private $prenom = null;
    private $mail = null;
    private $mdp = null;
    private $sexe = null;
    private $age = null;

    public function __construct($id_utilisateur = 0, $nom=null, $prenom =null, $mail=null, $mdp=null, $sexe=null, $age=null){
        $this->id_utilisateur 	= $id_utilisateur;
        $this->nom 	= $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->mdp = $mdp;
        $this->sexe = $sexe;
        $this->age = $age;
    }
    public function getId_utilisateur (){return $this->id_utilisateur;}
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getMail(){return $this->mail;}
    public function getMdp(){return $this->mdp;}
    public function getSexe(){return $this->sexe;}
    public function getAge(){return $this->age;}

    public function setId_utilisateur($id_utilisateur){$this->id_utilisateur=$id_utilisateur;}
    public function setNom($nom){$this->nom=$nom;}
    public function setPrenom($prenom){$this->prenom=$prenom;}
    public function setMail($mail){$this->mail=$mail;}
    public function setMdp($mdp){$this->mdp=$mdp;}
    public function setSexe($sexe){$this->sexe=$sexe;}

    public function jsonSerialize(){ return get_object_vars($this); }
}
?>


