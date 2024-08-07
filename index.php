<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include ('components/header.php');
    ?>
</head>
<body>


<?php
include ('components/navbar.php');
?>


<section class="homepage">
    <h1>Harichandra SIRACUSE - Développeur Symfony</h1>
    <p>Des projets Symfony qui parlent d'eux-mêmes - Avec plus de quatre ans d'expérience et une multitude de projets à mon
        actif, explorez mon portfolio afin de découvrir mes diverses réalisations.</p>
</section>


<section class="projects">
    <div class="projects-unit" data-aos="zoom-in">
        <a href="shevent">
            <img src="assets/img/shevent.jpg" alt="">
        </a>
        <div class="overlay">
            <p>SH Event</p>
        </div>
    </div>

    <div class="projects-unit" data-aos="zoom-in">
        <a href="laboulenoire">
            <img src="assets/img/laboulenoire.jpg" alt="">
        </a>
        <div class="overlay">
            <p>La Boule Noire</p>
        </div>
    </div>

    <div class="projects-unit" data-aos="zoom-in">
        <a href="starkmotors">
            <img src="assets/img/starkmotors.jpg" alt="">
        </a>
        <div class="overlay">
            <p>Stark Motors</p>
        </div>
    </div>
</section>

<?php
include ('components/footer.php');
?>


</body>
</html>