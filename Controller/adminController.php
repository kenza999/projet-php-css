<?php
class adminController{
    private $adminModel;

    public function __construct(adminModel  $user){
        $this->adminModel = $user;
    }

        public function adminConnecter(){
            $adminConnecter =  $this->adminModel->connectAdmin();
            include_once  "View/connexion_admin.php";
        }
        // register admin
        public function registerAdmin() {
            $registerAdmin = $this->adminModel->registerAdmin();
            include_once  "View/registerAdmin.php";
        }
        public function dashboard_admin(){
            include_once  'View\dashboard_admin.php';
        }
             
        //resetPassword
      
    //     // logout admin
     public function logout(){
        $logout = $this->adminModel->logout();
     }
        //Method to show the dashboard page of the admin.

}