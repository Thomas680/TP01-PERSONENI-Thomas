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
    <form id="main_form" action="" method="post">
        <div id="form_message"></div>
        <div>
            Civilité : 
            <ul>
            <li><label>Mr <input type="radio" name="civilite" value="Mr"></label></li>
            <li><label>Mme <input type="radio" name="civilite" value="Mme"></label></li>
            <li><label>Bell AH-1Z Viper <input type="radio" name="civilite" value="Bell AH-1Z Viper"></label></li>
            </ul>
        </div>
        <div>
            <label>Prénom : <input type="text" name="firstname"></label>
        </div>
        <div>
            <label>Nom : <input type="text" name="name"></label>
        </div>
        <div>
            <label>Adresse : <input type="text" name="address"></label>
        </div>
        <div>
            <label>Code postal : <input type="number" name="postal_code"></label>
        </div>
        <div>
            <label>Ville : <input type="text" name="city"></label>
        </div>
        <div>
            <label>Tel : <input type="tel" name="phone"></label>
        </div>
        <div>
            <label>Email : <input type="email" name="firstname"></label>
        </div>
        <div>
            <label>Login : <input type="text" name="login"></label>
        </div>
        <div>
            <label>Mot de passe : <input type="password" id="password" name="password"></label>
        </div>
        <div>
            <label>Confirmer mot de passe : <input type="password" id="password_confirm" name="password_confirm"></label>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Envoyer</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>