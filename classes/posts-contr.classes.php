<?php class PostsInfoContr extends PostsInfo{

    private $userId;
    private $postId;
    private $postTitle;
    private $postText;

    public function __construct($userId, $postId, $postTitle, $postText)
    {
        $this->userId = $userId;
        $this->postId = $postId;
        $this->postTitle = $postTitle;
        $this->postText = $postText;
    }


    public function addNewPosts($postTitle, $postText, $userId)
    {
        if($this->emptyInputCheck($postTitle, $postText, $userId) == true) {
            header("location: ../parts/profilsettings.php?error=emptyinput");
            exit();
        }
        $this->addNewPost($postTitle, $postText, $userId);
    }


    public function editPosts($postTitle, $postText, $userId, $postId)
    {
        if($this->emptyInputCheck($postTitle, $postText, $userId, $postId) == true) {
            header("location: profilsettings.php?error=emptyinput");
            exit();
        }
        $this->editPost($postTitle, $postText, $userId, $postId);
    }


    public function deletePosts($userId, $postId)
    {
        $this->deletePost($userId, $postId);
    }



    private function emptyInputCheck($postTitle, $postText, $userId)
    {
        $result = null;
        if (empty($postTitle) || empty($postText) || empty($userId)) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
}