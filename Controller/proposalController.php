<?php
class proposalController{
    private $proposalModel;

    public function __construct(ProposalModel $user){
        $this->proposalModel = $user;
    }

    // Ajouter une proposition de projet
    // pour faire une insertion
    public function addProposal(){
        if (isset($_SESSION['membre'])) {
            if(isset($_POST['membre'])){
                $missionName = $_POST['missionName'];
                $description = $_POST['description'];
                $budget = $_POST['budget'];
                $missionDuration = $_POST['missionDuration'];
                $missionStart = $_POST['missionStart'];
                $remoteWork = $_POST['remoteWork'];
                $location = $_POST['location'];
                $skillsRequired = $_POST['skillsRequired'];
                $id_client = $_SESSION['membre']['id'];

                $addProposal = $this->proposalModel->addProposal($missionName, $description, $budget, $missionDuration, $missionStart, $remoteWork, $location, $skillsRequired, $id_client);

                // Ici, on suppose que vous avez une logique pour déterminer si $membre["username"] est défini.
                // Pour cet exemple, assurez-vous que $membre["username"] est correctement récupéré et défini.
                
                // Stockage du message de succès dans la session pour un affichage ultérieur
                $_SESSION["messages"]["success"][] = "Mission ajoutée avec succès !";
                
                // Redirection ou affichage du message directement ici
                // Pour afficher directement ici, vous pouvez utiliser :
                echo "<div class='success-message'>Mission ajoutée avec succès !</div>";

            } 

            include_once "View/addProposal.php";
        } else {
            echo 'Vous ne pouvez pas accéder à cette page';
        }
    }

    // getAllProposals
    public function getAllProposals() {
        if (isset($_SESSION['freelance'])){

            $freelanceId =  $_SESSION['freelance']['user_id'];
            $addProposal = $this->proposalModel->getAllProposals($freelanceId);
            if (isset($_POST['accepted'])) {
                $Freelance = $_SESSION['freelance']['user_id'];
                $missionAccepter = $_POST['accepted'];
                $ProjectID = $_POST['id_candidature'];
                $this->proposalModel->missionAccepter($Freelance, $ProjectID, $missionAccepter);
                header("Refresh:0");
            }
            include_once "View/dashboard.php";
        }
         else {
        echo 'Vous ne pouvez pas accéder à cette page';
    }

        
}
}