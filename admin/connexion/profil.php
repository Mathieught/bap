<?php
session_start();
$bdd= new PDO('mysql:host=localhost;dbname='/*entrez une bdd*/'', 'root', '');
if(isset($_GET['id']) AND $_GET['id'] > 0 ){
$getid = intval($_GET['id']);
$requser = $bdd->prepare('SELECT * FROM /*entrez une table*/ WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<div align="center">
<h1>Profil de <?php echo $userinfo['mail'];?></h1>

<?php
if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']){
?>
    <p>editer mon profil</p>
    <a href="../admin/deconnexion/index.php">se deconnecter</a>

<?php
}else{

}
?>

</div>
<?php
}else{

}
?>
