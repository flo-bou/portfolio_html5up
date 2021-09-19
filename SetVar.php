<?php
/*
*  Page PHP - Variables obligatoires pour le fonctionnement de l'ensemble des pages de ce site.
*  Nom original : SetVar.php
*
* date modifier : 27/05/2020
* @since 2020 27 mai
* @author Patrick LOPES-REGO (p.lopes.rego@gmail.com)
* @copyright Patrick LOPES-REGO
* @version 1.00
*
*/
// | ----- Nom de ce fichier de configuration PHP ----- |
$TFEASR_namefile = "SetVar.php";
//
// | ----- Informations : WWW Name Site And WEB ----- |
// $URLWEBRADIO = 'https://www.schoolofweb.tech'; // MODIFIABLE Nom de l'url du site (sans le / a la fin)
$WEB_canonical = "https://www.schoolofweb.tech/Florent_B/"; // MODIFIABLE Nom de l'url du site (complet avec / a la fin)
$WEB_canonical_Short = "www.schoolofweb.tech/"; // MODIFIABLE Nom de l'url du site (complet avec / a la fin sans http)

$WEB_Shop = 'https://shop.spreadshirt.fr/school-of-web-goodies-shop/'; // MODIFIABLE Nom de l'url de la boutique Spreadshirt (complet avec / a la fin)
$WEB_Shop_Short = 'School Of Web Goodies Shop/'; // MODIFIABLE Nom de la boutique Spreadshirt
$URL_FORM_DEV = $WEB_canonical; // lien de déviation depuis le formulaire (objectif senssible à la langue)
// $URL_FORM_FR = "https://www.schoolofweb.tech/Florent_B/";
$URL_FORM_FR = "https://www.schoolofweb.tech/Florent_B/?lang=fr";
$URL_FORM_EN = "https://www.schoolofweb.tech/Florent_B/?lang=en";
$URL_FORM_DE = "https://www.schoolofweb.tech/Florent_B/?lang=de";

$TITLE_index = "Florent Boutonnet, Web designer junior"; // MODIFIABLE Nom de la page d'index
$TITLE_description = "School Of Web Trouvez vos d&eacute;veloppeurs WEB !"; // MODIFIABLE description du site. Pour les accents utiliser le codage HTML. 200 c Max !
$TITLE_author = "Florent_B"; // MODIFIABLE Indique le nom ou la société créatrice du site et du CODE !
$TITLE_news_keywords = "School, Of Web, School Of Web, html5, css3, javascript, php, developper, developpeur, apache, SSL"; // MODIFIABLE Pour google uniquement. Max 10 expression séparer par VIRGULE
$WEB_humans = ''.$WEB_canonical.'humans.txt'; // AUTOMATIQUE indique toutes les personnes qui ont colaboré et fabriqué le site
$Client_Web = $_SERVER['HTTP_USER_AGENT'];

$View_Serv_Http_Lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$LANG_2c = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); // AUTOMATIQUE Langue = fr (2 caractères)
$LANG_5c = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],3,5); // AUTOMATIQUE Langue = fr-FR (5 caractères, début 3eme position) // Même pas appelé
$LangByQuery = $_SERVER['QUERY_STRING']; // valeur de type "arg=value"
$LangByGet = 'Blablabla'; //  
// $BROWSE_LANG // non utilisé
// $BROWSE_LANG_tmp = $LANG_2c;
// $FILE_LG = $BROWSE_LANG_tmp;
// ! FONCTION Gestion des Langues !
$FOLDER_bdd_language = "./_BDD-LANGUAGE_/"; // Dossier Parent _BDD-BIOGRAPHIE_, with the leading "/"
$FILE_language_en = ''.$FOLDER_bdd_language.'en_lang.php'; // Fichier de langue ANGLAIS du SITE.
$FILE_language_de = ''.$FOLDER_bdd_language.'de_lang.php'; // Fichier de langue allemand
$FILE_language_fr = ''.$FOLDER_bdd_language.'fr_lang.php'; // Fichier de langue FRANCAIS du SITE.
// $FILE_language // non utilisé hors de cette page

if(isset($_GET['lang'])){
$LangByGet = $_GET['lang']; // vaut la valeur de l'argument lang
};

