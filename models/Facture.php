<?php

namespace models;

class Facture {

    /* Attributs */
    private $id;
    private $DateFacture;
    private $Montant;
    private $idFacture;


    /* Constantes */

    /* Constructeur */
    public function __construct($id, $DateFacture, $Montant, $idFacture) {
        $this->id = $id;
        $this->DateFacture = $DateFacture;
        $this->Montant = $Montant;
        $this->idFacture = $idFacture;
        

    }

    /* Getters */
    public function getId() {
        return $this->id;
    }
    public function getDateFacture() {
        return $this->$DateFacture;
    }
    public function getMontant() {
        return $this->$Montant;
    }
    public function getIdFacture(){
        return $this->idFacture;
    }
  

    /* Setters */
    public function setId($id) {
        $this->id = $id;
    }
    public function setDateFacture($DateFacture) {
        $this->DateFacture = $DateFacture;
    }
    public function setMontant($Montant) {
        $this->Montant = $Montant;
    }
    public function setIdFacture($idFacture){
        $this->idFacture = $idFacture;
    }
   
}