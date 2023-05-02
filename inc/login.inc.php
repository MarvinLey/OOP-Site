<?php
require_once "funktionen.inc.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Grabbing the data
    $uid = bereinige($_POST["uid"]);
    $pwd = bereinige($_POST["pwd"]);
    //Instantiate SignupContr class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid,$pwd);

    //Running error and user-signup
    $login->loginUser();
    //redirect to front-page
    header("location: ../index.php?error=none");
}