if ($LANG_2c == 'en' or $LANG_5c == 'en-US' or $LANG_5c == 'en-GB' or $LangByGet == 'en'){
    require ''.$FILE_language_en.''; // Charge le fichier de langue anglaise
    // ENVOYER LE CODE DANS L'URL EN POST
    $FILE_language = $FILE_language_en;
    $HTML_LANG = 'en-US';
    $BROWSE_LANG = 'en';
    $action_Sendmail_Lang = "_Sendmail.php?lang=en#contact";
    $URL_FORM_DEV = $URL_FORM_EN;
}
elseif ($LANG_2c == 'de' or $LANG_5c == 'de-DE' or $LangByGet == 'de'){
    require ''.$FILE_language_de.''; // Charge le fichier de langue allemande
    $FILE_language = $FILE_language_de;
    $HTML_LANG = 'de-DE';
    $BROWSE_LANG = 'de';
    $action_Sendmail_Lang = "_Sendmail.php?lang=de#contact"; // PAS MIS A JOUR
    $URL_FORM_DEV = $URL_FORM_DE;
}
elseif ($LANG_2c == 'fr' or $LANG_5c == 'fr-FR' or $LANG_5c == 'fr-CA' or $LangByGet == 'fr'){
    require ''.$FILE_language_fr.''; // Charge le fichier de langue française
    $FILE_language = $FILE_language_fr;
    $HTML_LANG = 'fr-FR';
    $BROWSE_LANG = 'fr';
    $action_Sendmail_Lang = "_Sendmail.php?lang=fr#contact";
    $URL_FORM_DEV = $URL_FORM_FR;
}
else {
    require ''.$FILE_language_fr.''; // Charge le fichier de langue français par défaut
    $FILE_language = $FILE_language_fr;
    $HTML_LANG = 'fr-FR';
    $BROWSE_LANG = 'fr';
    $action_Sendmail_Lang = "_Sendmail.php#contact";
    $URL_FORM_DEV = $URL_FORM_FR;
}

// | ----- Menu de navigation dans les modals ----- |
$Root_Nav_Mod ="_Root_Nav_Mod.php";

// | ----- Variables des dossiers : TFEASR ----- |
$assets_folder = "./assets/"; // Dossier Parent Theme du site et resources, with the leading "/"
$assets_folder_css = ''.$assets_folder.'css/'; // Dossier enfant CSS du site, with the leading "/"
$assets_folder_fonts = ''.$assets_folder.'fonts/'; // Dossier enfant FONTS du site, with the leading "/"
$assets_folder_js = ''.$assets_folder.'js/'; // Dossier enfant JS du site, with the leading "/"
$assets_folder_sass = ''.$assets_folder.'sass/'; // Dossier enfant SASS du site, with the leading "/"
//
// | ----- Fichier CSS pour le fonctionnement TFEASR ----- |
$file_css_main = "main.css";
$TFEASR_css_main = $assets_folder_css.$file_css_main;
$file_css_ie9 = "ie9.css";
$TFEASR_css_ie9 = $assets_folder_css.$file_css_ie9;
$file_css_noscript = "noscript.css";
$TFEASR_css_noscript = $assets_folder_css.$file_css_noscript;
// 
// | ----- Fichiers JS pour le fonctionnement TFEASR ----- |
$file_js_jquery = "jquery-3.3.1.min.js";
$TFEASR_js_jquery = $assets_folder_js.$file_js_jquery;
$file_js_skel = "skel.min.js";
$TFEASR_js_skel = $assets_folder_js.$file_js_skel;
$file_js_util = "util.js";
$TFEASR_js_util = $assets_folder_js.$file_js_util;
$file_js_main = "main.js";
$TFEASR_js_main = $assets_folder_js.$file_js_main;
$file_js_oXHR = "oXHR.js";
$TFEASR_js_oXHR = $assets_folder_js.$file_js_oXHR;
//
// | ----- Variables des Dossiers de BASE utilises par le site ----- |
$FOLDER_BDD_DISCOGS_ARTISTE = "./_BDD-DISCOGS-RELEASE_/_ARTISTES_/"; // Dossier Parent ./_BDD-DISCOGS-RELEASE_/_ARTISTES_/, with the leading "/"
$FOLDER_BDD_DISCOGS_DISCO = "./_BDD-DISCOGS-RELEASE_/_DISCOGRAPHIE_/"; // Dossier Parent ./_BDD-DISCOGS-RELEASE_/_DISCOGRAPHIE_/, with the leading "/"
$FOLDER_BDD_DISCOGS_RELEASE = "./_BDD-DISCOGS-RELEASE_/"; // Dossier Parent _BDD-DISCOGS-RELEASE_, with the leading "/"
$FOLDER_BDD_COVERS = "./_BDD-COVERS_/"; // Dossier Parent _BDD-COVERS_, with the leading "/"
$FOLDER_bdd_covers_OLD = ''.$FOLDER_BDD_COVERS.'_OLD_/'; // Dossier enfant _BDD-COVERS_/_OLD_, with the leading "/"
$FOLDER_BDD_PLAYED = "./_BDD-PLAYED_/"; // Dossier Parent _BDD-PLAYED_, with the leading "/"
$FOLDER_bdd_played_BAC_LIST = ''.$FOLDER_BDD_PLAYED.'_BAC_LIST_/'; // Dossier enfant _BDD-PLAYED_/_BAC_LIST_, with the leading "/"
$FOLDER_bdd_biographie = "./_BDD-BIOGRAPHIE_/"; // Dossier Parent _BDD-BIOGRAPHIE_, with the leading "/"
$FOLDER_bdd_bio_images = ''.$FOLDER_bdd_biographie.'_BDD-IMGS_/'; // Dossier Enfant _BDD-BIOGRAPHIE_/_BDD-IMGS_, with the leading "/"
$FOLDER_bdd_songs = "./_BDD-BIOGRAPHIE_/_BDD-SONGS_/"; // Dossier Enfant _BDD-BIOGRAPHIE_/_BDD-SONGS_, with the leading "/"
$FOLDER_bdd_biotags = "./_BDD-BIOTAGS_/"; // Dossier Parent _BDD-BIOTAGS_, with the leading "/"
$FOLDER_bdd_biotags_images = "./_BDD-BIOTAGS_/_BDD-IMGS_/"; // Dossier Enfant _BDD-BIOTAGS_/_BDD-IMGS_/, with the leading "/"
$FOLDER_CSS = "./css/"; // Dossier Parent css, with the leading "/"
$FOLDER_FONTS = "./fonts/"; // Dossier Parent fonts, with the leading "/"
$FOLDER_ICECAST = "./icecast/"; // Dossier Parent icecast, with the leading "/"
$FOLDER_IMG = "./img/"; // Dossier Parent img, with the leading "/"
$FOLDER_IMAGES = "./images/"; // Dossier Parent img, with the leading "/"
$FOLDER_IMAGES_02 = "images/"; // Dossier Parent img, with the leading "/"
$FOLDER_SVGFLAGS = "./images/_SVG-FLAGS_/"; // Dossier Parent img, with the leading "/"
$FOLDER_JS = "./js/"; // Dossier Parent js, with the leading "/"
$FOLDER_LESS = "./less/"; // Dossier Parent less, with the leading "/"
$FOLDER_SCSS = "./scss/"; // Dossier Parent scss, with the leading "/"
$FOLDER_MODULE = "./module/"; // Dossier des modules, with the leading "/"
//
// | ----- Variables des Fichiers utilises par le site ----- |
$FILELOGOSSVG = './images/_LOGOS_/';
$FILEFAVICON = ''.$FOLDER_IMG.'FavIco.ico'; // AUTOMATIQUE plus le nom de l'image du FAVICON (APPEL DE L'IMAGE avec son chemin)
$FILE_FAVICON = 'FavIco.ico'; // AUTOMATIQUE plus le nom de l'image du FAVICON (NOM DE L'IMAGE)
$FILE_OG_400x400 = ''.$FOLDER_IMAGES_02.'SOW_400x400.jpg'; // AUTOMATIQUE plus le nom de l'image du FAVICON
$Counter = '<script type="text/javascript">document.write(msgcounter);</script>';
$Flag_SVG_FR =''.$FOLDER_IMAGES_02.'Flag_FR.svg'; // AUTOMATIQUE plus le nom de l'image SVG du drapeau FR
$Flag_SVG_UK =''.$FOLDER_IMAGES_02.'Flag_UK.svg'; // AUTOMATIQUE plus le nom de l'image SVG du drapeau UK

