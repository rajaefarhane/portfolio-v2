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
echo"email invalide";
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

    $email_message = "Demande de contact.\n\n";
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


    echo'<p class="mid-msgcorrect">
        Merci de nous avoir contacter. Nous vous contacterons très bientôt..</p>';



    }  ?>
