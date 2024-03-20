<?php 
require_once 'connexion.php';



class utilisateurModel {
    private $myBDD;

    public function __construct(){
        $this->myBDD=myBDD::connexion();
    }

    public function getUtilisateur(){
        return $this->myBDD->query("SELECT * FROM utilisteur")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUtilisateurbyEmail($email){
        return $this->myBDD->query("SELECT * FROM utilisateur WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }


    public function deleteUtilisateurByEmail($email){
        $deleteUtilisateur = $this->myBDD->prepare("DELETE FROM utilisateur WHERE email= ?");
        $parametre = [   
            $email
        ];
        try{
            return $deleteUtilisateur->execute($parametre);  
        } catch (PDOException $e) { 
            return false;
        }
    }  

    public function updateUtilisateur($pseudo, $email, $tel, $motdepasse){
        $updateUtilisateur = $this->myBDD->prepare("UPDATE utilisateur SET pseudo = ?, email = ?, tel = ?, motdepasse = ? WHERE email = ?");
        $parametre= [
            $pseudo,
            $email, 
            $tel, 
            $motdepasse,
            $email
        ];
        try{
            return $updateUtilisateur->execute($parametre);
        } catch (PDOException $e) {
            return false;
        }
    }


}