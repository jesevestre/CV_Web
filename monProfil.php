<a id="cv"></a>
<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

    <h1>Je me présente</h1>
    <br />

    <div>
        <ul class="tabs">
            <li class="active"><a href="#profil">MON PROFIL</a></li>
            <li><a href="#cv">MON CV</a></li>
        </ul>
        <div class="tabs-content">

            <div class="tab-content active" id="profil">
                <p><b>Mon profil de développeur</b> Depuis Septembre 2018</p>
                <ul>
                    <li>•   Avec une expérience professionnelle de <b>3 ans</b> en tant que développeur web <b>fullstack</b>, j’ai à cœur de développer, améliorer et maintenir des solutions avec un haut niveau de <b>qualité et d’exigence</b>.</li>

                    <li>•	Par mes études, je possède une expertise poussée des principes <b>UX/UI</b>, du <b>responsive</b> et du <b>web design</b>, et j'ai été, lors de mon dernier poste, <b>chef de projet</b> d’une équipe de 3 personnes. </li>
                    <br />
                </ul>
            </div>

            <div class="tab-content" id="cv">
                <p><b>Mon Curriculum vitæ</b><br />
                <span class="small"> Mis à jour le 24 Novembre 2024</span></p>

                <div class="col-12">
                    <ul class="pt-3 text-center" style="margin-left: -5% !important;">
                        <iframe  src="fichierTelechargeable/CV_Jean-Baptiste_SEVESTRE.pdf" height="800" width="90%"></iframe>
                    </ul>

                    <div class="text-center pt-1">
                        <a href="fichierTelechargeable/CV_Jean-Baptiste_SEVESTRE.pdf" download="CV_Jean-Baptiste_SEVESTRE.pdf" class="col-10 btn btn-primary" style="top: 0px !important;">Télécharger le CV en fichier PDF</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br />
    <div class="d-grid gap-2 col-2 mx-auto boutonContact">
        <button onclick="window.location.href='index.php'" type="submit" class="btn btn-primary">Retour</button>
    </div>

</div>
<script type="text/javascript" src="js/onglets.js"></script>
<?php require('pied.php'); ?>