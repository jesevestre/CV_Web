<a id="sport"></a>
<a id="autre"></a>

<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

    <h1>Mes loisirs et passions</h1>
    <br />

    <div>
        <ul class="tabs">
            <li class="active"><a href="#benevolat">BENEVOLAT</a></li>
            <li><a href="#sport">SPORT</a></li>
            <li><a href="#autre">AUTRE</a></li>
        </ul>
        <div class="tabs-content">

            <div class="tab-content active" id="benevolat">
                <p>•	Je réalise de l'<b>aide informatique</b> chez mes voisins âgées. je les dépanne régulièrement pour des soucis de
                téléviseur, installation et réglage de box internet, boite Email etc.</p>

                <p>•	En parallèle, j'entretiens le jardin de ces personnes. Je réalise entre autres l’entretien de massif, 
                    taille des arbres, tonte, débroussaillage, jardinage etc.</p>
            </div>


            <div class="tab-content" id="sport">
                <p>•	Je pratique du <b>sport de résistance</b> qui est la musculation dans une salle de sports depuis 2017, cela me permet 
                entre autres de penser à autre chose qu'à l'informatique. Comme dit le dicton, bien dans 
                son corps, bien dans sa tête.</p>

                <p>•	Je suis aussi un ancien pratiquant de <b>handball</b> et <b>volley-ball</b> en club universitaire, que j'ai pratiqué durant mes deux années
                    à la faculté d'Angers.</p>

                <p>•	Enfin, je suis ancien pratiquant en club communal du <b>VTT</b>. Cette passion ne m'a jamais quitté puisque dès que je pars 
                    en vacances, je l'emnène avec moi.</p>
                <table class="image_sport">
                    <tr>
                        <td><img src="images/VTT.png" alt="image d'un VTT"></td>
                        <td><img src="images/handball.png" alt="image d'une balle de handball"></td>
                        <td><img src="images/dev_couche.png" alt="image d'une barre de développé couché"></td>
                    </tr>
                </table>
            </div>


            <div class="tab-content" id="autre">
                <p>•	Je suis passionné de <b>science-fiction</b>. J'adore me plonger dans de nouveaux univers qui font travailler l'imagination.</p>

                <p>•	Je m'intéresse aussi beaucoup aux nouvelles technologies. En ce moment, je me perfectionne au langage <b>JavaScript</b> et 
                au Framwork <b>VueJS-2</b> car j'ai l'ambition de devenir développeur full-stack. Je joue aussi de temps en temps à Cities-Skylines 
                qui est un jeu de création et de gestion de ville très complet.</p>
            </div>

        </div>
    </div>

    <br />
    <button onclick="window.location.href='index.html'" type="submit" class="btn btn-secondary" 
    style="background-color:#333; margin-left: 47%;">Retour</button>

</div>
<script type="text/javascript" src="js/onglets.js"></script>
<?php require('pied.php'); ?>