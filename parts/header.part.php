<?php
session_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.css">
    <title>Webentwicklung</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <section class="header-nav bg-dark">
        <div class="container p-3">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand text-white fw-bold" href="#">Marvin Leyendecker</a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-white" href="index.php?page=Home">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="index.php?page=Produkte">Produkte</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="index.php?page=Mitglieder+">Mitglied+</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="index.php?page=Gästebuch">Gästebuch</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="index.php?page=register-login">Registrierung</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <?php
                        if (isset($_SESSION["userid"])) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="index.php?page=profile">
                                    <?php echo "Willkommen, " . $_SESSION["useruid"]; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-primary" href="inc/logout.inc.php">Abmelden</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Registrieren</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Anmelden</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </header>
        </div>
    </section>
    <main class="m-2">