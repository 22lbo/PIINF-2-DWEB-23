<?php
require("config/config.inc.php");
require(WAY."/includes/head.inc.php");
?>
<body>
<div class="container">
    <div class="row">
        <div class="header">
            <h3>Connexion</h3>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            Connexion au portail de jeux
        </div>

        <div class="panel-body">
            <form id="login_form" action="check.php" method="post">
                <div class="form-group row">
                    <label for="email_per" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email_per" name="email_per" placeholder="votre adresse e-mail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="votre mot de passe">
                    </div>
                </div>
            <div class="form-group row">
                <div class="col-sm-2 col-sm-offset-6">
                    <input type="submit" class="form-control btn btn-primary submit" id="submit_conf" value="Se connecter">
                </div>
                <div class="col-sm-2">
                    <input type="reset" class="form-control btn btn-warning" id="reset_conf" value="Annuler">
                </div>
                <div class="col-sm-2">
                    <input type="reset" onclick="window.location.href='inscription.php'" class="form-control btn btn-default" id="redirect_conf" value="S'inscrire">
                </div>
            </div>
        </form>
        <div class="panel-footer"></div>
    </div>
</div>
</div>
<script src="js/login.js"></script>
</body>
</html>