<?php
require_once 'connexion.php';

class ArticleModel {
    private $myBDD;

    public function __construct(){
        $this->myBDD = myBDD::connexion();
    }

    public function getArticle(){ 
        return $this->myBDD->query("SELECT * FROM article")->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getArticleByIdCategory($idcategorie){ 
        return $this->myBDD->query("SELECT * FROM article INNER JOIN categorie ON article.id_categorie = categorie.idcategorie")->fetchAll(PDO::FETCH_ASSOC);
    }
    

    public function setArticle($titre, $image, $description,$idcategorie){
        $setArticle = $this->myBDD->prepare("INSERT INTO article VALUES (?,?,?,?)");
        $parametres = [
            $titre,
            $image,
            $description,
            $idcategorie       
        ];

        $setArticle->execute($parametres);
    }
}
