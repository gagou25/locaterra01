<?php

class Photos implements JsonSerializable

{
    private $id_photos = 0;
    private $nom_photo = null;
    private $extension = null;

    public function __construct($id_photos = 0, $nom_photo=null, $extension =null){
        $this->id_photos 	= $id_photos;
        $this->nom_photo 	= $nom_photo;
        $this->extension = $extension;
    }
    public function getId_photos (){return $this->id_photos;}
    public function getNom_photo(){return $this->nom_photo;}
    public function getExtension(){return $this->extension;}

    public function setId_photos($id_photos){$this->id_photos=$id_photos;}
    public function setNom_photo($nom_photo){$this->nom_photo=$nom_photo;}
    public function setExtension($extension){$this->extension=$extension;}


    public function jsonSerialize(){ return get_object_vars($this); }
}
?>