<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Connexion Admin</title>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<body>
    <!-- Inclusion de fichiers PHP pour la connexion et le menu admin -->
    

    <div id="formulaire">
        <h2>Connexion Administrateur :</h2><br/>

        <!-- Affichage des messages d'erreur ou de succès -->
        <?php
        if (isset($_GET['echec'])) {
            echo '<p class="error">Mauvais identifiant ou mot de passe.</p>';
        } elseif (isset($_GET['succes'])) {
            echo '<p class="success">Vous êtes maintenant connecté !</p>';
        }
        ?>
        

        <form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
            <label for="email">email :</label><br/>
            <input type="text" name="email" id="email" required/><br/><br/>
            <label for="password">Mot de Passe :</label><br/>
            <input type="password" name="password" id="mdp" required/><br/><br/>
            <input type="submit" value="Se Connecter"/>
        </form>
    </div>

    <script>
    $(document).ready(function(){
        $('#login').blur(function() {
            var login = $(this).val();
            if($.trim(login) != ''){
                $.ajax({
                    url: "check_login.php",
                    data: {'login': login},
                    success: function(data){
                        if(data == 'used'){
                            $("#login").css("border-color", "red").next(".error").remove();
                            $("<span class='error'>Ce login est déjà utilisé.</span>").insertAfter("#login");
                        } else {
                            $("#login").css("border-color", "green");
                            $("#login").next(".error").remove();
                        }
                    },
                    error: function(){
                        alert('Erreur lors du traitement de votre demande');
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
