<?php
include_once('connexion.php');

Class forumModel{
    private $myBDD;

    public function __construct()
    {
        $this->myBDD = myBDD::connexion();
    }

    
        public function setMessage($nom, $contenu){
            $setMessage = $this->myBDD->prepare("INSERT INTO threads VALUES(?,?)");
            $parametre = [
                $nom,
                $contenu
            ];
            try {
                return $setMessage->execute($parametre);
            } catch (PDOException $e) {
                echo "Erreur d'insertion dans la base de données : " . $e->getMessage();
                return null;
            }
        }


    public function getForum()
    {
        return $this->myBDD->query("SELECT * FROM threads")->fetchAll(PDO::FETCH_ASSOC);
    }

}

