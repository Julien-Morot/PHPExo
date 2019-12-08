<?php

namespace models;

class PostManager extends Manager {


    public function getPosts()
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->query('SELECT id, author, title, content, type_mission, budget_max, expert, DATE_FORMAT(added_datetime, \'le %d/%m/%Y à %Hh%i\') AS added_datetime_fr, DATE_FORMAT(updated_datetime, \'le %d/%m/%Y à %Hh%i\') AS updated_datetime_fr FROM posts ORDER BY added_datetime DESC');
        $request->execute(array());
        $result = $request->fetchAll();
        $posts = [];
        foreach ($result as $post) {
            $newPost = new Post($post['id'], $post['author'], $post['title'], $post['content'], $post['added_datetime_fr'], $post['updated_datetime_fr'], $post['type_mission'], $post['budget_max'], $post['expert']);
            $posts[] = $newPost;
        }
        return $posts;
    }

    public function getPreviousPosts()
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->query('SELECT id, author, title, content, DATE_FORMAT(added_datetime, \'%d/%m/%Y à %Hh%i\') AS added_datetime_fr, updated_datetime FROM posts ORDER BY added_datetime DESC LIMIT 1, 99999');
        return $request;
    }

    public function getLastPost()
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->prepare('SELECT id, author, title, content, DATE_FORMAT(added_datetime, \'%d/%m/%Y à %Hh%i\') AS added_datetime_fr FROM posts ORDER BY id DESC LIMIT 1');
        $request->execute(array());
        $lastPost = $request->fetch();
        return $lastPost;
    }

    public function getPost($id)
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->prepare('SELECT id, author, title, content, type_mission, budget_max, DATE_FORMAT(added_datetime, \'%d/%m/%Y à %Hh%i\') AS added_datetime_fr, DATE_FORMAT(updated_datetime, \'le %d/%m/%Y à %Hh%i\') AS updated_datetime_fr FROM posts WHERE id = ?');
        $request->execute(array($id));
        $post = $request->fetch();
        return new Post($post['id'], $post['author'], $post['title'], $post['content'], $post['added_datetime_fr'], $post['updated_datetime_fr'], $post['type_mission'], $post['budget_max']);
    }

    public function addPost($title, $content, $typeMission, $budgetMax)
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->prepare('INSERT INTO posts (author, title, content, type_mission, budget_max, added_datetime) VALUES ("Admin", ?, ?, ?, ?, NOW())');
        $request->execute(array($title, $content, $typeMission, $budgetMax));
    }

    public function updatePost($id, $title, $content)
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->prepare('UPDATE posts SET title = ?, content = ?, updated_datetime = NOW() WHERE id = ?');
        $post = $request->execute(array($title, $content, $id));
        return $post;
    }

    public function deletePost($id)
    {
        $newManager = new Manager();
        $db = $newManager->dbConnect();
        $request = $db->prepare('DELETE FROM posts WHERE id = ?');
        $request->execute(array($id));
    }

}