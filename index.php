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

<body>
    <section class="header-nav bg-dark">
        <div class="container p-3">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand text-white fw-bold" href="#">Marvin Leyendecker</a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Produkte</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Member+</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="#">Gästebuch</a></li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <?php
                        if (isset($_SESSION["userid"])) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
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
    <section class="login bg-light">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-signup">
                        <h3>Registrierung</h3>
                        <p>Wenn du noch keinen Account hast, dann registriere dich!</p>
                        <form action="inc/signup.inc.php" method="post">
                            <div class="form-group">
                                <label for="uid">Benutzername</label>
                                <input type="text" class="form-control" name="uid" placeholder="Benutzername" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Passwort</label>
                                <input type="password" class="form-control" name="pwd" placeholder="Passwort" required>
                            </div>
                            <div class="form-group">
                                <label for="pwdrepeat">Passwort wiederholen</label>
                                <input type="password" class="form-control" name="pwdrepeat" placeholder="Passwort wiederholen" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="text" class="form-control" name="email" placeholder="E-Mail" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1" name="submit">Registrieren</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-login">
                        <h3>Anmelden</h3>
                        <p>Melde dich mit deinen Benutzerdaten oder E-Mail an</p>
                        <form action="inc/login.inc.php" method="post">
                            <div class="form-group">
                                <label for="uid">Benutzername/E-Mail</label>
                                <input type="text" class="form-control" name="uid" placeholder="Benutzername/E-Mail" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Passwort</label>
                                <input type="password" class="form-control" name="pwd" placeholder="Passwort" required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-1" name="submit">Anmelden</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>