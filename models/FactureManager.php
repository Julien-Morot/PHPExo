<?php

namespace models;

class FactureManager extends Manager {

    public function getFacture($id)
    {
        // Connexion à la base de données
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        // Requête
        $request = $db->prepare('SELECT id, DateFacture, Montant, idFacture');
        // Exécute la requête
        $request->execute(array($id));
        // Résultat
        $Facture = $request->fetch();
        return new Facture($Facture['id'], $Facture['DateFacture'], $Facture['Montant'], $Facture['idFacture']);
    }


}