$FILE_MIN_NAV = ''.$FOLDER_MODULE.'min-nav.php';
$FILE_MIN_HOME = ''.$FOLDER_MODULE.'min-home.php';
$FILE_MIN_WORK = ''.$FOLDER_MODULE.'min-work.php';
$FILE_MIN_TECHNO = ''.$FOLDER_MODULE.'min-techno.php';
$FILE_MIN_CONTACT = ''.$FOLDER_MODULE.'min-contact.php';
$FILE_MIN_FOOTER = ''.$FOLDER_MODULE.'min-footer.php';

//
// | ----- Variables Gestion des Heures et des Dates ----- |
$hours = date("H"); // Hour 24
$hour = date("h"); // Hour 12 Only
$minutes = date("i"); // Minute Only
$seconds = date("s"); // Seconde only
$separat = ":"; // Separator : for Hour
$allhm = $hour.$minutes; // Hour Minute without separator
$allhms = $hours.$minutes.$seconds; // Hour Minute Second without separator
$allhmss = $hours.$separat.$minutes.$separat.$seconds; // Hour Minute Second  with separator
// $today = date("d-m-Y"); 
$today = date("m-d-Y");
$Day = date("d");
$Month = date("m");
$Year = date("Y");
//
// | ----- Variables Gestion des erreurs ----- |
error_reporting(-1);
/*
// source http://www.lephpfacile.com/manuel-php/function.error-reporting.php
// Désactiver le rapport d'erreurs
error_reporting(0);
 
// Rapporte les erreurs d'exécution de script
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 
// Rapporter les E_NOTICE peut vous aider à améliorer vos scripts
// (variables non initialisées, variables mal orthographiées..)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
 
// Rapporte toutes les erreurs à part les E_NOTICE
// C'est la configuration par défaut de php.ini
error_reporting(E_ALL ^ E_NOTICE);
 
// Reporte toutes les erreurs PHP (Voir l'historique des modifications)
error_reporting(E_ALL);
 
// Reporte toutes les erreurs PHP
error_reporting(-1);
 
// Même chose que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
*/
 ?>