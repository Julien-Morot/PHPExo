<?php

namespace controllers;

use models\PostManager;

class PostController {


    // Afficher le dernier  billet en date
    public function showLastPostAction()
    {
        $newPostManager = new PostManager();
        $lastPost = $newPostManager->getLastPost();
        require 'views/lastPost.php';
    }

    // Afficher le contenu d'un billet
    public function showAction($id)
    {
        $newPostManager = new PostManager();
        $post = $newPostManager->getPost($id);
        // Si l'id du billet n'existe pas alors on affiche une erreur
        if ($post->getId() == null)
        {
            // Vue
            require 'views/error.php';
        }
        else
        {
            // Vue
            require 'views/postView.php';
        }
    }
}