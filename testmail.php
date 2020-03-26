<?php

    ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

    $from = "espoire21@hotmail.com";

    $to = "k.combet@hotmail.com";

    $subject = "Vérification PHP mail";

    $message = "PHP mail marche";

    $headers = "Disposition-Notification-To:k.combet@hotmail.com";

    //ini_set($to,$message);
   mail($to,$subject,$message, $headers);

    echo "L'email a été envoyé.";

    /*$destinataire = 'k.combet@hotmail.com';
    $expediteur   ='karima.combet@outlook.fr';
    $reponse      = $expediteur;

    echo "Ce script envoie un mail au format HTML à $destinataire";
    $codehtml=
    '<html><body>'.
    '<h1>Test Email</h1>'.
    '<b><u>Ceci est un document HTML</u></b><br>'.
    'Avec differentes tailles de caractères et '.
    '<font color="red">couleurs</font>'.
    '</body></html>';
mail($destinataire,
     'Email au format HTML',
     $codehtml,
     "From: $expediteur\r\n".
        "Reply-To: $reponse\r\n".
        "Content-Type: text/html; charset=\"UTF-8\"\r\n");
        //ini_set($destinataire,$codehtml);*/
?>
