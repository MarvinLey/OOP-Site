<?php
include "classes/dbh.classes.php";
include "classes/posts.classes.php";
include "classes/posts-contr.classes.php";
include "classes/posts-view.classes.php";
include "inc/funktionen.inc.php";
$postsInfo = new PostsInfoView();
?>

<div class="posts-container">
    <h2>Pinnwand</h2>
    <?php
    $allPosts = $postsInfo->fetchAllUsersPosts();
    foreach ($allPosts as $post) {
    ?>
        <div class="card mt-3">
            <div class="card-body">
                <div class="profile-post border-start border-secondary border-3 p-1">
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['post_title']; ?></h6>
                    <p class="card-text"><?php echo $post['post_text']; ?></p>
                    <p class="card-text border-top border-secondary"><small>Zuletzt bearbeitet: <?php echo konvertiereZeit($post['created_at']); ?> von: <?php echo $post['user_uid']; ?> </small></p>
                    <?php
                        if (isset($_SESSION["userid"]) && $_SESSION["userid"] == $post['user_id']) {
                    ?>
                    <div class="d-flex">
                        <form action="index.php?page=postsettings" method="post">
                            <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
                            <button type="submit" class="btn btn-sm btn-primary">Beitrag bearbeiten</button>
                        </form>
                        <form action="inc/posts.inc.php" method="post">
                            <input type="hidden" name="post_id" value="<?php echo $post['post_id']; ?>">
                            <button type="submit" class="btn btn-sm btn-danger" name="deletePost">Beitrag löschen</button>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>