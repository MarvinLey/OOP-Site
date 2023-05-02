<?php
session_start();
require_once "funktionen.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $about = bereinige($_POST["about"]);
    $introTitle = bereinige($_POST["introtitle"]);
    $introText = bereinige($_POST["introtext"]);

    include "../classes/dbh.classes.php";
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($id, $uid);

    $profileInfo->updateProfileInfo($about, $introTitle, $introText);
    header("location: ../index.php?page=profile&error=none");
}
