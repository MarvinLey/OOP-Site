<?php
session_start();
require_once "funktionen.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editPost"])) {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $postTitle = bereinige($_POST["post_title"]);
    $postText = bereinige($_POST["post_text"]);
    $postId = bereinige($_POST["post_id"]);

    include "../classes/dbh.classes.php";
    include "../classes/posts.classes.php";
    include "../classes/posts-contr.classes.php";
    $profileInfo = new PostsInfoContr($id, $postId, $postTitle, $postText);

    $profileInfo->editPosts($postTitle, $postText, $id, $postId);
    header("location: ../index.php?page=profile&error=none");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["addNewPost"])) {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $postTitle = bereinige($_POST["post_title"]);
    $postText = bereinige($_POST["post_text"]);

    include "../classes/dbh.classes.php";
    include "../classes/posts.classes.php";
    include "../classes/posts-contr.classes.php";
    $profileInfo = new PostsInfoContr($id, null, $postTitle, $postText);

    $profileInfo->addNewPosts($postTitle, $postText, $id);
    header("location: ../index.php?page=profile&error=none");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["deletePost"])) {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $postId = bereinige($_POST["post_id"]);

    include "../classes/dbh.classes.php";
    include "../classes/posts.classes.php";
    include "../classes/posts-contr.classes.php";
    $profileInfo = new PostsInfoContr($id, $postId, null, null);

    $profileInfo->deletePosts($id, $postId);
    header("location: ../index.php?page=profile&error=none");
}