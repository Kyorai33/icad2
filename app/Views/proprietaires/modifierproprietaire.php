<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>

<script> 

    </script>
<form method="POST" action="/proprietaires/editpost">
    <table>
        <label>Nom : </label>
        <input type="text" required="required" name="NomProprio" value="<?= $Proprietaire['NOMPROPRIO']; ?>" <br><br>
        <label>Prenom : </label>
        <input type="text" required="required" name="PrenomProprio" value="<?= $Proprietaire['PRENOMPROPRIO']; ?>" <br><br>
        <label>Adresse Email : </label>
        <input type="email" required="required" name="EmailProprio"  value="<?= $Proprietaire['EMAILPROPRIO']; ?>" <br><br>
        <label>Adresse : </label>
        <input type="text" required="required" name="AdresseProprio" value="<?= $Proprietaire['ADRESSEPROPRIO']; ?>" <br><br>
        <label>Ville : </label>
        <input type="text" required="required" name="VilleProprio" value="<?= $Proprietaire['VILLEPROPRIO']; ?>" <br><br>
        <label>Code Postal : </label>
        <input type="text" required="required" name="CodePostalProprio" value="<?= $Proprietaire['CODEPOSTALPROPRIO']; ?>" <br><br>
        <label>Téléphone : </label>
        <input type="tel" required="required" name="TelephoneProprio" value="<?= $Proprietaire['TELEPHONEPROPRIO']; ?>" <br><br>
        <input type="hidden" name="IdProprio" value="<?= $Proprietaire['IDPROPRIETAIRE']; ?>">
    </table>
    <input type="submit"  value="Modifier le propriétaire">

    <?= $this ->endSection() ?>

</form>
</body>
</html>
