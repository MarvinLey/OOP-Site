<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/style.css">
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://kit.fontawesome.com/b3e2eeae95.js" crossorigin="anonymous"></script>

    <title>Webentwicklung</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <section class="header-nav bg-dark">
        <div class="container p-3">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand text-white fw-bold" href="#">Marvin Leyendecker</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link text-white" href="index.php?page=Home">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Produkte
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="nav-item"><a class="nav-link dropdown-item" href="index.php?page=produkte">Kategorie 1</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-item" href="index.php?page=produkte.elektronik">Elektronik</a></li>
                                    <li class="nav-item"><a class="nav-link dropdown-item" href="index.php?page=produkte.haushalt">Haushalt</a></li>
                                </ul>
                            </li>
                            

                            <li class="nav-item"><a class="nav-link text-white" href="index.php?page=Mitglieder+">Mitglied+</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="index.php?page=pinnwand">Pinnwand</a></li>
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
                                <li class="nav-item"><a class="nav-link text-white" href="index.php?page=register-login">Registrieren</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="index.php?page=register-login">Anmelden</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </section>

    <main class="m-2">