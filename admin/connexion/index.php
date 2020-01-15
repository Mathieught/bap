<?php
session_start();
//$bdd= new PDO('mysql:host=localhost;dbname='/*entrez une bdd*/'', 'root', '');


if(isset($_POST['formconnexion'])){
    $mailconnect=htmlspecialchars($_POST['E-mailconnect']);
    $mdpconnect=($_POST['mdpconnect']);
    if(!empty($mailconnect) && !empty($mdpconnect)){
        $mdpcrypt = sha1($mdpconnect);
        $requser = $bdd->prepare('SELECT * FROM /*entrez une table*/ */ WHERE mail = ? AND mdp = ? ');
        $requser->execute(array($mailconnect, $mdpcrypt));
        $userexist = $requser->rowCount();

        if($userexist == 1){
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['mail'] = $userinfo['mail'];
                $_SESSION['mdp'] = $userinfo['mdp'];
                echo('connexion effectuée');
                header("Location: profil.php?id=".$_SESSION['id']);
              

        }else{
            $erreur = "Mauvais mail et mdp";
        }

    } else{
        $erreur = "vous n'avez pas rempli tous les champs";
    }

}
?>
<?php
$current = "Connexion";
include '../../includes/header.php';
?>

<main>

<div id="formulaire">

    <form method="POST" action="">
<div>
        <label for="E-mail">E-mail : </label>
        <input type="email" name="E-mailconnect" id="E-mail" value="<?php if(isset($mailconnect)) {echo $mailconnect; } ?> "/>
</div>
<div>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdpconnect" id="mdp"/>
</div>
<div>
<button><a href="../inscription/index.php">INSCRIPTION</a></button>
<button type="submit"  name="formconnexion">CONNEXION</button>
</div>
    </form>
    <p class="erreur"><?php if(isset($erreur)){ echo $erreur;}?></p>
 
</div>
</main>
<?php 
include "../../includes/footer.php";
?>