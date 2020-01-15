<?php
//$bdd= new PDO('mysql:host=localhost;dbname='/*entrez une bdd*/'', 'root', '');


if(isset($_POST['forminscription']))
{
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['E-mail']);
    $mdp = ($_POST['mdp']);
    $nomlength = strlen($nom);
   if(!empty($nom) AND !empty($prenom) AND !empty($mail) AND !empty($mdp)){

       if($nomlength <= 255){
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                    $cryptmdp = sha1($mdp);
                    $insertmbr = $bdd->prepare("INSERT INTO /*entre une table*/ (nom, prenom, mail, mdp) VALUES(?,?,?,?)");
                    $insertmbr->execute(array($nom, $prenom, $mail, $cryptmdp));
                    $erreur = "Votre compte a bien été créé";
                    header('Location: index.php');
            }else{
                $erreur = "votre adresse mail n'est pas valide";
            }
       } else{
           $erreur = "Votre nom ne doit pas depasser 255 characteres";
       }
     
   }
   else{
    $erreur = 'tous les champs doivent etre completés';
   }
}
?>

<?php
$current = "Inscription";
include '../../includes/header.php';
?>

<main>
<div id="formulaire">

    <form method="POST" action="">
<div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" value="<?php if(isset($nom)) {echo $nom; } ?> "/>
</div>
<div>
        <label for="prenom">Prenom : </label>
        <input type="text"name="prenom" id="prenom" value="<?php if(isset($prenom)) {echo $prenom; } ?> "/>
</div>
<div>
        <label for="E-mail">E-mail : </label>
        <input type="email" name="E-mail" id="E-mail" value="<?php if(isset($mail)) {echo $mail; } ?> "/>
</div>
<div>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp"/>
</div>
<div>
<button type="submit"  name="forminscription">INSCRIPTION</button>
<button><a href="../connexion/index.php">CONNEXION</a></button>
</div>
    </form>
  
 
</div>
<p class="erreur"><?php if(isset($erreur)){ echo $erreur;}?></p>
</main>
<?php 
include "../../includes/footer.php";
?>