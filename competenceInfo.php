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
                    <li>•	<b>PHP</b></li>
                    <li>•	<b>HTML/CSS</b></li>
                    <li>•	<b>Base de données</b> SQL (MySQL, SQLServer, PostgreSQL)</li>
                    <li>•	<b>Javascript</b>(jQuery, AJAX)</li>
                    <li>•	Front-end VueJS-2</li>
                    <li>•	Back-end Symfony4/5</li>
                </ul>

                <canvas id="graph" style="display: block; margin-left: auto;  width: 75%; margin-right: auto;">
                Ce graphique n'est pas soutenu par votre navigateur.
                </canvas>
            </div>

            <div class="tab-content" id="environnement">
                <ul>
                    <li>•	Environnement <b>Linux/Unix</b> et <b>Windows</b> maîtrisé</li>
                    <li>•	Logiciel de <b>versionning<b> (Git-bash/GitHub, SVN)</li>
                    <li>•	Gestion de projet en méthodes <b>agiles<b> (WeKan, Trello, Gantt, Microsft Project)</li>
                    <li>•	<b>POWER BI</b></li>
                    <li>•	Outils bureautiques (Word, Excel, PowerPoint, Project, Libre Office)</li>
                    <li>•	Développement d'<b>application Android</b> (Android-Studio et Firebase)</li>
                    <li>•	Outils d’accessibilité (W3C, WAI et WCAG 2.0)</li>
                    <li>•	Connaissance du CMS WordPress</li>
                    <li>•	Outils d'<b>accessibilité web</b> (W3C, WAI et WCAG 2.0)</li>
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