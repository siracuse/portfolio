<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harichandra SIRACUSE - Portfolio Développeur web back-end</title>
    <meta name="description"
          content="Développeur back-end PHP Symfony à Lyon. Retrouver sur mon site web mon portfolio, mes expériences et mon parcours scolaire de développeur back-end php"/>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="img/SH.ico" rel="shortcut icon" type="image/x-icon"/>
</head>
<body>


<?php
include('navbar.php');
?>


<section class="aboutme">
    <div class="aboutme-description">
        <div>
            <h2> À propos</h2>
            <p>Bonjour ! Je suis Hari, développeur web spécialisé sur Symfony, à Lyon, France.</p>

            <p>Mon parcours académique m'a conduit à obtenir une licence professionnelle en développement web, complétée
                par un master en réseau sécurité infrastructure. C'est au lycée, lors d'un cours de programmation sur
                Python, que j'ai découvert ma passion pour le développement, et depuis, je n'ai cessé de me
                perfectionner dans ce domaine.</p>

            <p>Avec une année d'expérience au sein d'une agence web, six mois de stages variés dans différentes
                entreprises et une expérience enrichissante de six mois à enseigner le développement web à des étudiants
                en BTS, j'ai acquis une solide expertise dans tous les aspects du développement web, de l'intégration au
                back-end, jusqu'à la mise en production.</p>

            <p>Parmi mes expériences professionnelles, un de mes stages a été particulièrement marquant, car c'est là
                que j'ai découvert ma technologie favorite : Symfony.</p>

        </div>
        <div class="aboutme-description-img">
            <img src="img/hari.jpg" alt="">
        </div>
    </div>
    <div class="aboutme-details">
        <div>
            <h2>Expérience</h2>

            <p><b>Alternance</b> Ingénieur ops build and automatisation junior</p>
            <p class="details-location">2022 à 2023 - 1 an - Eviden</p>

            <p><b>Stage</b> Architecte Cloud</p>
            <p class="details-location">2022 - 2 mois - Eviden</p>

            <p><b>Enseignant assistant</b> développement web pour une classe de BTS Informatique</p>
            <p class="details-location">2022 - 6 mois - ORT Lyon</p>

            <p><b>CDI</b> Développeur web full stack Symfony</p>
            <p class="details-location">2019 à 2020 - 1 an - Agence LuuuG</p>

            <p><b>Stage</b> de développement web Drupal</p>
            <p class="details-location">2018 - 3 mois - WebSenso</p>

            <p><b>Stage</b> de développement web PHP/Symfony</p>
            <p class="details-location">2018 - 7 semaines - Bourbon Web</p>

            <p><b>Stage</b> de développement web Joomla</p>
            <p class="details-location">2017 - 5 semaines - Webdesign-oi</p>
        </div>
        <div>
            <h2>Formation</h2>
            <p><b>Master</b> Expert réseau, Infrastructure et Sécurité</p>
            <p class="details-location">2021 - 2023 - ORT, Lyon 69008</p>

            <p><b>Licence professionnelle</b> Mobilité Internet Web (Développement web)</p>
            <p class="details-location">2018 - 2019 - Université d'Aix Marseille, Gap 05000</p>

            <p><b>BTS</b> Services Informatiques aux Organisation (Développement web)</p>
            <p class="details-location">2016 - 2018 - Lycée Bellepierre, La réunion 97400</p>
        </div>
    </div>

    <div class="aboutme-cv">
        <a href="cv.pdf" target="_blank">MON CV</a>
    </div>

</section>




<?php
include ('footer.php');
?>

</body>
</html>