<?php
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.classes.php";
include "classes/profileinfo-view.classes.php";
include "classes/posts.classes.php";
include "classes/posts-contr.classes.php";
include "classes/posts-view.classes.php";
include "inc/funktionen.inc.php";
$profileInfo = new ProfileInfoView();
$postsInfo = new PostsInfoView();
?>

<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                            <?php echo $_SESSION["useruid"]; ?>
                        </h5>
                        <a href="index.php?page=profilsettings" class="btn btn-primary m-1">Profil bearbeiten</a>
                        <a href="index.php?page=postadd" class="btn btn-primary m-1">Beitrag hinzufügen</a>
                        <h6 class="card-subtitle mb-2 text-muted mt-4">Über:</h6>
                        <p class="card-text">
                            <?php echo $profileInfo->fetchAbout($_SESSION["userid"]); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $profileInfo->fetchTitle($_SESSION["userid"]); ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $profileInfo->fetchText($_SESSION["userid"]); ?>
                        </p>
                    </div>
                </div>
                <div class="posts-container">
                    <?php
                    $allPosts = $postsInfo->fetchAllPosts($_SESSION["userid"]);
                    foreach ($allPosts as $post) {
                    ?>
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5 class="card-title">Beiträge</h5>
                                <div class="profile-post border-start border-secondary border-3 p-1">
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $post['post_title']; ?></h6>
                                    <p class="card-text"><?php echo $post['post_text']; ?></p>
                                    <p class="card-text border-top border-secondary"><small><?php echo konvertiereZeit($post['created_at']); ?></small></p>
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

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>