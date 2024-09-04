<?php
if (((isset($_GET['nom'])) && (!empty($_GET['nom']))) && ((isset($_GET['prenom'])) && (!empty($_GET['prenom']))))
{
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
}
else
{
    $nom = 'nom';
    $prenom = 'prenom';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Accueil</title>
    <meta lang="fr">
</head>
<body>
<h1> Bonjour <?=$nom.' '. $prenom?></h1>
</body>
</html>
