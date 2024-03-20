<?php
require_once('./model/ForumModel.php');

class ForumController
{
    protected $model;
    public function __construct()
    {
        $this->model = new forumModel;
    }

    public function getforumForm() {
        require_once './view/forum.php';
    }

    public function setForum(){
            if(isset($_POST['nom'])) {
                $nom = $_POST['nom'];
                $contenu = $_POST['message'];
                if($this->model->setMessage($nom,$contenu)){
                    echo "<meta http-equiv='refresh' content='0;url=forum'>";
                }
                else{
                    $this->getforumForm();
                }
            }
            else{
                $this->getforumForm();  
            }
    }
    public function afficherForum(){
        $forum = $this->model->getForum();
        require_once './view/forum.php';
    }

}
   



    
