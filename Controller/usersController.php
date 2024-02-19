<?php
class usersController{

    private $usersModel;
    
    public function __construct(usersModel $user){
        $this->usersModel = $user;
    }
    public function acceuil(){
      include_once "View\index.php";
    }
    public function freelance(){
      include_once "View/freelancer-opportunities.php";
    }
    public function connecter(){
      if (isset($_SESSION['freelance'])){
        echo "Vous  êtes déjà connecté.";
        
      }else{
        $connecter = $this->usersModel->connecter();
        include_once "View\connexionView.php";

      }
    }

  
    public function register() {
      // Vérifier si le formulaire est soumis
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Récupérer les données du formulaire
          $username = $_POST['username'];
          $nom = $_POST['nom'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          // $carte_didentite = $_POST['carte_didentite'];
          $date_de_naissance = $_POST['date_de_naissance'];
          $genre = $_POST['genre'];
          $description_dutilisateur = $_POST['description_dutilisateur'];
          $nationalite = $_POST['nationalite'];
          $competenceID = $_POST['competences'];
  
          $carte_didentite = $_FILES['photo']['name']; // Nom du fichier
          $carte_didentite_tmp = $_FILES['carte_didentite']['tmp_name']; // Emplacement temporaire du fichier
          $carte_didentite_destination = "Public/image/" . $carte_didentite; // Destination finale du fichier sur le serveur
          move_uploaded_file($carte_didentite_tmp, $carte_didentite_destination); // Déplacer le fichier vers sa destination finale
  
          // Traitement du fichier d'identité téléchargé
          $photo = $_FILES['photo']['name']; // Nom du fichier
          $photo_tmp = $_FILES['photo']['tmp_name']; // Emplacement temporaire du fichier
          $photo_destination = "Public/photoProfile/" . $photo; // Destination finale du fichier sur le serveur
          move_uploaded_file($photo_tmp, $photo_destination); // Déplacer le fichier vers sa destination finale
  
          // Appel de la méthode register du modèle utilisateur
          $register = $this->usersModel->register($username, $nom, $email, $password, $carte_didentite, $date_de_naissance, $genre, $photo, $description_dutilisateur, $nationalite, $competenceID);
  
          if ($register) {
              // Redirection vers la page de connexion après une inscription réussie
              header('Location: index.php?page=connexionView');
              exit();
          } else {
              // Afficher un message d'erreur si l'inscription a échoué
              $_SESSION['error'] = "L'inscription a échoué. Veuillez réessayer.";
          }
      }
  
      include_once "View/register.php";
  }
    public function logout(){
      $logout = $this->usersModel->logout();
    }
    
}