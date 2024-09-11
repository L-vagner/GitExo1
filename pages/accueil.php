<?php
if (empty($_POST['login']) || (empty($_POST['password'])) ||
($_POST['login'] != 'admin' ) || ($_POST['password']) != 'azerty')
{
    sleep(1);
 header('Location : http://localhost/lvagn/GitExo1/index.html');
 exit;
}

//if (((isset($_GET['nom'])) && (!empty($_GET['nom']))) && ((isset($_GET['prenom'])) && (!empty($_GET['prenom']))))
//{
//    $nom = $_GET['nom'];
//    $prenom = $_GET['prenom'];
//}
//else
//{
//    $nom = 'nom';
//    $prenom = 'prenom';
//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Accueil</title>
    <meta lang="fr">
</head>
<body>
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
<h1> Bonjour <?=$nom.' '. $prenom?></h1>
</body>
</html>
