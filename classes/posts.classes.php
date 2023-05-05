<?php

class PostsInfo extends Dbh
{

    protected function getAllPosts()
    {
        $stmt = $this->connect()->prepare('SELECT posts.*, users.*
        FROM posts
        JOIN users ON posts.user_id = users.user_id
        ORDER BY updated_at DESC;');

        if (!$stmt->execute(array())) {
            $stmt = null;
            header("location ../parts/profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../parts/profile.php?error=postsnotfound");
            exit();
        }
        $postsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $postsData;
    }

    //Hole die Daten für alle Posts des speziellen Users
    protected function getPostsInfo($userId)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM posts WHERE user_id = ? ORDER BY created_at DESC;');

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location ../parts/profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../parts/profile.php?error=postsnotfound");
            exit();
        }
        $postsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $postsData;
    }
    //hole die Daten für einen speziellen Post
    protected function getPostInfo($userId,$postId)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM posts WHERE user_id = ? AND post_id = ?;');

        if (!$stmt->execute(array($userId,$postId))) {
            $stmt = null;
            header("location ../parts/profile.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../parts/profile.php?error=postsnotfound");
            exit();
        }
        $postsData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $postsData;
    }
    //Post neu anlegen
    protected function addNewPost($postTitle, $postText, $userId)
    {
        $stmt = $this->connect()->prepare('INSERT INTO posts (post_title, post_text, user_id) VALUES (?,?,?);');

        if (!$stmt->execute(array($postTitle, $postText, $userId))) {
            $stmt = null;
            header("location: ../parts/profile.php/error=stmtfailed");
            exit();
        }
        // Überprüfe, ob der Datensatz aktualisiert wurde
        $affected_rows = $stmt->rowCount();
        if ($affected_rows === 0) {
            $stmt = null;
            header("location: ../parts/profile.php?error=postnotcreated");
            exit();
        }
        $stmt = null;
    }
    //Speziellen Post editieren
    protected function editPost($postTitle, $postText, $userId, $postId)
    {
        $stmt = $this->connect()->prepare('UPDATE posts SET post_title = ?, post_text = ? WHERE user_id = ? AND post_id = ?;');

        if (!$stmt->execute(array($postTitle, $postText, $userId, $postId))) {
            $stmt = null;
            header("location: ../parts/profile.php?error=stmtfailed");
            exit();
        }
        // Überprüfe, ob der Datensatz aktualisiert wurde
        $affected_rows = $stmt->rowCount();
        if ($affected_rows === 0) {
            $stmt = null;
            header("location: ../parts/profile.php?error=postnotfound");
            exit();
        }
        $stmt = null;
    }
    //Speziellen Post löschen
    protected function deletePost($userId, $postId)
    {
        $stmt=$this->connect()->prepare('DELETE FROM posts WHERE user_id = ? AND post_id =?;');
        if (!$stmt->execute(array($userId, $postId))) {
            $stmt = null;
            header("location: ../parts/profile.php?error=stmtfailed");
            exit();
        }
        // Überprüfe, ob der Datensatz gelöscht wurde
        $affected_rows = $stmt->rowCount();
        if ($affected_rows === 0) {
            $stmt = null;
            header("location: ../parts/profile.php?success=postdeleted");
            exit();
        } else {
            $stmt = null;
            header("location: ../index.php?page=profile&error=postnotdeleted");
            exit();
        }
    }
}
