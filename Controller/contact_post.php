<?php

if(isset($_POST["name"],$_POST["email"],$_POST["subject"],$_POST["message"])){
    $_SESSION['success'] = 1;

    $name = $_POST['name'];
    $headers = 'FROM ' . $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
   
    mail('sevestre.jb@gmail.com',
    'Message venant du site jsevestre02.free.fr :' . $hearders, "Nom de l'expéditeur: " .
    $name . "\n" . "\n" . "Message du mail:" . "\n" . $message, $headers);

} else {
    $_SESSION['errors'] = $errors;
}
?>

<?php require('tete.php'); ?>

<!-- CLASSE PROVENANT DE LA LIBRAIRIE DISTANTE BOOTSTRAP ET DE style.css-->
<div class="container" style="min-height: 600px;">

<?php if(array_key_exists('success', $_SESSION)): ?>
		<div class="alert alert-success">
			Votre message a bien été envoyé
		</div>
	<?php endif; ?>

	<?php if(array_key_exists('errors', $_SESSION)): ?>
		<div class="alert alert-danger">
			Une erreur est survenu lors de l'envoi du message
		</div>
	<?php endif; ?>

    <br />
    <br />
    <br />

    <div class="d-grid gap-2 col-3 mx-auto">
        <a class="btn btn-secondary" type="button" href='index.php'>Retour à l'accueil</a>
    </div>

</div>

<?php require('pied.php'); ?>