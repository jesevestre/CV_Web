<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Ccomptable" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" type="image/PNG" href="images/icone.PNG" />
    	<title>CV web Jean-Baptiste Sevestre</title>
		
		<link  rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
		<link  rel="stylesheet" type="text/css" href="css/navbar.css" />
		
		<!-- Principalement pour le pied de page -->
		<script src="https://kit.fontawesome.com/26d4a64054.js" crossorigin="anonymous"></script>

		<!-- Pour menu Bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
		crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
		integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
		crossorigin="anonymous"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
		integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
		crossorigin="anonymous"></script>

		<!-- Charte JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>	

		<script> /* Script pour l'adaptation des navigateurs au téléchargement */
			if ( ! Modernizr.adownload ) {
				var $link = $('a');
				$link.each(function() {
					var $download = $(this).attr('download');
				
					if (typeof $download !== typeof undefined && $download !== false) {
						var $el = $('<div>').addClass('download-instruction').text('Right-click and select "Download Linked File"');
						$el.insertAfter($(this));
					}
				});
			}
		</script>
	</head>

<body>
	<!-- NavBar Bootstrap --> 
	<div class="navbarwrap py-2"id="bg-primary">
		<div class="container">

			<nav class="navbar navbar-expand-lg navbar-dark">
				<a class="navbar-brand" id="navbarTitre" href="index.php"><i class="fas fa-address-book"></i>
				<span class="font-weight-bold" id="navbarTitreSpan">JEAN-BAPTISTE SEVESTRE</span></a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" 
				aria-expanded="false" aria-label="Toggle navigation">
				<div class="navbar-toggler-icon"></div>
				</button>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" id="navBarMenu" href="index.php"><strong>-- Accueil --</strong><span class="sr-only">(current)
							</span></a>
						</li>

						<li class="nav-item active">
							<a class="nav-link" id="navBarMenu" href="monProfil.php">Mon profil<span class="sr-only">(current)
							</span></a>
						</li>

						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle" href="#" id="navBarMenu"
							role="button" data-bs-toggle="dropdown" aria-expanded="false"
							data-toggle="collapse">Menu</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="experiences.php">Mes expériences</a>
								<a class="dropdown-item" href="competenceInfo.php">Compétences informatiques</a>
								<a class="dropdown-item" href="formations.php">Mes formations</a>
								<a class="dropdown-item" href="loisirsPassions.php">Loisirs et passions</a>
							</div>
						</li>

						<li class="nav-item active">
							<a class="nav-link" id="navBarMenu" href="contact.php">Me contacter</a>
						</li>
					</ul>
				</div>
			</nav>

		</div>
	</div>
    <br />
    <!-- Fin NavBar Bootstrap  -->

	<script type="text/javascript" src="js/controller.js"></script>