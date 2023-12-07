<?=$this->extend('/templates/layout')?>
<?=$this->section('head')?>
<body>
<form action="/icad" method="post">
<input type="text" name="icad" id="">
<input type="submit" value="Envoyer numéro Icad">
</form>
</body>
</html>
<?= $this ->endSection() ?>
