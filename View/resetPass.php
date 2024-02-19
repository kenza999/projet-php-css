<?php
$token = '';

// Si la page est chargée avec un token en GET (depuis le lien dans l'email)
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
    $token = $_GET['token'];
}

// Traitement du formulaire soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['token']) && isset($_POST['new_password'])) {
        $new_password = $_POST['new_password'];
        $token = $_POST['token'];

        // Reste du code de traitement...
    } else {
        echo "Erreur : Token non fourni ou mot de passe manquant.";
        exit;
    }
}
?>

<?php if (!empty($token)): ?>
    <form action="reset_password.php" method="post">
        <label for="new_password">Nouveau mot de passe:</label>
        <input type="password" id="new_password" name="new_password" required>
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
        <input type="submit" value="Réinitialiser le mot de passe">
    </form>
<?php else: ?>
    <p>Erreur : Token non fourni.</p>
<?php endif; ?>
