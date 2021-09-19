<?php 
ob_start("ob_gzhandler");
require('SetVar.php');
//** Importez les classes PHPMailer dans l'espace de noms global 
//** Celles-ci doivent être en haut de votre script, pas à l'intérieur d'une fonction
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '_PHPMailer/src/Exception.php';
require '_PHPMailer/src/PHPMailer.php';
require '_PHPMailer/src/SMTP.php';

// *************
// Le contenu agissant de cette page est soumis à plusieurs test sur le fonctionnement du fomulaire envoyé par l'utilisateur à partir de min-contact
// *************
$ban_chars = array("#","+","*","\\","|","_","[","]","{","]","=","<",">");
//** PROTECTION contre l'affichage de la page _Sendmail sans qu'elle soit appellée par le formulaire *//
//** Test si la variable Sendmail à été envoyée par le formulaire.
if(isset($_POST['Sendmail'])){

    //** Test si la variable captcha est présente. traitement par la conformité du captcha.
    session_start();
    if(isset($_POST['captcha'])){

        //** Si le captcha est valide, affichage des informations pour l'utilisateur et retour à la page INDEX (fin ligne 191)
            if($_POST['captcha']==$_SESSION['captcha']){

            // *************************************************************************************
            // ************* Variables reçues du formulaire ********************
            // *************************************************************************************

            $nom = $_POST['name'];
            $nom = utf8_encode($nom);

            $email = $_POST['email'];
            $email = utf8_encode($email);

            //** convertion des chiffres de la CATEGORIE pour afficher le résultat en correspondance
            $category = $_POST['category']; // $category est la variable locale contenant la valeur envoyé au serveur (par l'utilisateur) à propos de ces satanés catégories des sujets de mail 
            if ($category === '1') {
                $cat = $Cat_01_Txt; // $cat est la variable locale temporaire (deviendra $Subject) corespondante aux choix des catégories des sujets des mails
            } elseif ($category === '2') {
                $cat = $Cat_02_Txt;
                $AddAttac = "images\CV_Florent_BOUTONNET.pdf"; // ----------- IMPORTANT ICI ---------
            } elseif ($category === '3') {
                $cat = $Cat_03_Txt;
            } else {
                $cat = $Cat_04_Txt;
            }
            $Subject = utf8_encode($cat); // fonction intéressante, transforme le texte html en utf8 -> eacute devient é

            $message = $_POST['message'];
            $message = stripslashes($message);
            $message = str_replace($ban_chars,"", $message);
            $message = str_replace("\n","<br/>", $message);

            //$message = utf8_encode($message);

            $mail = new PHPMailer(true);                              // Passer `true` active les exceptions
            try {
                // Paramètres du serveur
                $mail->SMTPDebug = 0;                                 // Activer la sortie de débogage détaillé Mettre à 0 en prod Mettre à 2 en dev
                $mail->isSMTP();                                      // Configurez mailer pour utiliser SMTP
                $mail->Host = 'smtp.gmail.com';  					  // Spécifiez les serveurs SMTP principaux et de sauvegarde
                $mail->SMTPAuth = true;                               // Activer l'authentification SMTP
                $mail->Username = 'me';      // Nom d'utilisateur SMTP
                $mail->Password = 'secret';                   // Mot de passe SMTP
                $mail->SMTPSecure = 'ssl';                            // Activer le cryptage TLS, `ssl` a également accepté
                $mail->Port = 465;                                    // Port TCP auquel se connecter (465 pour gmail)
                //$mail->CharSet = "utf-8";

                // Destinataires
                $mail->setFrom($mail->Username, '[me] - '.$nom.'');
                $mail->addAddress($mail->Username, 'me');     // Ajouter un destinataire
                // $mail->addAddress('ellen@example.com');               // Le nom est facultatif
                // $mail->addReplyTo('info@example.com', 'Information');
                $mail->addReplyTo($email, ''.$nom.'');
                // Contenu
                $mail->isHTML(true);                                  // Définissez le format de l'e-mail sur HTML
                $mail->Subject = $Subject;
                $mail->Body    = $Msg_00_Msgto.' '.$nom.'<br>'.$Post_EMail.' '.$email.'<br><br>'.$Msg_01_Your_Msg.'<br>'.$message.'<br><br>'.$nom.'<br>'.$Msg_00_Good.'<br>'.$Msg_01_Good.'<br>'.$Msg_02_Good.'<br>'.$WEB_canonical;
                // $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non HTML';

                $mail->send();
                //** Création du message en html que l'internaute recevra et verra après l'envoi du mail
                include '_00_HEAD_Refresh.php';
                echo '<body class="is-preload">';
                echo '<div class="table-wrapper">';
                echo '<header id="header">';
                echo '</header>';
                echo '<div id="main">';
                //** Modal Contact
                echo '<article id="contact">';
                echo '<h2 class="major"><span title="'.$M_04_AT.'">'.$M_04_AT.'</span></h2>';
                // echo '<span class="image main"><img src="'.$FOLDER_IMAGES_02.'pic04.jpg" alt="'.$M_04_AT.'" title="'.$M_04_AT.'" /></span>';
                echo '<p><b>'.$Msg_Hello.' '.$nom.'<br>'.$Post_EMail.' '.$email.'</b></p>';
                echo '<p><b>'.$Post_Subjet_Msg.''.$cat.'<br>'.$message.'</b></p>';
                echo '<p><b>'.$nom.'<br>'.$Msg_Send_Ok.'<br>'.$Msg_00_Good.'<br>'.$Msg_01_Good.'<br>'.$Msg_02_Good.'</b></p>';
                echo '<center><p class="copyright">&copy; School Of Web.</p></center>';
                echo '</article>';
                include '_00_02_HTML_HEADER_DOWN.php';

            } catch (Exception $e) {

                //** Création du message en html en cas d'erreur SMTP
                include '_00_HEAD_Refresh.php';
                // DEBUT BODY
                echo '<body class="is-preload">';
                // DEBUT DIV Wrapper
                echo '<div class="table-wrapper">';
                echo '<header id="header">';
                echo '</header>';
                // DEBUT DIV main
                echo '<div id="main">';
                //** Modal Contact
                echo '<article id="contact">';
                echo '<h2 class="major"><span title="'.$M_04_AT.'">'.$M_04.'</span></h2>';
                // echo '<span class="image main"><img src="'.$FOLDER_IMAGES_02.'pic04.jpg" alt="'.$M_04_AT.'" title="'.$M_04_AT.'" /></span>';
                echo '<p>'.$Msg_00_Bad.'</p>';
                echo '<p>Mailer Error: '.$mail->ErrorInfo.'</p>';
                echo '<center><p class="copyright">&copy; School Of Web.</p></center>';
                echo '</article>';
                //** FIN DIV Main (conteneur des fenettre modale)
                echo '</div>';
                //** DIV Footer
                echo '<footer id="footer">';
                echo '<center><p class="copyright">&copy; School Of Web.</p></center>';
                echo '</footer>';
                //** FIN DIV Wrapper 
                echo '</div>';
                //** DIV BG ????????
                echo '<div id="bg"></div>';
                //** Scripts
                echo '<script src="'.$assets_folder_js.'jquery.min.js"></script>';
                echo '<script src="'.$assets_folder_js.'browser.min.js"></script>';
                echo '<script src="'.$assets_folder_js.'breakpoints.min.js"></script>';
                echo '<script src="'.$assets_folder_js.'util.js"></script>';
                echo '<script src="'.$assets_folder_js.'main.js"></script>';
                // FIN BODY
                echo '</body>';
                echo '</html>';
            } // Fin du catch

            // Si le captcha n'est pas valide, ce qui suit va s'exécuter 
            // affichage de l'erreur et retour à la page précédente (début de l'if ligne 21)
        } else {
            //** Construction de la page pas de captcha **//
            include '_00_02_No_Captcha.php';
        }

        //** Fin du Test si la variable captcha est présente (ligne 16)
    }

    //** Fin du Test si la variable Sendmail est présente (ligne 13)
    //** Si la variable "Sendmail" n'est présente, retour automatique à la page INDEX du site (Anti-Relou !)(ce n'est pas ce qui se passe ?)
} else {
    include '_00_02_No_Sendmail.php';
}
?>