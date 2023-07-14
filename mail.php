<?php
    // vérif
    if($_POST['text']!=""){
        $send = False;
    }else{
        $send = True;
    }

    $destinataire = 'marmier-tanguy@alwaysdata.net';

    $expediteur = $_POST['email']; // Email de l'emetteur

    $objet = "Portfolio - Nouveau message"; // Objet

    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From:<'.$expediteur.'>'."\n"; // Expediteur

    $message =  '<div style="width: 100%; text-align: center; font-weight: bold">'.
    '<br>'.'Nom : '.$_POST['nom'].'<br>'.
    '<br>'.'Prénom : '.$_POST['prenom'].'<br>'.
    '<br>'.'Message : '.$_POST['message'].'<br>'.
    '<br>'.'Téléphone : '.$_POST['phone'].'</div>';

    if($send == True){
        if(mail($destinataire, $objet, $message, $headers)){
            header('Location: contact.php?success=1'); // Verif et envoi OK
        }else{
            header('Location: contact.php?success=0'); // Verif OK envoi NOK
        }
    }else{
        header('Location: contact.php?success=0'); // Verif NOK
    }

?>