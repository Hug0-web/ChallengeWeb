<?php require_once 'connexion.php';

class utilisateur {
    private $myBDD;

    public function __construct(){
        $this->myBDD=myBDD::connexion();
    }

    public function setUtilisateur($pseudo,$email,$tel,$motdepasse){
        $setUtilisateur=$this->myBDD->prepare("INSERT INTO utilisateur VALUES(?,?,?,?)");
        $parametres = [
            $pseudo,
            $email,
            $tel,
            $motdepasse
        ];
        try {
            return $setUtilisateur->execute($parametres);
        } catch (PDOException $e) {
            die("Error executing query: " . $e->getMessage());
        }
        }
}