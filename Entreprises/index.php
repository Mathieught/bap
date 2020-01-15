<?php
$current = "Entreprises";
include '../includes/header.php';
?>

<main>
    <div class="head">
        <h1 class="title">Proposer son projet</h1>
    <img src="/image/profil/img3.jpg" alt="work image">
    </div>
    <div class="container">
        

        <div class="boxContainer">
            <h2>FORMULAIRE DE DEMANDE</h2>
                <form action="">
                    <div class="field">
                    <label for="nom">Nom</label>
				    <input class="form" type="text" id="nom" >
                    </div>

                    <div class="field">
                    <label for="prenom">prenom</label>
				    <input class="form" type="text" id="prenom">
                    </div>

                    <div class="field">
                    <label for="entreprise">Nom de l'entreprise</label>
				    <input class="form" type="text" id="entreprise">
                    </div>

                    <div class="field">
                    <label for="adresse">Code postal</label>
				    <input class="form" type="text" id="adresse">
                    </div>

                    <div class="field">
                    <label for="telephone">Téléphone</label>
				    <input class="form" type="text" id="telephone">
                    </div>

                    <div class="field">
                    <label for="mail">E-mail</label>
				    <input class="form" type="text" id="mail">
                    </div>

                    <div class="field">
                    <label for="statut">Statut Juridique</label>
				    <input class="form" type="text" id="statut">
                    </div>

                    <div class="field">
                    <label for="type">Type de projet</label>
                    <select data-placeholder="Choix d'axe" id="select" class="chosen-select" multiple>
                        <option value="valeur1">Création & design</option> 
                        <option value="valeur2">Developpement Web</option>
                        <option value="valeur3">Communication digital</option>
                    </select>
                    </div>

                    <div class="field">
                    <label for="contenu">Contenu de la demande</label>
                    <textarea id="contenu" name="contenu"></textarea>
                    </div>

                    <div class="field">
                    <label for="pitch">Pitch du projet</label>
                        <input class="form" type="file" id="pitch">
                    </div>
                    
                    <div class="field">
                    <input class="btn" type="submit" value="Envoyer la demande">
                    </div>
                </form>
        </div>
    </div>
</main>

<?php 
include "../includes/footer.php";
?>