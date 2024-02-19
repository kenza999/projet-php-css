<?php

class NotificationModel {
    private $db; // Variable pour stocker la connexion à la base de données

    public function __construct($dbConnection) {
        $this->db = $dbConnection; // Initialiser avec une connexion à la base de données
    }

    // Récupérer les notifications non lues pour un client spécifique
    public function getUnreadNotifications($clientID) {
        $notifications = []; // Tableau pour stocker les résultats

        try {
            $stmt = $this->db->prepare("SELECT * FROM notification_id WHERE client_id = :clientID AND status = 'unread'");
            $stmt->bindParam(':clientID', $clientID, PDO::PARAM_INT);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $notifications[] = $row;
            }
        } catch (PDOException $e) {
            // Gérer l'erreur ou la logger
            error_log("Erreur lors de la récupération des notifications non lues : " . $e->getMessage());
        }

        return $notifications;
    }

    // Marquer les notifications comme lues pour un client spécifique
    public function markNotificationsAsRead($clientID) {
        try {
            $stmt = $this->db->prepare("UPDATE notifications SET status = 'read' WHERE client_id = :clientID");
            $stmt->bindParam(':clientID', $clientID, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            // Gérer l'erreur ou la logger
            error_log("Erreur lors de la mise à jour du statut des notifications : " . $e->getMessage());
        }
    }

    // Ajouter une nouvelle notification pour un client
    public function addNotification($clientID, $message) {
        try {
            $stmt = $this->db->prepare("INSERT INTO notifications (client_id, message, status) VALUES (:clientID, :message, 'unread')");
            $stmt->bindParam(':clientID', $clientID, PDO::PARAM_INT);
            $stmt->bindParam(':message', $message, PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            // Gérer l'erreur ou la logger
            error_log("Erreur lors de l'ajout d'une notification : " . $e->getMessage());
        }
    }

    // Supprimer une notification spécifique
    public function deleteNotification($notificationID) {
        try {
            $stmt = $this->db->prepare("DELETE FROM notifications WHERE id = :notificationID");
            $stmt->bindParam(':notificationID', $notificationID, PDO::PARAM_INT);
            $stmt->execute();
        } catch (PDOException $e) {
            // Gérer l'erreur ou la logger
            error_log("Erreur lors de la suppression d'une notification : " . $e->getMessage());
        }
    }
}
