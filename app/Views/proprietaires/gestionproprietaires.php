<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>

<body>
    
<script language='javascript'>
function confirmer()
{
    confirmation = confirm("Voulez-vous vraiment supprimer ce propriétaire ?");
    if (!confirmation) {
        event.preventDefault(); // Empêche la soumission du formulaire si l'utilisateur annule
    }
}
</script>

<table class="table table-dark" align="center">
            <a href="<?php echo base_url('/proprietaires/newproprietaire'); ?>">Créer propriétaire</a>
            <tr>
                <th >Numéro</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Adresse Email </th>
                <th scope="col">Adresse </th>
                <th scope="col">Ville </th>
                <th scope="col">Code Postal </th>
                <th scope="col">Telephone </th>
                <th scope="col">Edition </th>

            </tr>

    <?php

    if ($listeProprietaires == null) {
        echo "Créez des propriétaires pour les gérer ici";
    } else {
        
            foreach ($listeProprietaires as $key => $value) { ?>
                <tr>
                    <td><?= $key + 1; ?></td>
                    <td><?= $value['NOMPROPRIO']; ?></td>
                    <td><?= $value['PRENOMPROPRIO']; ?></td>
                    <td><?= $value['EMAILPROPRIO']; ?></td>
                    <td><?= $value['ADRESSEPROPRIO']; ?></td>
                    <td><?= $value['VILLEPROPRIO']; ?> </td>
                    <td><?= $value['CODEPOSTALPROPRIO']; ?></td>
                    <td><?= $value['TELEPHONEPROPRIO']; ?></td>
                    <td><a name = "modifier" href="<?php echo base_url('/proprietaires/edit/' . $value['IDPROPRIETAIRE']); ?>" >Modifier</a>
                    <form method="post" action ="/proprietaires/delete">
                    <button type="submit" name ="supprimer" onclick="confirmer()" value="<?=$value['IDPROPRIETAIRE'] ?>">Supprimer</button></td></form>
                </tr>
            </form>

        <?php } } 
    ?>
        </table>


</body>
<?= $this ->endSection() ?>
</html>