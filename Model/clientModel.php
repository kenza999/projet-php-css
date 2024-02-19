<?php

class clientModel{
    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=portfolio_kenza', 'root', '', array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

    }
    //fonction pour récupérer les données d'un client à partir de son id
    public function connecter(){

        if( $_POST ){
            // extract($_POST);
            if( !empty($_POST["email"]) && !empty($_POST["password"]) ){
                /* Pour récupérer, en base de données, l'abonné dont le username a été tapé dans le formulaire 
                    on doit exécuter la requête SQL : SELECT * FROM abonne WHERE username = '$username'
                    La méthode prepare() de l'objet $pdo permet d'écrire une requête paramétrée (= au lieu de mettre directement
                    la valeur du username, on met un paramètre, :username)
                */
                $pdostatement = $this->db->prepare("SELECT * FROM clients WHERE email = :username");
        
                /* La méthode prepare() retourne un objet PDOStatement qui va lié les paramètres de la requête a des valeurs */
                $pdostatement->bindValue(":username", $_POST["email"]);
        
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
                        $_SESSION["membre"] = $membre;
                        //ici puisqu'on est connecte on appel la fonction redirection vers la page profil
                    //    redirection("index.php");
                    
                    header('Location:index?page=dashboard_client');
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
    public function register($username, $nom, $email, $numero_telephone, 
    $carte_identite, $date_de_naissance, $genre, $photo_profil,
    $description, $nationalite, $numero_siret, $secteur_dactivite,
    $nom_de_lentreprise, $password_hash) {
        try {
            // Préparation de la requête SQL pour éviter les injections SQL
            $stmt = $this->db->prepare("INSERT INTO clients (username, nom, email, password_hash, numero_telephone,
            carte_identite, date_de_naissance, genre, photo_profil, description, nationalite, numero_siret, secteur_dactivite,
            nom_de_lentreprise) VALUES (:username, :nom, :email, :password_hash, :numero_telephone,
            :carte_identite, :date_de_naissance, :genre, :photo_profil, :description, :nationalite, :numero_siret, :secteur_dactivite,
            :nom_de_lentreprise)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $password_hash);
            $stmt->bindParam(':numero_telephone', $numero_telephone);
            $stmt->bindParam(':carte_identite', $carte_identite);
            $stmt->bindParam(':date_de_naissance', $date_de_naissance);
            $stmt->bindParam(':genre', $genre);
            $stmt->bindParam(':photo_profil', $photo_profil);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':nationalite', $nationalite);
            $stmt->bindParam(':numero_siret', $numero_siret);
            $stmt->bindParam(':secteur_dactivite', $secteur_dactivite);
            $stmt->bindParam(':nom_de_lentreprise', $nom_de_lentreprise);
            
            // Exécution de la requête
            $stmt->execute();
    
            // if (!isset($_SESSION["messages"])) {
            //     $_SESSION["messages"] = array();
            // }
            
            
            header('Location: index.php?page=connexion_client');
            exit();
        } catch(PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        } catch(Exception $e) {
            echo "Erreur: " . $e->getMessage();
        }
    }
    
        public function logout() {
               // Détruire toutes les données de session
    session_unset();
    // Détruire toutes les données de session
    session_destroy();

    // Rediriger vers la page de connexion ou d'accueil
    header("Location: index.php");
    exit();
}
}