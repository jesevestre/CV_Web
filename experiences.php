<a id="stages"></a>
<a id="projets"></a>

<?php require('tete.php'); ?>

<div class="container">
    <br />
    <div class="tel-400px"></div>

    <h1>Mes expériences</h1>
    <br />

    <div>
        <ul class="tabs">
            <li class="active"><a href="#professionnelles">PROFESSIONNELLE</a></li>
            <li><a href="#stages">STAGES</a></li>
            <li><a href="#projets">PROJETS</a></li>
        </ul>
        <div class="tabs-content">

            <div class="tab-content active" id="professionnelles">

                <article class="poste">
                    <button type="button" class="faq__question-toggler" onClick="handleQuestionToogle1()">
                        <i class="fas fa-arrow-circle-down" id="content-container-1-icone"></i>
                        <span class="poste_toggler_text"><b>Développeur web, Média-immo, Corbeil-Essonnes (91)</b> Depuis novembre 2022</span>
                    </button>
                    <div class="faq__content-container--active" id="content-container-1">
                        <ul class="faq__content-text">
                            <li>• Dans le cadre de la loi ELAN imposant aux mairies d’avoir une gestion dématérialisée des autorisations d’Urbanisme, il m’a été confié de reprendre le développement de l’application Mairie-Urba permettant la transmission sécurisée et instantanée des échanges entre les différents acteurs (pétitionnaire, instructeur, service de l’État).</li>

                            <li>• Développement et correction de deux applications en PHP 7.4 avec Bootstrap en front-end, Javascript utilisant jQuery et participation à la mise en place de l’API Plat’AU pour les demandes qui ont besoin d’une consultation d’un service de l’État.Ce développement comprend notamment :<br />
                            <ol><li style="margin-left: 15px;">La maintenance corrective et évolutive du site internet,</li>
                            <li style="margin-left: 15px;">Refonte et intégration d'interfaces, développement Full Stack,</li>
                            <li style="margin-left: 15px;">Assistance des utilisateurs (incidents, anomalies, présentation des évolutions),</li>
                            <li style="margin-left: 15px;">Analyse des besoins, préconisations techniques,</li>
                            <li style="margin-left: 15px;">Développements d’interfaces responsives,</li>
                            <li style="margin-left: 15px;">Intégration d’éléments graphiques préparés par le service communication.</li></ol>

                            <li>• Formation de deux nouveaux collègues durant trois mois me rejoignant sur ce projet.
                            </li>

                            <li>• Chef de projet de ses deux collègues ayant pour objectif la mise en production pour 2024 de la solution Mairie-Urba.
                            </li>
                        </ul>
                    </div>
                </article>

                <article class="poste">
                    <button type="button" class="faq__question-toggler" onClick="handleQuestionToogle2()">
                        <i class="fas fa-arrow-circle-right" id="content-container-2-icone"></i>
                        <span class="poste_toggler_text"><b>Ingénieur développeur, CEA, Saclay (91)</b> Juillet 2021 - Juillet 2022</span>
                    </button>
                    <div class="faq__content-container" id="content-container-2">
                        <ul class="faq__content-text">
                            <li>• Développement de deux applications web précédemment utilisées en PowerBuilder (interface Windows aussi appelée client lourd).</li>

                            <li>• L'intérêt de la première application était de pouvoir suivre les réponses des projets déposés par les chercheurs aux appels à proposition des différents organismes (U-E, ANR, Région etc), puis de pouvoir visualiser l'évolution des projets retenus. Un suivi détaillé de l'évolution des demandes se faisait par l'utilisation de workflow (code état) jusqu'à la signature ou non du projet qui basculait ensuite en contrat.</li>

                            <li>• La deuxième application est utilisée pour la gestion financière des contrats de recherche. Leur nombre croissant a amené mon institut de rattachement à réfléchir à un système global de suivi des contrats de recherche. Ceci dans
                                l'objectif de suivre et coordonner les dépenses inhérentes des contrats et les rapprocher d'un budget préalablement défini.
                                Ce système doit répondre à deux impératifs importants : <br />
                                <span class="espacement"></span> 1) Améliorer le dialogue entre porteurs de projet, service et groupe administratif de l’institut, par l’utilisation
                                d’informations communes. <br />
                                <span class="espacement"></span>2) Mettre en place une mutualisation intelligente, souple et partagée des overheads générés par ces contrats afin d’augmenter la productivité et la confiance des utilisateurs dans les données présentées.
                            </li>

                            <li>• Participation de la migration vers un nouveau serveur en version PHP 7.4 et APACHE 2.0 avec un informaticien réseau et administrateur système ainsi que le passage de l'encodage en ISO vers de l'UTF8.</li>
                        </ul>
                    </div>
                </article>

                <article class="poste">
                    <button type="button" class="faq__question-toggler" onClick="handleQuestionToogle3()">
                        <i class="fas fa-arrow-circle-right" id="content-container-3-icone"></i>
                        <span class="poste_toggler_text"><b>Analyste développeur, ISOAR, Rungis (91)</b> Décembre - Mars 2021 (4 mois)</span>
                    </button>
                    <div class="faq__content-container" id="content-container-3">
                        <ul class="faq__content-text">
                            <li>• Développement de l’outil CRM web du logiciel d’ERP Squalp ayant comme objectif pour les commerciaux d’avoir une utilisation nomade de l’application lors de leur mission.Durant cette phase j’ai réalisé consulting data avec l’étude de mise en oeuvre, puis la conception de l’application en gestion du projet (Trello) en modèle MVC utilisant les technologie PHP-Objet et VueJS-2, concepteur et administrateur de la base de données en SQLServer, et enfin bêta-testeur.</li>

                            <li>• Développement et déploiement du site de l’entreprise utilisant entre autres la librairie Impress.js ayant comme objectif principal l’explication du logiciel Squalp.</li>

                            <li>• Utilisation du logiciel d’analyse de visualisation de données POWER-BI (low-code).</li>
                        </ul>
                    </div>
                </article>
                <br />

            </div>

            <div class="tab-content" id="stages">
                <p><b>Stagiaire en R&D, secteur du Diagnostic System, Groupe Renault, Guyancourt (78)
                    </b>Mars – Septembre 2020 (6 mois)</p>
                <ul>
                    <li>• Mise en place d'une application web avec une base de données permettant la gestion des retours usines sous forme de code erreur. Il a comme objectif d’automatiser et de rendre paramétrable par les utilisateurs, ces retours usines.</li>

                    <li>• Travail accompagné d'une partie accessibilité pour personne à déficience visuelle et à la mise en place de l’interface en multilingue.</li>

                    <li>• Expérience et compétence acquises dans la réalisation de ce projet en large autonomie utilisant les langages de programmation PHP, HTML/CSS et les requêtes PostgreSQL.</li>

                    <li><a href="fichierTelechargeable/Mémoire_De_Stage_Jean-Baptiste_SEVESTRE_Master.pdf" download="Mémoire_De_Stage_Jean-Baptiste_SEVESTRE_Master.pdf">Télécharger le rapport</a></li>
                    <li><a href="fichierTelechargeable/Oral_Jean-Baptiste_SEVESTRE_Master.pptx" download="Oral_Jean-Baptiste_SEVESTRE_Master.pptx">Télécharger la présentation</a></li>
                </ul>
                <br />

                <p><b>Stagiaire en domotique dans un EHPAD, Fondation Partage & Vie, Corbehem (62)</b> Février – Juin 2018 (5 mois)</p>
                <ul>
                    <li>• Ma mission était la réalisation d’une étude de faisabilité, de conception et de réalisation d'un
                        appartement dans le but de le domotiser.</li>

                    <li>• Capacité de recherche de matériel à mettre en place, travail en équipe, en lien étroit avec de nombreuses
                        entreprises, réalisation d’appel à projet, préparation et animation des réunions, force de proposition.</li>

                    <li><a href="fichierTelechargeable/Rapport_De_Stage_Jean-Baptiste_SEVESTRE_Licence.pdf" download="Rapport_De_Stage_Jean-Baptiste_SEVESTRE_Licence.pdf">Télécharger le rapport</a></li>
                    <li><a href="fichierTelechargeable/Oral_Jean-Baptiste_SEVESTRE_Licence.ppt" download="Oral_Jean-Baptiste_SEVESTRE_Licence.ppt">Télécharger la présentation</a></li>
                </ul>
                <br />

                <div class="reveal">
                    <p><b>Stagiaire en R&D, secteur du Diagnostic System, Groupe Renault, Guyancourt (78)</b> Avril - Juillet 2017 (3 mois)</p>
                    <ul class="decalleLI">
                        <li>• Ma mission était la réalisation d’une étude visant la réduction du temps de transfert des données lors
                            de la production des véhicules.</li>

                        <li>• Présentation de mes travaux devant mon groupe projet de 18 personnes avec la présence des responsables
                            du Groupe Renault qui décident des investissements.</li>

                        <li><a href="Rapport_De_Stage_Jean-Baptiste_SEVESTRE_IUT.pdf" download="Rapport_De_Stage_Jean-Baptiste_SEVESTRE_IUT.pdf">Télécharger le rapport</a></li>
                        <li><a href="fichierTelechargeable/Oral_Jean-Baptiste_SEVESTRE_IUT.pptx" download="Oral_Jean-Baptiste_SEVESTRE_IUT.pptx">Télécharger la présentation</a></li>
                    </ul>
                </div>
                <br />

                <div class="reveal">
                    <p><b>Stagiaire en robotique, Université Glyndwr, Pays de Galles</b> Juillet 2015 (4 semaines)</p>
                    <ul class="decalleLI">
                        <li>• Perfectionnement de l’anglais et présentation en anglais des performances du robot Nao devant
                            des journalistes d’une chaine nationale et des professeurs de l’université.</li>
                    </ul>
                </div>
            </div>



            <div class="tab-content" id="projets">
            <p><b>Réalisation d’un site web pour la prise de rendez-vous de massage de confort et sportif</b></p>
                <ul class="decalleLI">
                    <li>• Réalisation d’une application web pour une personne se lançant dans les massages et ayant besoin d'un logiciel web de prise de rendez-vous pour planifier ses séances. Site web réalisé avec le Framwork Bootstrap5 en PHP7.4 et en MySQL contenant un espace administrateur et un espace client : <a href="http://cempolytechnique.free.fr/" target="blank"><span class="text-primary">LeRdvBienEtre.fr</span></a>
                    </li>
                </ul>
                <br />

                <p><b>Réalisation d’un site vitrine pour un ami se lançant dans le coaching sportif</b></p>
                <ul class="decalleLI">
                    <li>• Réalisation d’un site internet pour une personne se lançant dans le coaching sportif et ayant
                        besoin de visibilité. Site web réalisé avec le Framwork VueJS-2 contenant présentement un carrousel avec un zoom image, un système d'onglet permettant d'afficher les informations hiérarchiquement, un système de routeur avec des
                        animations entre les vues, une boutique en ligne permettant de vendre des produits sportifs, une page de contact,
                        et enfin un en-tête/pied de page avec Bootstrap5 : <a href="http://m.training.free.fr/" target="blank"><span class="text-primary">m.training.free.fr</span></a>
                    </li>
                </ul>
                <br />

                <p><b>Réalisation d'un blog avec base de données en architecture MVC</b></p>
                <ul class="decalleLI">
                    <li>• Réalisation sur le Framework back-end Symfony4 d'un blog avec base de données en architecture MVC, possédant
                        différents niveaux d'autorisation (administrateur, modérateur, éditeur et utilisateur) possédant un espace personnel sécurisé. Ce blog comprend la possibilité d'une gestion complète des articles avec différentes catégories disponibles, et un espace commentaire en dessous.
                    </li>
                </ul>
                <br />

                <p><b>Réalisation d'un CV web</b></p>
                <ul class="decalleLI">
                    <li>• Réalisation d’un site internet vitrine pour développer davantage en profondeur ma personnalité, mes expériences, mes compétences, mes formations, mes loisirs et passions. Ce site web est réalisé avec en HTML/CSS et JavaScript avec la librairie GSAP et Bootstrap5. Ce site web est accessible mobile, tableau et personne à déficience visuelle <a href="http://jsevestre02.free.fr/" targer="blanck"><span class="text-primary">jsevestre02.free.fr</span></a>
                    </li>
                </ul>
                <br />

                <div class="reveal">
                    <p><b>Développement d’une application Android pour les personnes atteintes de la maladie d’Alzheimer</b></p>
                    <ul class="decalleLI">
                        <li>• Développement d’une application Android pour les personnes atteintes de la maladie d’Alzheimer
                            comprenant une montre connectée et une application aidant. L'objectif de ce projet est que la personne âgée
                            puisse se repérer et être guidée dans l’espace public. De plus un outil de reconnaissance faciale a été
                            mis en place pour qu’elle puisse reconnaître ses proches. <a href="fichierTelechargeable/Rapport-Finale_Don'tForget.pdf" download="Rapport-Finale_Don'tForget.pdf">Télécharger le rapport</a>
                        </li>
                    </ul>dex
                </div>
                <br />

                <div class="reveal">
                    <p><b>Création d’un site internet pour l'association équestre de l'Ecole Polytechnique</b></p>
                    <ul class="decalleLI">
                        <li>• Création d’un site internet pour l'association équestre de l'Ecole Polytechnique, comprenant
                            une partie actualité, ainsi qu'une partie gestion des cours. Ce site web est aussi doté d'une partie
                            assez complète concernant l'accessibilité visuelle. Ce fu mon premier déploiement sur un serveur privé.
                        </li>
                    </ul>
                </div>
                <br />

                <div class="reveal">
                    <p><b>Création d’un globe terrestre à persistance rétinienne</b></p>
                    <ul class="decalleLI">
                        <li>• Création d’un globe terrestre à persistance rétinienne à LED <a href="fichierTelechargeable/Projet_Tutoré_GlobeLED_SEVESTRE.pdf" download="Projet_Tutoré_GlobeLED_SEVESTRE.pdf">
                                Télécharger le rapport</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <br />
    <div class="d-grid gap-2 col-2 mx-auto boutonContact">
        <button onclick="window.location.href='index.php'" type="submit" class="btn btn-primary">Retour</button>
    </div>

</div>
<script type="text/javascript" src="js/apparition.js"></script>
<script type="text/javascript" src="js/accordeon.js"></script>
<script type="text/javascript" src="js/onglets.js"></script>
<?php require('pied.php'); ?>