<?php
require_once "funktionen.inc.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Grabbing the data
    $uid = bereinige($_POST["uid"]);
    $pwd = bereinige($_POST["pwd"]);
    $pwdrepeat = bereinige($_POST["pwdrepeat"]);
    $email = bereinige($_POST["email"]);

    //Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid,$pwd,$pwdrepeat, $email);

    //Running error and user-signup
    $signup->signupUser();

    $userId = $signup->fetchUserId($uid);

    //Instantiate ProfileInfoContr class
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";
    $profileInfo = new ProfileInfoContr($userId, $uid);
    $profileInfo->defaultProfileInfo();

    //redirect to front-page
    header("location: ../index.php?error=none");
}