<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>

</head>

<body>

    <form method="POST" action="/newuserpost">
        <ul>
            <li> Nom : <input type="text" name='nom' required="required" placeholder="Nom..."></li>
            <li> Prénom : <input type="text" name='prenom' required="required" placeholder="Prénom..."></li>
            <li> Mot de passe : <input type="password" name='password' required="required" minlength="12" maxlength="30"
                    placeholder="Mot de passe...">
            </li>

            <li> Adresse Email : <input type="email" name='mail' required="required" placeholder="Adresse Email...">
            </li>
            <li> Fonction : <select name="fonction">
                    <option value="Veterinaire">Véterinaire</option>
                    <option value="Policier">Policier</option>
                    <option value="Eleveur">Eleveur</option>
                </select>
            </li>
            <li> Adresse : <input type="text" name='adresse' required="required" placeholder="Adresse..."></li>
            <li> Code Postal : <input type="text" name='cp' required="required" placeholder="Code Postal..."></li>
            <li> Ville : <input type="text" name='ville' required="required" placeholder="Ville..."></li>
            <li> Téléphone : <input type="tel" name='phone' required="required" placeholder="Numéro de téléphone...">
            </li>
        </ul>
        <input type="submit" value="Créer le compte">
        <input type="reset" value="Annuler">
        </ul>
    </form>
</body>
</html>