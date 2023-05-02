<?php
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.classes.php";
include "classes/profileinfo-view.classes.php";
$profileInfo = new ProfileInfoView();
?>

<section class="profile">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">
                        <?php
                               echo $_SESSION["useruid"];
                            ?>
                        </h5>
                        <a href="index.php?page=profilsettings" class="btn btn-primary">Profil bearbeiten</a>
                        <h6 class="card-subtitle mb-2 text-muted mt-4">Über:</h6>
                        <p class="card-text">
                            <?php
                                $profileInfo->fetchAbout($_SESSION["userid"]);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php
                                $profileInfo->fetchTitle($_SESSION["userid"]);
                            ?>
                        </h5>
                        <p class="card-text">
                        <?php
                                $profileInfo->fetchText($_SESSION["userid"]);
                            ?>
                        </p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Beiträge</h5>
                        <div class="profile-post border-start border-secondary border-3 p-1">
                            <h6 class="card-subtitle mb-2 text-muted">ÜBERSCHRIFT</h6>
                            <p class="card-text">Textinhalt</p>
                            <p class="card-text border-top border-secondary"><small>11:07 - 28.04.2023</small></p>
                        </div>
                        <div class="profile-post mt-3 border-start border-secondary border-3 p-1">
                            <h6 class="card-subtitle mb-2 text-muted">ÜBERSCHRIFT</h6>
                            <p class="card-text">Textinhalt</p>
                            <p class="card-text border-top border-secondary"><small>11:07 - 28.04.2023</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
