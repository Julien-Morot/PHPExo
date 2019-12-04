<?php

namespace models;

class UserManager extends Manager {

    // Ajouter un utilisateur à la base de données
    public function addUser($pseudo, $password, $email, $grade)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('INSERT INTO users (pseudo, password, email, grade) VALUES (?, ?, ?, ?)');
        $request->execute(array($pseudo, $password, $email, $grade));
    }

    // Vérifier si le pseudo existe en base (fonction inscription)
    public function checkUserPseudo($pseudo)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
        $request->execute(array($pseudo));
        global $checkedUserPseudo;
        $checkedUserPseudo = $request->rowCount();
        return $checkedUserPseudo;
    }

    // Vérifier si l'email existe en base
    public function checkUserEmail($email)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('SELECT * FROM users WHERE email = ?');
        $request->execute(array($email));
        global $checkedUserEmail;
        $checkedUserEmail = $request->rowCount();
        return $checkedUserEmail;
    }


    // Vérifie si le pseudo existe en base (fonction connexion)
    public function checkUserParams($pseudo)
    {
        $db = $this->dbConnect();
        $request = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
        $request->execute(array($pseudo));
        global $checkedUserParams;
        $checkedUserParams = $request->fetch();
        return $checkedUserParams;
    }

    public function checkUserGrade($grade)
    {
        $db = $this->dbConnect($grade);
        $request = $db->prepare('SELECT * FROM users WHERE grade = ?');
        $request->execute(array($grade));
        global $checkedUserGrade;
        $checkedUserGrade = $request->fetch();
        return $checkedUserGrade;
    }

}