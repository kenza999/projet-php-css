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
            <?php foreach ($proposals as $proposal): ?>
            <tr>
                <td><?= htmlspecialchars($proposal['title']) ?></td>
                <td><?= htmlspecialchars($proposal['description']) ?></td>
                <td><?= htmlspecialchars($proposal['budget']) ?></td>
                <td><?= htmlspecialchars($proposal['deadline']) ?></td>
                <td>
                    <!-- Les boutons pour mettre à jour et supprimer nécessitent une implémentation supplémentaire -->
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $proposal['id'] ?>">
                        <button type="submit" name="delete">Supprimer</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    </body>
    </html>