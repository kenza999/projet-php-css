<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class clientController{
    private $clientModel ;

    public function __construct(clientModel $user) {
        $this->clientModel = $user;
    }
        public function clientConnecter(){
            $clientConnecter = $this->clientModel->connecter();
            include_once "View/connexion_client.php";
          }
          public function register_client(){

            try{
                if (isset($_POST['submit'])) {
                $username = $_POST['username'];
                $nom = $_POST['nom'];
                $email = $_POST['email'];
                $numero_telephone = $_POST['numero_telephone'];
                $carte_identite = $_FILES['carte_identite']['name']; // Si vous voulez obtenir le nom du fichier
                $date_de_naissance = $_POST['date_de_naissance'];
                $genre = $_POST['genre'];
                $photo_profil = $_FILES['photo']['name']; // Si vous voulez obtenir le nom du fichier
                $description = $_POST['description'];
                $nationalite = $_POST['nationalite'];
                $numero_siret = $_POST['numero_siret'];
                $secteur_dactivite = $_POST['secteur_dactivite'];
                $nom_de_lentreprise = $_POST['nom_de_lentreprise'];
                $password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                $test = $this->clientModel->register(
                    $username, 
                    $nom, 
                    $email, 
                    $numero_telephone, 
                    $carte_identite, 
                    $date_de_naissance, 
                    $genre, 
                    $photo_profil,
                    $description, 
                    $nationalite, 
                    $numero_siret, 
                    $secteur_dactivite,
                    $nom_de_lentreprise, 
                    $password_hash
                );
             }
                
            }catch (PDOException $e) {
                // Afficher les détails de l'erreur MySQL
                echo "Erreur MySQL : " . $e->getMessage();
                
                // Journaliser l'erreur dans un fichier
                error_log("Erreur lors de l'inscription du client : " . $e->getMessage(), 3, "errors.log");
            }
        
            include_once "View/register_client.php";
       
    }
        //affichage de la page d'accueil du client pour se connecter/s'inscrire
        public function clientAccueil(){
            include_once 'View/client_opportun.php';
        }
        public function dashboard_client(){
            include_once 'View/dashboard_client.php';
        }
    
         // logout admin
         public function logout(){
        $logout = $this->clientModel->logout();
         }
 
}