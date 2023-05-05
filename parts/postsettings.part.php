<?php
include "classes/dbh.classes.php";
include "classes/posts.classes.php";
include "classes/posts-contr.classes.php";
include "classes/posts-view.classes.php";
include "inc/funktionen.inc.php";
$postsInfo = new PostsInfoView();
?>

<section class="my-5">
    <div class="container">
        <h1>Meine Posts</h1>
        <div class="row">
            <div class="col-md-6 col-lg-4 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $postsInfo->fetchPostTitle($_SESSION["userid"], $_POST['post_id']); ?></h5>
                        <p class="card-text"><?php echo $postsInfo->fetchPostText($_SESSION["userid"], $_POST['post_id']); ?></p>

                        <form action="inc/posts.inc.php" method="post">
                            <input type="hidden" name="post_id" value="<?php $postsInfo->fetchPostId($_SESSION["userid"], $_POST['post_id']); ?>">
                            <div class="form-group">
                                <label for="post_title_<?php echo $postsInfo->fetchPostId($_SESSION["userid"], $_POST['post_id']); ?>">Titel:</label>
                                <input type="text" class="form-control" id="post_title_<?php echo $postsInfo->fetchPostId($_SESSION["userid"], $_POST['post_id']); ?>" name="post_title" value="<?php echo $postsInfo->fetchPostTitle($_SESSION["userid"], $_POST['post_id']); ?>">
                            </div>
                            <div class="form-group">
                                <label for="post_text_<?php echo $postsInfo->fetchPostId($_SESSION["userid"], $_POST['post_id']); ?>">Text:</label>
                                <textarea class="form-control" id="post_text_<?php echo $postsInfo->fetchPostId($_SESSION["userid"], $_POST['post_id']); ?>" name="post_text" rows="3"><?php echo $postsInfo->fetchPostText($_SESSION["userid"], $_POST['post_id']); ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="editPost">Ändern</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>