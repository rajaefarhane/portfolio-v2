<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="iconereseaux">
		<ul>
			<li>

				<a href="alt.pdf" download>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span>cv</span>
				</a>
			</li>
			<li>
				<a href="https://www.linkedin.com/in/rajae-farhane-bbb406193/">
					<span></span>
					<span></span>
					<span></span>
					<span ></span>
					<span class="fa fa-linkedin" aria-hidden="true"></span>
				</a>
			</li>
			<li>
				<a href="https://github.com/rajaefarhane">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span class="fa fa-github" aria-hidden="true"></span>
				</a>
			</li>
		</ul>
	</div>
	<div class="container contact">
		<div class="texthorizcontact"><h2>CONTACT</h2>
		</div>
		<div class="texthorizcontac"><h2>CONTACT</h2>
		</div>
		<div class="contact-box">
			<div class="left"></div>
 <form name="contact_form" method="post" action="" class="form">
			<div class="right">
				<h2 class="titrecontact">formulaire de contact</h2>
				<input type="text" class="field" placeholder="Votre nom et prenom" name="nom">
				<input type="text" class="field" placeholder="nom@gmail.com" name="email">
				<input type="text" class="field" placeholder="0 XX-XX-XX-XX-X"  name="telephone">
				<textarea placeholder="Message" class="field" name="commentaire"></textarea>
				<button type="submit" class="btn">Envoyer</button><br><br><th>
				<button type="reset" class="btn1">Annuler</button>
			</div>
		</form>
		</div>
	</div>

</body>
</html>
<?php
if(isset($_POST['email'])) {

    // deux var de email et le sujet
    $email_to = "rajae19beddi@gmail.com";
    $email_subject = "Le sujet de votre email:demande de contact";

    function died($error) {

        // message d'erreur
        echo'<p class="mid-msgereur">Nous sommes désolés, mais des erreurs ont été détectées dans le .
        formulaire que vous avez envoyé.</p>';

        echo '<p class="mid-msgereur1">Ces erreurs apparaissent ci-dessous.</p>';
        echo '<p class="mid-msgereur3">'.$error.'</p><br /><br />';
        echo '<p class="mid-msgereur2">Merci de corriger ces erreurs.</p><br /><br />';

			  die();

    }


    // si la validation des données attendues existe
     if(!isset($_POST['nom']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['commentaire'])) {
        died(
'Nous sommes désolés, mais le formulaire que vous avez soumis semble poser' .
' problème');
    }



    $nom = $_POST['nom']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $commentaire = $_POST['commentaire']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-éèàê]+@[A-Za-z0-9.-éèàê]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email)) {
//       $error_message .=
// 'L\'adresse e-mail que vous avez entrée ne semble pas être valide.<br />';
echo'<p class="mid-msgcorrect">
		email invalide</p>';
    }

      // Prend les caractères alphanumériques + le point et le tiret 6
      $string_exp = "/^[A-Za-z0-9 .'-éèàê]+$/";

    if(!preg_match($string_exp,$nom)) {
      $error_message .=
'Le nom que vous avez entré ne semble pas être valide.<br />';
    }


    if(strlen($commentaire) < 2) {
      $error_message .=
'Le commentaire que vous avez entré ne semble pas être valide.<br />';
    }

    if(strlen($error_message) > 0) {
      died($error_message);
    }

    $email_message = "Demande de contact de portfolio.\n\n";
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "message: ".$commentaire."\n";

    // create email headers
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    //echo $email_message;
    mail($email_to, $email_subject, $email_message, $headers);
    ?>
    <?php
		echo'<p class="mid-msgcorrecte">
				Merci de m avoir contacter. je vais vous contactez très bientôt..:)</p>';

		}  ?>
