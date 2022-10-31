<?php
    $destinataire = 'marmier-tanguy@alwaysdata.net';

    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['email'];

    $objet = "Portfolio";

    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From:<'.$expediteur.'>'."\n"; // Expediteur

    $message =  '<div style="width: 100%; text-align: center; font-weight: bold">'.
    '<br>'.'Nom : '.$_POST['name'].'<br>'.
    '<br>'.'Message : '.$_POST['message'].'<br>'.
    '<br>'.'Téléphone : '.$_POST['phone'].'</div>';

    if(mail($destinataire, $objet, $message, $headers))
    {
        header('Location: contact.php?success=1');
    }
    else // Non envoyé
    {
        echo '<script type="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }

?>