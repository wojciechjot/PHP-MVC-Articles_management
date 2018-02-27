<?php

include 'Controller.php';

class ArticlesController extends Controller
{

    public function setArticles() {

        $this->getModel('articles');
        $model = new ArticlesModel();
        $this->articles = $model->getArticles();

//       echo $this->articles['content'];

        $view = $this->getView('Articles');
    }

    public function newArticle() {

        $view = $this->getView('newArticle');
    }

    public function addArticle() {
        $this->getModel('Articles');
        $model = new ArticlesModel();
        $model->insert();
    }

    public function readArticle() {

        $this->getModel('articles');
        $model = new ArticlesModel();
        $this->article = $model->getOne($_GET['id']);

        $view = $this->getView('Article');
    }

    public function changeDetails() {
        $this->getModel('articles');
        $model = new ArticlesModel();
        $this->article = $model->getOne($_GET['id']);

        $view = $this->getView('changeArticle');
    }

    public function updateDetails() {
        $this->getModel('Articles');
        $model = new ArticlesModel();
        $model->update();
    }

    public function deleteArticle() {
        $this->getModel('Articles');
        $model = new ArticlesModel();
        $model->delete();
    }

}