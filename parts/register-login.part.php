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