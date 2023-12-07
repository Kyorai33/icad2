<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>

<body>

    <script language='javascript'>
        function confirmer() {
            confirmation = confirm("Voulez-vous vraiment supprimer cet animal ?");
            if (!confirmation) {
                event.preventDefault(); // Empêche la soumission du formulaire si l'utilisateur annule
            }
        }
    </script>
    <a href="<?php echo base_url('/animaux/newanimal'); ?>">Créer animal</a>

    <?php
    if ($listeAnimaux == null) {
        echo "Créez des animaux pour les gérer ici";
    } else {

        foreach ($listeAnimaux as $key => $value) { ?>
            <table>

                <tr>
                    <td>
                    <img width = 150px height = 150px src="data:image/*;base64,<?= base64_encode($value['IMGANIMAL']);
                     ?>">
                    </td>
 
                    <td>
                        <?= $value['NOMANIMAL']; ?>
                    </td>
                    <td>
                        <form action="/animaux/etatpost" method="post">
                            <select name="etat" id="">
                                <option value="">
                                    <?= $value['ETATANIMAL'] ?>
                                </option>
                                <?php if ($value['ETATANIMAL'] != "RAS") {
                                    ?>
                                    <option value="RAS">RAS</option>
                                <?php }
                                if ($value['ETATANIMAL'] != "Perdu") {
                                    ?>
                                    <option value="Perdu">Perdu</option>
                                <?php }
                                if ($value['ETATANIMAL'] != "Trouvé") {
                                    ?>
                                    <option value="Trouvé">Trouvé</option>
                                <?php }
                                if ($value['ETATANIMAL'] != "Volé") {
                                    ?>
                                    <option value="Volé">Volé</option>
                                    <?php } ?>

                                    <input type="hidden" name="IdAnimal" value="<?= $value['IDANIMAL']; ?>">
                                </select>

                            <input type="submit" value="Valider">

                        </form>
                    </td>
                    <td>
                        <a name="modifier" href="<?php echo base_url('/animaux/edit/' . $value['IDANIMAL']); ?>">Modifier</a>
                    </td>
                    <form method="post" action="/animaux/delete">
                        <td><button type="submit" name="supprimer" onclick="confirmer()"
                                value="<?= $value['IDANIMAL'] ?>">Supprimer</button></td>
                    </form>
                </tr>
            </table>

        <?php }
    } ?>



</body>
<?= $this ->endSection() ?>

</html>