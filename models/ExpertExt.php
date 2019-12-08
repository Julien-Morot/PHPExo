<?php

namespace models;

class ExpertExt {

    /* Attributs */
    private $id;
    private $nom;
    private $prenom;
    private $CoutJourn;



    /* Constantes */

    /* Constructeur */
    public function __construct($id, $nom, $prenom) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->CoutJourn = $CoutJourn;

    }

    /* Getters */
    public function getId() {
        return $this->id;
    }
    public function getNomExpertExt() {
        return $this->$nom;
    }
    public function getPrenomExpertExt() {
        return $this->$prenom;
    }
    public function getCoutJourn() {
        return $this->$CoutJourn;
    }
  
  

    /* Setters */
    public function setId($id) {
        $this->id = $id;
    }
    public function setNomExpertExt($nom) {
        $this->nom = $nom;
    }
    public function setPrenomExpertExt($prenom) {
        $this->prenom = $prenom;
    }
    public function setCoutJourn($CoutJourn) {
        $this->CoutJourn = $CoutJourn;
    }
   
}