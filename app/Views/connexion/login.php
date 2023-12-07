<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <ul>
        <form action="/loginpost" method="post">
            <li><input type="email" name="email"required="required" placeholder="Adresse Email..."></li>
            <li><input type="password" name="password"required="required" minlength="12" maxlength="30" placeholder="Mot de passe..."></li>
            <input type="submit" name="connexion" value="Se connecter" >
        </form>
    </ul>

    <form action="/login/deconnexion" method="post">
    <button type="submit" name="signout" method="post">Se deconnecter</button>
    </form>

</body>

</html>