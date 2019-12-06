<?php

namespace models;

class Commerciaux {

    /* Attributs */
    private $id;
    private $nameMission;

    /* Constantes */

    /* Constructeur */
    public function __construct($id, $nameMission) {
        $this->id = $id;
        $this->nameMission = $v;

    }

    /* Getters */
    public function getId() {
        return $this->id;
    }
    public function getNameMission() {
        return $this->$nameMission;
    }
  

    /* Setters */
    public function setId($id) {
        $this->id = $id;
    }
    public function setAuthor($nameMission) {
        $this->nameMission = $nameMission;
    }
   
}