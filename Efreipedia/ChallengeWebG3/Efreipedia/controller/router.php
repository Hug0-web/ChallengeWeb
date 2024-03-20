<?php 

function route_request($addresse){ 
    if($addresse === '/inscription'){
        require_once './view/inscription.php';
        require_once 'InscriptionController.php';
        $utilisateur=new InscriptionController();
        $utilisateur->setUtilisateur();
    }
    elseif ($addresse === '/connexion') {
        require_once './view/authentification.php';
        require_once 'ConnexionController.php';
        $utilisateur=new utilisateur();
        $utilisateur->getUtilisateurConnexion();
    }
    elseif ($addresse === '/article') {
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherArticles();
        require_once './view/articles.php';
    }
    elseif ($addresse === '/animaux') {
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherArticlesParCategorie();
        require_once './view/categorieArticle.php';
    }
    elseif ($addresse === '/sport') {
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherArticlesParCategorie();
        require_once './view/categorieArticle.php';
    }
    elseif ($addresse === '/anime') {
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherArticlesParCategorie();
        require_once './view/categorieArticle.php';
    }
    elseif ($addresse === '/jeux') {
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherArticlesParCategorie();
        require_once './view/categorieArticle.php';
    }
    elseif ($addresse === '/film') {
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherArticlesParCategorie();
        require_once './view/categorieArticle.php';
    }
    elseif ($addresse === '/accueil') {
        require_once('./view/accueil.php');
    }
    elseif ($addresse === '/message') {
        require_once './view/forum.php'; 
        require_once 'ForumController.php';
        $forum = new ForumController();
        $forum->setForum();        
    }
    elseif($addresse === '/delete'){
        require_once 'utilisateurController.php';

        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $deleteUtilisateur = new utilisateurController();
        $deleteUtilisateur->deleteUtilisateur($email);
        $_SESSION=array();
        require_once './view/inscription.php';
    }
    elseif($addresse === '/suppression'){
        require_once './view/delete.php';
        
    }
    elseif($addresse === '/miseAjour') {
        require_once './view/update.php';
    }
    elseif($addresse === '/update'){
        require_once 'utilisateurController.php';

        $updateUtilisateur = new utilisateurController();
        $updateUtilisateur->updateUtilisateur();

    }
    elseif($addresse === '/profil'){
        require_once './view/profil.php';
    }
    elseif($addresse === '/deconnexion'){
        $_SESSION=array();
        echo "<meta http-equiv='refresh' content='0;url=accueil'>";
    }
    elseif ($addresse === '/forum') {
        require_once 'ForumController.php';
        $forum = new ForumController();
        $forum->afficherForum();
        require_once './view/forum.php';
    }
    elseif ($addresse === '/1'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/2'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/3'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/4'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/5'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/6'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/7'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/8'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/9'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/10'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/11'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/12'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/13'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/14'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/15'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/16'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/17'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/18'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/19'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/20'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/21'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/22'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/23'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/24'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
    elseif ($addresse === '/25'){
        require_once 'ArticleController.php';
        $articles = new ArticleController;
        $articles->afficherInfoArticle();
        require_once './view/infoArticle.php';
    }
else {

    echo '<h1>Erreur</h1>';
}
}