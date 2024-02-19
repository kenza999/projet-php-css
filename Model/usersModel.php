<?php

class usersModel{
    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=portfolio_kenza', 'root', '', array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }


    public function connecter(){

        if( $_POST ){
            // extract($_POST);
            if( !empty($_POST["username"]) && !empty($_POST["password"]) ){
                /* Pour récupérer, en base de données, l'abonné dont le username a été tapé dans le formulaire 
                    on doit exécuter la requête SQL : SELECT * FROM abonne WHERE username = '$username'
                    La méthode prepare() de l'objet $pdo permet d'écrire une requête paramétrée (= au lieu de mettre directement
                    la valeur du username, on met un paramètre, :username)
                */
                $pdostatement = $this->db->prepare("SELECT * FROM users WHERE email = :username");
        
                /* La méthode prepare() retourne un objet PDOStatement qui va lié les paramètres de la requête a des valeurs */
                $pdostatement->bindValue(":username", $_POST["username"]);
        
                /* Ensuite avec la méthode execute() de l'objet $pdostatement, on va exécuter la requête SQL
                    La méthode execute() retourne un booléen (true si la requête s'est bien exécutée, false s'il y a eu une erreur)
                */
                $resultat = $pdostatement->execute();
        
                /*  La méthode rowCount() retourne le nombre de lignes renvoyées par la requête SQL : ici soit 0 soit 1 */
                if($resultat && $pdostatement->rowCount()){
                    /* Les résultats de la requête sont dans l'objet $pdostatement. On peut les récupérer avec 
                            la méthode fetch() : pour récupérer un enregistrement 
                            la méthode fetchAll() : pour récupérer un array de tous les enregistrements */
                    $membre = $pdostatement->fetch(PDO::FETCH_ASSOC);
                    if( password_verify($_POST["password"],$membre["password_hash"])){
                        $_SESSION["messages"]["success"][]  = "Bonjour " . $membre["username"] .  ", vous êtes connecté";
                        $_SESSION["freelance"] = $membre;
                        //ici puisqu'on est connecte on appel la fonction redirection vers la page profil
                    //    redirection("index.php");
                    
                    header('Location:index?page=dashboard');
                    } else {
                        $_SESSION["messages"]["danger"][] = "Le mot de passe ne correspond pas !";
                    }
                } else {
                    $_SESSION["messages"]["danger"][] = "Le username n'existe pas !";
                }
            } else {
                $_SESSION["messages"]["danger"][] = "Veuillez saisir le username et le mot de passe !";
            }
        }
        
        
    }
  

   public function register($username, $nom, $email, $password, $carte_didentite, $date_de_naissance, $genre, $photo, $description_dutilisateur, $nationalite, $competences){
    try {
        // Hachage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Préparation de la requête SQL pour éviter les injections SQL
        $stmt = $this->db->prepare("INSERT INTO users (username, nom, email, password_hash, carte_didentite, date_de_naissance, genre, photo, description_dutilisateur, nationalite) VALUES (:username, :nom, :email, :password, :carte_didentite, :date_de_naissance, :genre, :photo, :description_dutilisateur, :nationalite)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':carte_didentite', $carte_didentite);
        $stmt->bindParam(':date_de_naissance', $date_de_naissance);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':description_dutilisateur', $description_dutilisateur);
        $stmt->bindParam(':nationalite', $nationalite);
        
        // Exécution de la requête
        if ($stmt->execute()) {
            $Freelance = $this->db->lastInsertId();
            
            // Insertion des compétences dans la table competenceFreelance
            $var = $this->db->prepare("INSERT INTO competenceFreelance (competenceID, FreelanceID) VALUES (:competenceID, :FreelanceID)");
            foreach ($competences as $competence ){
                $var->bindParam(':competenceID', $competence);
                $var->bindParam(':FreelanceID', $Freelance);
                $var->execute();
            }

            // Redirection vers la page de connexion avec un message de succès
            $_SESSION["messages"]["success"][] = "Utilisateur enregistré avec succès";
            header('Location: index.php?page=connexionView');
            exit();
        } else {
            // En cas d'échec de l'insertion, afficher un message d'erreur
            $_SESSION["messages"]["danger"][] = "Erreur lors de l'enregistrement de l'utilisateur";
            // Pas de redirection ici
        }
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    } catch(Exception $e) {
        echo "Erreur: " . $e->getMessage();
    }
}

        public function logout() {
    // Détruire toutes les données de session
    session_unset();
    // Supprimer toutes les données de session
    session_destroy();

    // Rediriger vers la page de connexion ou d'accueil
    header("Location: index.php");
    exit();
}
}