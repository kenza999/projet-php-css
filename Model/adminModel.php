<?php
//Class adminModel
class adminModel{
    //Database connection variable
    protected $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=portfolio_kenza', 'root', '', array(
         PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));


    }
     //fonction pour récupérer les données de l'admin à partir de son id
     public function connectAdmin(){

        if( $_POST ){
    // extract($_POST);
    if( !empty($_POST["email"]) && !empty($_POST["password"]) ){
        /* Pour récupérer, en base de données, l'abonné dont le username a été tapé dans le formulaire 
            on doit exécuter la requête SQL : SELECT * FROM abonne WHERE username = '$username'
            La méthode prepare() de l'objet $pdo permet d'écrire une requête paramétrée (= au lieu de mettre directement
            la valeur du username, on met un paramètre, :username)
        */
        $pdostatement = $this->db->prepare("SELECT * FROM admin_table WHERE email = :username");

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
            
            header('Location:index?page=dashboard_admin');
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

public function registerAdmin(){
    if( $_POST ){

    try {
        // Nettoyage et validation des entrées
        $user_username = htmlspecialchars(stripslashes(trim($_POST['username'])));
        $user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $user_password = $_POST['password'];

        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Format d'email invalide");
        }
        $check_email_query =$this->db->prepare("SELECT * FROM admin_table WHERE email = :test");
        $check_email_query->bindParam(":test", $user_email , PDO::PARAM_STR );
        $check_email_query->execute();
        if ($check_email_query->rowCount()) {
            throw new Exception("Cet email est déjà utilisé.");
        }
        // Hachage du mot de passe
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

        // Préparation de la requête SQL pour éviter les injections SQL
        $stmt = $this->db->prepare("INSERT INTO admin_table (username, email, password_hash) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $user_username);
        $stmt->bindParam(':email', $user_email);
        $stmt->bindParam(':password', $hashed_password);

        // Exécution de la requête
        $stmt->execute();

        echo "Utilisateur enregistré avec succès";
        
        header('Location: index.php?page=connectAdmin');
        exit();
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    } catch(Exception $e) {
        echo "Erreur: " . $e->getMessage();
    }
}   

}

    public function logout() {
//  On vide le contenu de l'utilisateur connecté
    session_unset();
// Détruire toutes les données de session
session_destroy();

// Rediriger vers la page de connexion ou d'accueil
header("Location: index.php");
exit();
}
}