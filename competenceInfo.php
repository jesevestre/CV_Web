<a id="environnement"></a>
<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

    <h1>Compétences informatiques</h1>
    <br />
    
    <div>
        <ul class="tabs">
            <li class="active"><a href="#programmation">PROGRAMMATION</a></li>
            <li><a href="#environnement">ENVIRONNEMENTS ET LOGICIELS</a></li>
        </ul>
        <div class="tabs-content">

            <div class="tab-content active" id="programmation">
                <ul>
                    <li>•	<b>PHP</b> (7.0, 7.4, 8.2)</li>
                    <li>•	<b>SQL</b> (MySQL, PostgreSQL, SQLServer)</li>
                    <li>•	<b>Javascript</b> (Vanilla, jQuery, AJAX)</li>
                    <li>•	Framework <b>VueJS2 et 3</b></li>
                    <li>•	CMS <b>WordPress</b></li>
                    <li>•	HTML/CSS (Bootstrap)</li>
                    <li>•	Connaissance du Framework Symfony4</li>
                </ul>

                <canvas id="graph" style="display: block; margin-left: auto;  width: 75%; margin-right: auto;">
                Ce graphique n'est pas soutenu par votre navigateur.
                </canvas>
            </div>

            <div class="tab-content" id="environnement">
                <ul>
                    <li>•	Environnement <b>Linux/Unix</b> et <b>Windows</b> maîtrisé</li>
                    <li>•	Outils d'<b>accessibilité web</b> (W3C, WAI et WCAG 2.0)</li>
                    <li>•	Gestion de projet en méthodes <b>Agiles</b> (WeKan, Trello, Gantt)</li>
                    <li>•	Logiciel de <b>versionning</b> (Git/GitHub, SVN)</li>
                    <li>•	Hébergement et services <b>OVH</b></li>
                    <li>•	Visualisation des données <b>POWER BI</b></li>
                    <li>•	Respect et application des <b>règles RGPD</b></li>
                </ul>
            </div>

	    </div>
    </div>

    <br />
    <div class="d-grid gap-2 col-2 mx-auto boutonContact">
        <button onclick="window.location.href='index.php'" type="submit" class="btn btn-primary">Retour</button>
    </div>

</div>
<script type="text/javascript" src="js/graphe.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/onglets.js"></script>
<?php require('pied.php'); ?>