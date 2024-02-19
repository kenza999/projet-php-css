<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Client</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mt-5">Connexion client</h2>
                <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="mt-4">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur:</label>
                        <input type="text" class="form-control" id="username" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Mot de passe:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Connexion</button>
                    <div class="mt-3">
                        <a href="index.php?page=reset_password.php">Mot de passe oublié ?</a>
                        <br>
                        <a href="index.php?page=register.php">Créer un compte</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
