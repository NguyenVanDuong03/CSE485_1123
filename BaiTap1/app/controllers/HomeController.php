<?php
require_once APP_ROOT.'/app/services/ArticleService.php';
class HomeController {
    public function index() {
        // Goi du lieu tu PatientService
        $ArticleSevices = new ArticleService();
        $articles = $ArticleSevices->getAllArticles();
        // Render du lieu lay duoc ra HomePage
        include APP_ROOT.'/views/home/index.php';
    }

    // // Display the article creation form
    // public function create()
    // {
    //     include APP_ROOT.'/views/article/create.php';
    // }

    // // Store a newly created article in the database
    // public function store()
    // {
    //     $title = $_POST['title'];
    //     $content = $_POST['content'];

    //     $article = new Article();
    //     $article->setTitle($title);
    //     $article->setContent($content);
    //     $article->save();

    //     header('Location: index.php?controller=article&action=index');
    // }

    // // Display the article editing form
    // public function edit()
    // {
    //     $id = $_GET['id'];
    //     $article = Article::getById($id);
    //     include APP_ROOT.'/views/article/edit.php';
    // }

    // // Update the specified article in the database
    // public function update()
    // {
    //     $id = $_POST['id'];
    //     $title = $_POST['title'];
    //     $content = $_POST['content'];

    //     $article = new Article();
    //    // $article = Article::getById($id);
        
    //     $article->setID($id);
    //     $article->setTitle($title);
    //     $article->setContent($content);
    //     $article->update();

    //     header('Location: index.php?controller=article&action=index');
    // }

    // // Delete the specified article from the database
    // public function delete()
    // {
    //     $id = $_GET['id'];
    //   // $article = Article::getById($id);
    //   $article = new Article();
    //     $article->setID($id);
    //     $article->delete();

    //     header('Location: index.php?controller=article&action=index');
    // }
}

?>