<?php
require_once './model/ArticleModel.php';

class ArticleController {
    private $articleModel;

    public function __construct(){
        $this->articleModel = new ArticleModel();
    }

    public function afficherArticles(){
        $articles = $this->articleModel->getArticle();
        require_once './view/articles.php';
    }
    public function afficherArticlesParCategorie(){
        $idcategorie = isset($_GET['id_categorie']) ? $_GET['id_categorie'] : null;
        $articles = $this->articleModel->getArticleByIdCategory($idcategorie);
        require_once './view/categorieArticle.php';
    }
    public function afficherInfoArticle(){
        $articles = $this->articleModel->getArticle();
        require_once './view/infoArticle.php';
    }


    public function ajouterArticle($titre, $image, $description,$idcategorie){
        $this->articleModel->setArticle($categorie, $titre, $image, $description,$idcategorie);
        echo "L'article a été ajouté avec succès.";
    }
}


