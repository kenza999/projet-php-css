<?php

class competencesModel{
    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=portfolio_kenza', 'root', '', array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }
    
    public  function afficheCompetences(){  
        try {
            $stmt = $this->db->prepare("SELECT * FROM competences");
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            return $row;
        } catch (PDOException $e) {
            // Gérer l'erreur ou la logger
            error_log("Erreur lors de la récupération des competences non lues : " . $e->getMessage());
        }

    }
}