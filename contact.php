<a id="#"></a>

<?php require('tete.php'); ?>
<link  rel="stylesheet" type="text/css" href="css/style.css" />
<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container">
<br />
<div class="tel-400px"></div>

	<h1>Formulaire de contact</h1>
	<br />

	<?php

	if(isset($_POST["name"],$_POST["email"],$_POST["subject"],$_POST["message"])){

		$name = $_POST['name'];
		$headers = 'FROM ' . $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
	
		mail('sevestre.jb@gmail.com',
		'Message venant du site jsevestre02.free.fr :' . $headers, "Nom de l'expéditeur: " .
		$name . "\n" . "\n" . "Message du mail:" . "\n" . $message, $headers);
		?>
		<div class="alert alert-success">
			Votre message a bien été envoyé
		</div>
		<?php
	} else {

	}
	?>

	<div class="contact-form">
		<form id="contact-form" method="POST" action="#" >
			<i class="fas fa-2x  fa-user iconeContact"></i>
			<input type="text" name="name" class="form-control" placeholder="Votre prénom et nom" required />
			<br />

			<i class="fas fa-2x fa-envelope iconeContact"></i>
			<input type="email" name="email" class="form-control" placeholder="Votre Email de réponse" required />
			<br />

			<i class="fas fa-2x fa-folder-open iconeContact"></i>
			<input type="text" name="subject" class="form-control" placeholder="Nom du sujet" required />
			<br />

			<i class="fas fa-2x fa-file-signature iconeContact"></i>
			<textarea name="message" class="form-control" style="height: 100px;" placeholder="Votre message" ></textarea>
			<br />
			
			<div class="d-grid gap-2 col-2 mx-auto boutonContact">
				<input type="submit" class="btn btn-primary" value="Envoyer" />
			</div>
		</form>

		<br />

	</div>
</div>

<?php require('pied.php'); ?>