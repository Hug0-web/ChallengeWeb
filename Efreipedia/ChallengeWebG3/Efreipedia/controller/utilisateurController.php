<?php
require_once './model/utilisateurModel.php';

class utilisateurController {

    protected $model;
    public function __construct()
    {
        $this->model = new utilisateurModel;
    }

    public function getDeleteForm() {
        require_once './view/delete.php';
    }
    
    public function deleteUtilisateur($email){
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
    
            $result = $this->model->deleteUtilisateurByEmail($email);
            
           

            if ($result) {
                    echo "Suppression réussie.";
            } else {
                    echo "Erreur lors de la suppression.";
            }
        }
    }

    public function getUpdateForm() {
        require_once './view/update.php';
    }

    public function updateUtilisateur() {
        if (isset($_POST['pseudo'])) { {
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $tel = $_POST['telephone'];
            $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    
            
            if($this->model->updateUtilisateur($pseudo,$email,$tel,$motdepasse)){
                //echo "<meta http-equiv='refresh' content='0;url=profil'>";
            } else {
                $this->getUpdateForm();
                
            }
        } 
        $this->getUpdateForm();
        }

    }
}


