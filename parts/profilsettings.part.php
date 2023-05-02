<?php
include "classes/dbh.classes.php";
include "classes/profileinfo.classes.php";
include "classes/profileinfo-contr.classes.php";
include "classes/profileinfo-view.classes.php";
$profileInfo = new ProfileInfoView();
?>

<section class="profile">
  <div class="profile-bg">
    <div class="container p-3">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Profil</h3>
            </div>
            <div class="card-body">
              <form action="inc/profileinfo.inc.php" method="post">
                <div class="form-group m-1">
                  <label for="about">Über mich:</label>
                  <textarea class="form-control" name="about" cols="30" rows="10" placeholder="Schreibe etwas über dich..."><?php $profileInfo->fetchAbout($_SESSION["userid"]);?></textarea>
                </div>
                <div class="form-group m-1">
                  <label for="introtitle">Ändere deine Beschreibung</label>
                  <input type="text" class="form-control" name="introtitle" placeholder="Profiltitel..." value="<?php $profileInfo->fetchTitle($_SESSION["userid"]);?>">
                </div>
                <div class="form-group m-1">
                  <textarea class="form-control" name="introtext" cols="30" rows="10" placeholder="Profiltext..."><?php $profileInfo->fetchText($_SESSION["userid"]);?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Speichern</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

