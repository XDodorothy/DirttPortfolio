<?php
$prénom = $_POST['prénom'];
$nom = $_POST['nomF'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date =$_POST['date'];
$heure =$_POST['heure'];
$variété =$_POST['Choix du beurre'];
$texture =$_POST['Choix de texture'];
$sorte = $_POST['Choix de la sorte'];
$qty = $POST['Quantité approximative désirée'];
$message = $POST['Commentaire'];


$email_from ='do.therrien@outlook.com';

$email_subject = "Demande de remplissage BdA $prénom.$nom";
$email_body = "Prénom: $prénom.\n".
                "Nom: $nomF.\n".
                "email: $email.\n".
                "phone: $phone.\n".
                "Date: $date.\n".
                "Heure: $heure.\n".
                "Beurre: $variété.\n".
                "Texture: $texture.\n".
                "Sorte: $sorte.\n".
                "Quantité: $qty.\n".
                "Message: $message.\n";

/* email it goes to*/
                $to = 'do.therrien@outlook.com';

                $headers = "From: $email_from \r\n";

                $headers .="Reply-To: $email \r\n";

/* will send all into to the User email for them to know their message was sent*/
    mail($to,$email_subject,$email_body,$headers);

    /* after form is submitted, the user is redirected to this page below*/
    header("Location: appoint.html");
    

?>
