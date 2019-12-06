<?php

namespace controllers;

use models\Message;
use models\PostManager;

class AdminController {

    // Lister les billets en ligne et les commentaires signalés
    // depuis la page d'administration


    public function indexAction()
    {
        $newPostManager = new PostManager();
        $posts = $newPostManager->getPosts();
        require 'views/adminPanel.php';
    }

    public function clientAction()
    {
        $newPostManager = new PostManager();
        $posts = $newPostManager->getPosts();
        require 'views/clientPanel.php';
    }

    public function RespDepAction()
    {
        $newPostManager = new PostManager();
        $posts = $newPostManager->getPosts();
        require 'views/RespDepPanel.php';
    }

    // Publier un nouveau billet depuis la page d'administration
    public function postAction($title, $content, $typeMission, $budgetMax)
    {
        // Si la requête serveur est une méthode POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (!empty($title) && !empty($content) && !empty($typeMission) && !empty($budgetMax))
            {
                $newPostManager = new PostManager();
                $newPostManager->addPost($title, $content, $typeMission, $budgetMax);
                $newMessage = new Message();
                $newMessage->setSuccess("<p>Merci, votre billet a bien été publié !</p>");
            }
            else
            {
                $newMessage = new Message();
                $newMessage->setError("<p>Tous les champs doivent être rempli !</p>");
            }
        }
        // Sinon on reste sur la page
        $newAdminController = new AdminController();
        $newAdminController->indexAction();
    }

    // Modifier un billet depuis la page d'administration
    public function editPostAction($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $post = new PostManager();
            $post->updatePost($_GET['id'], htmlspecialchars($_POST['title']), htmlspecialchars($_POST['content']));
            $newMessage = new Message();
            $newMessage->setSuccess("<p>Merci, votre billet a bien été modifié !</p>");
        }
        $newPostManager = new PostManager();
        $post = $newPostManager->getPost($id);
        // Vue
        require 'views/editPost.php';
    }

    // Supprimer un billet depuis la page d'administration
    public function deletePostAction($id)
    {
        $newPostManager = new PostManager();
        $deletedPost = $newPostManager->deletePost($id);
        // Gestion des erreurs
        if ($deletedPost === false)
        {
            throw new Exception("Impossible de supprimer le billet !");
        }
        else
        {
            header('Location: ?controller=AdminController&action=indexAction');
        }
    }


}