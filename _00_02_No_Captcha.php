<?php
// inclu dans _SENDMAIL
echo '<!DOCTYPE html>';
echo '<html lang="'.$HTML_LANG.'" xmlns:og="http://ogp.me/ns#">';
echo '<head>';
echo '<title>OOPS!</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
//** Meta Name Robots and Spyder **//
echo '<meta name="robots" content="noodp" />';
//** Shortcut Icon Desktop **//
echo '<link rel="shortcut icon" href="'.$FILE_FAVICON.'" />';
echo '<link rel="icon" href="'.$FILE_FAVICON.'" />';
/* http-equiv="refresh" : 
* Pour revenir sur la page du formulaire #contact !
* Toutes les informations sont perdues pour l'utilisteur !
*/
//  echo '<meta http-equiv="refresh" content="6;URL='.$URL_FORM_DEV.'">';
echo '<style>';
echo 'body {';
echo 'background: url("'.$FOLDER_IMAGES.'bg.jpg") no-repeat center center fixed;';
echo 'background-size: cover;';
echo 'color:#FFFFFF';
echo '}';
echo 'h1 {';
echo 'color:#FFF000';
echo '}';
echo '</style>';
echo '</head>';
/* HISTORY BACK : 
* Pour revenir sur le formulaire #contact sans effacer les informations saisies!
* Delai 3000 = 3 secondes
*/
echo '<body class="is-preload" onload="window.setTimeout(\'history.back()\',3000);">';
//** 1ère page ou sera affiché le résultat. Pas d'utilisation du modal pour cette page.
//** DEBUT DIV Wrapper 
echo '<div id="wrapper">';
//** Header
echo '<header id="header">';
echo '<center><br><br><br><br>';
echo "<H1>La v&eacute;rification du Captcha n&acute;a pas &eacute;t&eacute; valid&eacute;e !<br>Celui-ci ne correspond pas &agrave; ce qui a &eacute;t&eacute; affich&eacute; !</h1>";
echo '<img src="'.$FOLDER_IMAGES.'Oops.svg" width="400" height="400" alt="OOPS!" title="OOPS!" />';
echo "<H1>The Captcha verification has not been validated!<br>It does not match what was posted!</h1>";
echo '</center>';
echo '</header>';
//** DEBUT DIV Main (conteneur des fenetre modale)
echo '<div id="main">';
//** FIN DIV Main (conteneur des fenetre modale)
echo '</div>';
//** DIV Footer
echo '<footer id="footer">';
echo '<center><p class="copyright">&copy; School Of Web.</p></center>';
echo '</footer>';
//** FIN DIV Wrapper 
echo '</div>';
//** DIV BG
echo '<div id="bg"></div>';
//** Scripts
echo '<script src="'.$assets_folder_js.'jquery.min.js"></script>';
echo '<script src="'.$assets_folder_js.'browser.min.js"></script>';
echo '<script src="'.$assets_folder_js.'breakpoints.min.js"></script>';
echo '<script src="'.$assets_folder_js.'util.js"></script>';
echo '<script src="'.$assets_folder_js.'main.js"></script>';
echo '</body>';
echo '</html>';
?>