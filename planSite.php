<a id=""></a>

<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

    <h1>Plan du site</h1>

        <p>
			<h4 class="TitrePlanSite"><a href="index.html">Accueil</a></h4>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a href="contact.php">Me contacter</a></h4>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a>Mon profil</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="monProfil.php">Mon profil</a></li>
					<li><a href="monProfil.php#cv">Mon CV</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a>Mes expériences</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="experiences.php">Professionnelle</a></li>
					<li><a href="experiences.php#stage">Stages</a></li>
					<li><a href="experiences.php#projet">Projets</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a>Compétences informatiques</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="competenceInfo.php">Environement et logiciel</a></li>
					<li><a href="competenceInfo.php#prog">Programmation</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a>Mes formations</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="formations.php">Master MIASHS</a></li>
					<li><a href="formations.php">Licence TNAP</a></li>
					<li><a href="formations.php">IUT GEII</a></li>
					<li><a href="formations.php">Baccalauréat STI2D</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a>Loisirs et passions</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="loisirsPassions.php">Bénévolat</a></li>
					<li><a href="loisirsPassions.php#sport">Sport</a></li>
					<li><a href="loisirsPassions.php#autre">Autre</a></li>
				</ul>
		</p>
		
		<br />
		<div class="d-grid gap-2 col-2 mx-auto boutonContact">
        	<button onclick="window.location.href='index.html'" type="submit" class="btn btn-primary">Retour</button>
    	</div>

	</div>

<?php require('pied.php'); ?>