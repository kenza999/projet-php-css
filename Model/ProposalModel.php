<?php

class ProposalModel {
    protected $db;

    // Constructeur pour initialiser la connexion à la base de données
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=portfolio_kenza', 'root', '', array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }

    // Récupère toutes les propositions de la base de données
    public function getAllProposals($freelanceId) {
        // Définir la requête SQL pour sélectionner les propositions, y compris celles sans jointure
        $sql = "SELECT proposals.* 
        FROM proposals
        LEFT JOIN clientfreelancerelations ON proposals.id = clientfreelancerelations.ProjectID AND clientfreelancerelations.FreelanceID = :freelanceId
        WHERE clientfreelancerelations.ProjectID IS NULL";

$stmt = $this->db->prepare($sql);
$stmt->execute(['freelanceId' => $freelanceId]);
$proposals = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Retourne les offres récupérées
        return $proposals;
    }
    

    // Ajoute une nouvelle proposition à la base de données
    public function addProposal($missionName, $description, $budget, $missionDuration, $missionStart, $remoteWork, $location, $skillsRequired, $id_client) {
        $query = "INSERT INTO proposals (missionName, description, budget, missionDuration, missionStart, remoteWork, location, skillsRequired, id_client) VALUES (:missionName, :description, :budget, :missionDuration, :missionStart, :remoteWork, :location, :skillsRequired, :id_client)";

        $statement = $this->db->prepare($query);
        $statement->bindParam(':missionName', $missionName);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':budget', $budget);
        $statement->bindParam(':missionDuration', $missionDuration);
        // $statement->bindParam(':created_at', $created_at);
        // $statement->bindParam(':updated_at', $updated_at);
        $statement->bindParam(':missionStart', $missionStart);
        $statement->bindParam(':remoteWork', $remoteWork);
        $statement->bindParam(':location', $location);
        $statement->bindParam(':skillsRequired', $skillsRequired);
        $statement->bindParam(':id_client', $id_client );
        $statement->execute();
    }

    // Met à jour une proposition existante
    public function updateProposal($id, $title, $description, $budget, $deadline) {
        $query = "UPDATE proposals SET title = :title, description = :description, budget = :budget, deadline = :deadline WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':title', $title);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':budget', $budget);
        $statement->bindParam(':deadline', $deadline);
        return $statement->execute();
    }

    // Supprime une proposition de la base de données
    public function deleteProposal($id) {
        $query = "DELETE FROM proposals WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        return $statement->execute();
    }

    public function missionAccepter($Freelance, $ProjectID, $missionAccepter){
        $query = "INSERT INTO clientfreelancerelations  (FreelanceID, ProjectID, missionAccepter) VALUES (:FreelanceID, :ProjectID, :missionAccepter)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':FreelanceID', $Freelance);
        $statement->bindParam(':ProjectID', $ProjectID);
        $statement->bindParam(':missionAccepter', $missionAccepter);
        $statement->execute();
    }
}
