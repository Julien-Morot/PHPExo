<?php

namespace models;

class Post {

    /* Attributs */
    private $id;
    private $author;
    private $title;
    private $content;
    private $added_datetime;
    private $updated_datetime;
    private $typeMission;
    private $budgetMax;

    /* Constantes */

    /* Constructeur */
    public function __construct($id, $author, $title, $content, $added_datetime, $updated_datetime, $typeMission, $budgetMax) {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->added_datetime = $added_datetime;
        $this->updated_datetime = $updated_datetime;
        $this->type_mission = $typeMission;
        $this->budget_max = $budgetMax;
    }

    /* Getters */
    public function getId() {
        return $this->id;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function getTitle() {
        return $this->title;
    }
    public function getContent() {
        return $this->content;
    }
    public function getAddedDatetime() {
        return $this->added_datetime;
    }
    public function getUpdatedDatetime() {
        return $this->updated_datetime;
    }
    public function getTypeMission() {
        return $this->type_mission;
    }
    public function getBudgetMax() {
        return $this->budget_max;
    }

    /* Setters */
    public function setId($id) {
        $this->id = $id;
    }
    public function setAuthor($author) {
        $this->author = $author;
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function setContent($content) {
        $this->content = $content;
    }
    public function setAddedDatetime($added_datetime) {
        $this->added_datetime = $added_datetime;
    }
    public function setUpdatedDatetime($updated_datetime) {
        $this->updated_datetime = $updated_datetime;
    }
    public function setTypeMission($typeMission) {
        $this->type_mission = $typeMission;
    }
    public function setBudgetMax($budgetMax) {
        $this->budget_max = $budgetMax;
    }
}