<a id="sport"></a>
<a id="autre"></a>
<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

    <h1>Loisirs</h1>
    <br />

    <div>
        <ul class="tabs">
            <li class="active"><a href="#benevolat">BENEVOLAT</a></li>
            <li><a href="#sport">SPORT</a></li>
            <li><a href="#autre">AUTRE</a></li>
        </ul>
        <div class="tabs-content">

            <div class="tab-content active" id="benevolat">
                <p>•	Aide chez les personnes âgées concernant leur souci d’<b>informatique</b>, notamment pour :
                     <ol>
                        <li>Le debuggage informatique</li>
                        <li>Leur téléviseur</li>
                        <li>L'installation et réglage de box internet</li>
                        <li>Gestion de leur boite email etc</li>
                    </ol>
                </p>

                <p>•	Me changer l’esprit en m’occupant des <b>espaces verts</b> de mon voisinage, totamment en m'occupant de :
                    <ol>
                        <li>L'entretien de massif</li>
                        <li>Le jardinage</li>
                        <li>La taille des arbres</li>
                        <li>La tonte du gazon</li>
                        <li>Le mulching</li>
                        <li>Le déroussaillage etc</li>
                    <ol>
                </p>
            </div>


            <div class="tab-content" id="sport">
                <p>•	Pratique régulière dans une <b>salle de sports</b> depuis 2017, cela me permet 
                entre autres de penser à autre chose qu'à l'informatique. Comme dit le dicton, bien dans 
                son corps, bien dans sa tête.</p>

                <p>•	Pratiquant de <b>volley-ball</b> régulier.</p>

                <p>•	Encien pratiquant en club communal du <b>VTT</b>. Cette passion ne m'a jamais quitté puisque dès que je pars en vacances, je l'emnène avec moi.</p>
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

                <p>•	Je m'intéresse aussi beaucoup aux nouvelles technologies. En ce moment, je me perfectionne au CMS <b>WordPress</b>.<p>
                    
                <p>•	Je joue aussi de temps en temps à Cities-Skylines, Transport-Fever et Factorio qui sont des jeux de création et de <b>gestion de ville</b>.</p>

                <p>•	Je posséde le permis <b>voiture, grande remorque et bateau côtier</b>. A présent quand j'en ai l'occasion, je pars en balade avec des amis sur les cotes de la mer méditérranée.</p>
            </div>

        </div>
    </div>

    <br />
    <div class="d-grid gap-2 col-2 mx-auto boutonContact">
        <button onclick="window.location.href='index.php'" type="submit" class="btn btn-primary">Retour</button>
    </div>

</div>
<script type="text/javascript" src="js/controller.js"></script>
<script type="text/javascript" src="js/onglets.js"></script>
<?php require('pied.php'); ?>