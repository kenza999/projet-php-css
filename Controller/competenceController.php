<?php 
class competenceController{
    private $competencesModel;

    public function __construct(competencesModel $competencesModel)
    {
        $this->competencesModel = $competencesModel;
    }
    
    public function afficheCompetences(){
        $listeCompetences = $this->competencesModel->afficheCompetences();
        include_once('View/register.php'); 
  
    }
}