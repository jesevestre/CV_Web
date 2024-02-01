<?php
    if(isset($_GET["accepte-cookie"])){
        setcookie("accepte-cookie", "true", time() + 365*24*3600);
        header("Location:./");
        die();
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/PNG" href="images/icone.PNG" />
    <title>CV web Jean-Baptiste Sevestre</title>

    <link href="css/styleAccueil.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" ref="stylesheet" />

    <script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span class="titre">JEAN-</span><span class="titre">BAPTISTE </span><span class="titreHidden">SEVESTRE</span></h1>

        <div class="container-btns">
            <a href="monProfil.php"><button class="btn-first b1">Mon profil</button></a>
            <a href="experiences.php"><button class="btn-first b2">Expériences</button></a>
            <a href="competenceInfo.php"><button class="btn-first b3">Compétences</button></a>
            <a href="formations.php"><button class="btn-first b4">Formations</button></a>
            <a href="loisirsPassions.php"><button class="btn-first b5">Loisirs</button></a>
        </div>
    </div>

    <div class="switch-mode">
        <img src="images/soleil_clair.png" class="soleil_clair" onclick="ImgDarkMode()" />
        <img src="images/soleil_fonce.png" class="soleil_fonce" onclick="ImgDarkMode()" />
        <input type="checkbox" id="clickDarkMode" onclick="darkMode()" />
    </div>

    <div>
        <a href="#"><img src="images/drapeauFR.jpg" class="logo" alt="" /></a>
        <a href="indexEN.php"><img src="images/drapeauUSA2.png" class="logo" alt="Lien vers la page d'accueil en Anglais" /></a>
    </div>

    <ul class="medias">
        <li class="bulle"><a href="https://www.linkedin.com/in/jean-baptiste-sevestre-588674134/" target="_blank"><i class="fab fa-2x fa-linkedin" alt="Lien pour accéder à LinkedIn" style="color: #222" class="logo-medias"></i></a></li>
        <li class="bulle"><a href="https://github.com/jesevestre" target="_blank"><i class="fab fa-2x fa-github" alt="Lien pour accéder à GitHub" style="color: #222" class="logo-medias"></i></a></li>
        <li class="bulle"><a href="https://www.facebook.com/JeanB.sevestre/" target="_blank"><i class="fab fa-2x fa-facebook" alt="Lien pour accéder à Facebook" style="color: #222" class="logo-medias"></i></a></li>
        <li class="bulle"><a href="https://www.instagram.com/je.sevestre/" target="_blank"><i class="fab fa-2x fa-instagram-square" alt="Lien pour accéder à Instagram" style="color: #222" class="logo-medias"></i></a></li>
    </ul>

    <?php
    if(!isset($_COOKIE["accepte-cookie"])){
    ?>
        <div class="banniere">
            <div class="text-banniere">
                <p> Ce site utilise quelques cookies navigateur <span class="invisible-banniere-text">pour vous proposer la meilleure expérience de navigation possible</span>&nbsp;&nbsp;</p>
            </div>

            <div class="button-banniere-vert">
                <a href="?accepte-cookie">Faire&nbsp;disparaître</a>
            </div>
            <!-- <span class="invisible-banniere-button">
                <div class="button-banniere-rouge">
                    <a href="?refuse-cookie">Refusé</a>
                </div>
            </span> -->

        </div>
    <?php
    }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>