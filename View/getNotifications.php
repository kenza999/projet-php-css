<?php
require_once 'chemin/vers/initialisation.php'; // Chemin vers votre script d'initialisation

$clientID = $_GET['clientID'] ?? null; // Récupérer l'ID du client, sécuriser cette valeur dans une application réelle

if ($clientID) {
    // Supposons que vous avez une classe NotificationController qui s'occupe de la logique
    $controller = new NotificationController();
    $notifications = $controller->getUnreadNotifications($clientID);

    // Supposons que vous voulez retourner les notifications en JSON
    header('Content-Type: application/json');
    echo json_encode($notifications);
} else {
    // Gérer l'erreur de clientID manquant
    echo json_encode(['error' => 'Client ID is required']);
}
?>
