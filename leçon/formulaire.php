<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
    // Inclusion du fichier d'en-tête (header2.php)
    include_once('header2.php');
?>
<h1> Les formulaires </h1>
<!--
Ils sont utulisé pour une gestion interactive d'un site et sont à la base des pages web dynamique.
*mise ne oeuvre*
Un formulaire html est définie entre les balise <form> et </form>

methode : mode de transmisions vers le serveur des information saisies dans le formulaire.
action : qui contient le script qui va traiter le formulaire ou le données du formulaire.

L'atribut method comprend deux types de valeurs : GET et POST
GET : se rapporte aux données du formulaire qui seront transmises par un url et utulise la variable superglobase $_GET
Post : se rapport aux donnée du formulaire qui seront transmises dans le corps de la requete. et utulise la variable superglobase $_POST
Syntax : 
$data = $_GET['dt'];//GET
$data + £_Post['dt']; // Post 
-->
<form action = "" method="get">
    NOM : <input type="text" name ="nom"> <br> <br>
    ville : <input type="text" name = "prenom"><br><br>
    <input type="submit">
</form>
<!--
    la methode GET  envoie les donnée sous forme d'une suite de couples nom/valeurs aoutés à l'URL de la page appelé.
    La partie d'une URL précede pa ? est appel chaine de requete. si la chaine de requete contient plusieur éléments,alors chaque élément /valeur doit etre séparé
    par le caractére &amp;
    par ailleur ,elle doit pas dépasser 255 caractére. les données transmises au serveur par la methode GET sont  sont visible par les utulisateur directement dans la barre d'adresse du navigateur.
-->
<p>bonjour</p>
<p>votre nom est<?php echo $_GET['nom'];?> , et votre prénom est <?php echo $_GET['prenom'];?></P>
<p> faite un autre essai, <a href='#'> cliquez ici </a></p>
<?php
    
    include_once('../footer.php');
?>
</body>
</html>