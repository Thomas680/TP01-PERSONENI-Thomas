<?php
// var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>TP01</title>
</head>
<body>
    <div class="container-fluid">
        <h1>Inscription</h1>
        <div class="row">
            <div class="col-6">
                <form id="main_form" action="" method="post">
                    <div id="form_message"></div>
                        <div class="mb-3 row">
                            <div class="col-sm-2">
                        Civilité :
                            </div>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civilite" id="radio1">
                                <label class="form-check-label" for="radio1">
                                    Mr
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="civilite" id="radio2">
                                <label class="form-check-label" for="radio2">
                                    Mme
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Prénom : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" required name="firstname">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Nom : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" required name="name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Adresse : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" required name="address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Code postal : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" required name="postal_code">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Ville : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" required name="city">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Tel : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="tel" required name="phone" pattern="[0-9]{10}" placeholder="ex: 0123456789">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Email : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" required name="email"></label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Login : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" required name="login"></label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Mot de passe : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" id="password" required name="password"></label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Confirmer mot de passe : </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" id="password_confirm" required name="password_confirm"></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>