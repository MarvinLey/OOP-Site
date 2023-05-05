<?php

class PostsInfoView extends PostsInfo {

    public function fetchAllPosts($userId){
        $postData = $this->getPostsInfo($userId);
        return $postData;
    }

    public function fetchPostTitle($userId,$postId){
        $postData= $this->getPostInfo($userId,$postId);
        echo $postData[0]["post_title"];
    }

    public function fetchPostText($userId,$postId){
        $postData = $this->getPostInfo($userId,$postId);
        echo $postData[0]["post_text"];
    }
    public function fetchPostId($userId,$postId){
        $postData = $this->getPostInfo($userId,$postId);
        echo $postData[0]["post_id"];
    }
    public function fetchAllUsersPosts(){
        $postData = $this->getAllPosts();
        return $postData;
    }
}
