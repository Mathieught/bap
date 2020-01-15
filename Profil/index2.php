<?php
$current = "Profil";
include '../includes/header.php';
?>

<main>
    <div class="head">
        <h1 class="title">Mon profil</h1>
    <img src="/image/profil/img5.jpg" alt="work image">
    <div><img class="pp" src="/image/profil/img5.jpg" alt=""></div>
    </div>
    <div class="container">
        <div class="boxContainer">
            <div class="desc">
                <div class="field">
                    <h3>Nom :</h3>
                    <h3>Romain</h3>
                </div>
                <div class="field">
                    <h3>Prénom :</h3>
                    <h3>Vincent</h3>
                </div>
                <div class="field">
                    <h3>Téléphone :</h3>
                    <h3>0605898745</h3>
                </div>
                <div class="field">
                    <h3>Email :</h3>
                    <h3>VincentRomain@gmail.com</h3>
                </div>
            </div>
            <h1 class="nomEntreprise">Nom de l'entreprise : Etihad</h1>
            <h2>Mon projet</h2>
            <div class="boxVideo"><iframe width="560" height="315" src="https://www.youtube.com/embed/RIEvhDhtvxM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            <button class="btn">SUIVI DE MON PROJET</button>
            <div class="boxProgress">
            <h2>ideation</h2>
            <div class="progress">
	            <div class="bar">
		            <div class="percent">50%</div>
	            </div>
            </div>
            <h2>Conception / Prototypage</h2>
            <div class="progress">
	            <div class="bar2">
		            <div class="percent2">0%</div>
	            </div>
            </div>
            <h2>Finalisation projet</h2>
            <div class="progress">
	            <div class="bar3">
		            <div class="percent3">0%</div>
	            </div>
            </div>
            <div class="boxBtn">
                <input type="file" class="file"></input>
                <button class="btn2">Voir les fichier déposés</button>
            </div>
            </div>
        </div>
    </div>
</main>
<?php 
include "../includes/footer.php";
?>