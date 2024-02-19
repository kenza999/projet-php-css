<?php

session_start();

require_once 'Model\competencesModel.php';
require_once 'controller\competenceController.php';

require_once 'Model\usersModel.php';
require_once 'Controller\UsersController.php';

require_once 'Model\clientModel.php';
require_once 'Controller\clientController.php';

require_once 'Model\adminModel.php';
require_once 'Controller\adminController.php';

require_once 'Model\ProposalModel.php';
require_once 'Controller\proposalController.php';

$competencesModel = new  competencesModel();
$competenceController = new  competenceController($competencesModel);

$clientModel  = new clientModel();
$clientController  =  new  clientController($clientModel);

$usersModel = new UsersModel();
$usersController = new UsersController($usersModel);

$adminModel = new  adminModel();
$adminController = new  adminController($adminModel);

$ProposalModel =  new ProposalModel();
$proposalController = new proposalController($ProposalModel);

$page = isset($_GET['page']) ? $_GET['page'] : 'index';



switch ($page) {
    case 'index':
        $usersController->acceuil();
        break;

        //Pages Freelance

    case 'dashboard':
        $proposalController->getAllProposals();
        break;
    case 'freelancer-opportunities':
        $usersController->freelance();
        break;
        
    default:  // Erreur de page inexistante
        echo "Page introuvable";
        break;
    case 'connexionView':
        $usersController->connecter();
        break;

    case 'inscriptionView':
        $competenceController->afficheCompetences();
        $usersController->register();
        break;
        
    case 'logout':
        $usersController->logout();
        $clientController->logout();
        $adminController->logout();
        break;

        //Pages Client


    case 'connexion_client':
        $clientController->clientConnecter();
        break;
    case 'register_client':
        $clientController->register_client();
        break;
    case 'client_opportun':
        $clientController->clientAccueil();
        break;
    case 'dashboard_client':
        $clientController->dashboard_client();
        break;
          


    // Page addProposal
    
    case 'addProposal':
        $proposalController->addProposal();
        break;
    

    //Pages Admin

        case 'connectAdmin':
            $adminController->adminConnecter();
            break;
    case 'dashboard_admin':
        $adminController->dashboard_admin();
            break;
}
?>
    




