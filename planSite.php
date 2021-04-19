<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />

    <h1>Plan du site</h1>

        <p>
			<h4 class="TitrePlanSite"><a href="index.php" style="color: #343a40;">Accueil</a></h4>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a href="contact.php" style="color: #343a40;">Me contacter</a></h4>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a href="index.php#/arbre" style="color: #343a40;">Mon profil</a>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Mes expériences</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="experiences.php">Professionnelle</a></li>
					<li><a href="experiences.php#stage">Stages</a></li>
					<li><a href="experiences.php#projet">Projets</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Compétences informatiques</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="competenceInfo.php">Environement et logiciel</a></li>
					<li><a href="competenceInfo.php#prog">Programmation</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Mes formations</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="formations.php">Master MIASHS</a></li>
					<li><a href="formations.php">Licence TNAP</a></li>
					<li><a href="formations.php">IUT GEII</a></li>
					<li><a href="formations.php">Baccalauréat STI2D</a></li>
				</ul>
		</p>
		<p>
			<h4 class="TitrePlanSite"><a style="color: #343a40;">Loisirs et passions</a></h4>
				<ul class="PlanSiteSub">
					<li><a href="loisirsPassions.php">Bénévolat</a></li>
					<li><a href="loisirsPassions.php#sport">Sport</a></li>
					<li><a href="loisirsPassions.php#autre">Autre</a></li>
				</ul>
		</p>
		
		<br />
        <button onclick="window.location.href='/index.php'" type="submit" class="btn btn-secondary" 
		style="background-color:#333; text-align: center; margin-left: 46%;">Retour</button>

	</div>

<?php require('pied.php'); ?>