<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Animal</title>
</head>

<body>
    <script>

    </script>
    <form method="POST" action="/animaux/editpost">
        <table>
            <label>Numéro ICAD </label>
            <input type="text" name='icad' readonly="readonly" value="<?= $Animal['NUMEROICAD']; ?>"> <br>
            <label>Nom : </label>
            <input type="text" required="required" name="NomAnimal" value="<?= $Animal['NOMANIMAL']; ?>" <br><br>
            <label>Date de naissance : </label>
            <input type="date" required="required" readonly="readonly" name="DateNaissanceAnimal"
                value="<?= $Animal['DATENAISSANCEANIMAL']; ?>" <br><br>
            <label>Sexe : </label>
            <input type="text" required="required" readonly="readonly" name="SexeAnimalAnimal"
                value="<?= $Animal['SEXEANIMALANIMAL']; ?>" <br><br>
            <label>Espece : </label>
            <input type="text" required="required" readonly="readonly" name="EspeceAnimal"
                value="<?= $Animal['ESPECEANIMAL']; ?>" <br><br>
            <label>Race : </label>
            <input type="text" required="required" readonly="readonly" name="RaceAnimal" value="<?= $Animal['RACEANIMAL']; ?>" <br><br>
            <label>Description : </label>
            <input type="textarea" required="required" name="DescriptionAnimal"
                value="<?= $Animal['DESCRIPTIONANIMAL']; ?>" <br><br>
            <input type="hidden" name="IdAnimal" value="<?= $Animal['IDANIMAL']; ?>">
            <label for="">Proprietaire : </label>

            <select name="proprietaire">

                    <?php
                    foreach ($ListeProprietaires as $key => $value) 
                        
                        if ($value['IDPROPRIETAIRE'] == $Animal['IDPROPRIETAIRE'] ) {
                            ?>
                            <option value="<?= $value['IDPROPRIETAIRE']; ?>">
                            <?= $value['NOMPROPRIO'] . " " . $value['PRENOMPROPRIO'] ?> 
                            <?php
                        }

                        foreach ($ListeProprietaires as $key => $value) 
                            if ($value['IDPROPRIETAIRE'] != $Animal['IDPROPRIETAIRE'] ) {
                            ?>
                    <option value="<?= $value['IDPROPRIETAIRE']; ?>">
                        <?= $value['NOMPROPRIO'] . " " . $value['PRENOMPROPRIO'] ?>
                    </option>
                    <?php } ?>

        </table>
        <input type="submit" value="Modifier l'animal">

    </form>
</body>

</html>