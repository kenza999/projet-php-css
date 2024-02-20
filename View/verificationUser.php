<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des propositions</title>
</head>
<body>


    <!-- Liste des propositions existantes -->
    <h2>Liste des propositions</h2>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Budget</th>
                <th>Date limite</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($verification as $verifications): ?>
                <tr>
                <td><?= isset($verifications['username']) ? htmlspecialchars($verifications['username']) : '' ?></td>
                <td><?= isset($verifications['nom']) ? htmlspecialchars($verifications['nom']) : '' ?></td>
                <td><?= isset($verifications['email']) ? htmlspecialchars($verifications['email']) : '' ?></td>
                <td><?= isset($verifications['carte_didentite']) ? htmlspecialchars($verifications['carte_didentite']) : '' ?></td>
                <td><img style="height: 50px; width: 50px;" src="Public/image/<?= isset($verifications['carte_didentite']) ? $verifications['carte_didentite'] : '' ?>" alt="carte d'identité"></td>
                <td><?= isset($verifications['date_de_naissance']) ? htmlspecialchars($verifications['date_de_naissance']) : '' ?></td>
                <td><?= isset($verifications['genre']) ? htmlspecialchars($verifications['genre']) : '' ?></td>
                <td><img style="height: 50px; width: 50px;" src="Public/photoProfile/<?= isset($verifications['photo']) ? $verifications['photo'] : '' ?>" alt="photo de profile"></td>
                <td><?= isset($verifications['nationalite']) ? htmlspecialchars($verifications['nationalite']) : '' ?></td>
                <td>
                    <!-- Les boutons pour mettre à jour et supprimer nécessitent une implémentation supplémentaire -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $verifications['user_id'] ?>">
                        <button type="submit" name="btn">utilisateur verifier</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    </body>
    </html>