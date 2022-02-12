<?php

$smtp = "ssl0.ovh.net";
$port = "587";

if (isset($_GET['submit'])) {
    ini_set('SMTP', $smtp);
    ini_set('SMTP_PORT', $port);

    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"Rayan-Zorkot.fr"<support@Rayan-Zorkot.fr>' . "\n";
    $header .= 'Content-Type:text/html; charset="UTF-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';

    $messagefinal = " 
                    <html>
                        <body>
                            <div>
                                <strong>{$nom}</strong>
                                <br/>
                                <i>{$email}<i>
                                <br/>
                                <strong>{$message}</strong>
                              
                              
                            </div>
                        </body>
                    </html>
                    ";

    $retour = mail("ozorkot841@gmail.com", "Message recu", $messagefinal, $header);
    if ($retour) {
        echo '<p style="padding-top: 10px; padding-bottom: 5px;">Votre message a bien été envoyé !</p>';
        mail($email, "Le message a bien été reçu !", $messagefinal, $header);
    }
}

?>