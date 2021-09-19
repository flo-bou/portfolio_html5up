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

// | ----- Menu de navigation dans les modals ----- |
$Root_Nav_Mod ="_Root_Nav_Mod.php";

//** Variables pour Fontawesome 5.0.1 (Pictos) ** description de chaque bloc pour les modales et pour la page index. //
$fa5_master = 'assets'; // = ./css.fontawesome.5.0.1.web-fonts/
$fa5_css = 'css'; //  = css
$fa5_js = 'js'; //  = js
$fa5_less = 'less'; //  = less
$fa5_scss = 'scss'; //  = scss
$fa5_webfonts = 'webfonts'; //  = webfonts
$fa5_master_css = ''.$fa5_master.''.$fa5_css.'/';  // = ./css.fontawesome.5.0.1.web-fonts/css/
$fa5_master_js = ''.$fa5_master.''.$fa5_js.'/';  // = ./css.fontawesome.5.0.1.web-fonts/js/
$fa5_master_less = ''.$fa5_master.''.$fa5_less.'/';  // = ./css.fontawesome.5.0.1.web-fonts/less/
$fa5_master_scss = ''.$fa5_master.''.$fa5_scss.'/';  // = ./css.fontawesome.5.0.1.web-fonts/scss/
$fa5_master_webfonts = ''.$fa5_master.''.$fa5_webfonts.'/';  // = ./css.fontawesome.5.0.1.web-fonts/webfonts/

//** Pictos Fontawesome 5.0.1 pour le site **// 
$picto_album = '<font color="LIGHTCYAN"><i class="fas fa-registered"></i></font>';
$picto_album_white = '<i class="fas fa-registered"></i>';
$picto_album_master = '<font color="AQUAMARINE"><i class="fas fa-registered"></i></font>';
$picto_artist = '<font color="CORNFLOWERBLUE"><i class="fas fa-user-secret"></i></font>';
$picto_artist_white = '<i class="fas fa-user-secret"></i>';
$picto_song = '<font color="LIGHTSTEELBLUE"><i class="fas fa-microphone"></i></font>';
$picto_discography = '<font color="GOLD"><i class="fas fa-paste"></i></font>';
$picto_award = '<font color="GOLD"><i class="fas fa-award"></i></font>';
//$picto_pictos = '<font color="CORNSILK"><i class="fab fa-safari fa-spin fa-1x fa-fw"></i></font>';
$picto_pictos = '<font color="LIGHTSALMON"><i class="fas fa-history"></i></font>';
$picto_player = '<font color="INDIANRED"><i class="far fa-play-circle"></i></font>';
$picto_clock = '<font color="CRIMSON"><i class="far fa-clock"></i></font>';
$picto_comment_dots = '<font color="CRIMSON"><i class="far fa-comment-dots"></i></font>';
$picto_eclair = '<font color="DEEPPINK"><i class="fas fa-bolt"></i></font>';
$picto_key = '<i class="fas fa-key"></i>';
$picto_genre = '<font color="SILVER"><i class="fas fa-transgender-alt"></i></font>';
$picto_copyright = '<font color="LIME"><i class="far fa-copyright"></i></font>';
$picto_copyright_white = '<i class="far fa-copyright"></i>';
$picto_infos_circle_white = '<i class="fas fa-info-circle"></i>';
$picto_trademark_white = '<i class="fas fa-trademark fa-xs"></i>';
$picto_label = '<font color="KHAKI"><i class="fas fa-tags"></i></font>';
$picto_tracklisting = '<i class="fas fa-outdent"></i>';
$picto_track = '<i class="far fa-file-audio"></i>';
$picto_credit = '<i class="fas fa-dollar-sign"></i>';
$picto_note = '<i class="far fa-sticky-note"></i>';
$picto_label_other = '<i class="far fa-object-group"></i>';
$picto_calandar_lime = '<font color="LIME"><i class="far fa-calendar-check"></i></font>';
$picto_calandar_format = '<font color="CRIMSON"><i class="far fa-calendar-plus"></i></font>';
$picto_basket = '<i class="fas fa-shopping-basket"></i>';
$picto_basket_cart = '<i class="fas fa-shopping-cart"></i>';
$picto_basket_cart_orange = '<font color="ORANGE"><i class="fas fa-shopping-cart"></i></font>';
$picto_spinner = '<i class="fas fa-spinner fa-pulse"></i>';
$picto_sitmap = '<font color="LIME"><i class="fas fa-sitemap"></i></i></font>';
//** Pictos pour le titre (Page INDEX Haut) **//
$picto_m = '<i class="fas fa-music"></i>';
$picto_o = '<i class="fas fa-life-ring fa-spin fa-1x fa-fw"></i>';
//** Pictos pour le pied de page (Page INDEX BAS) **//
$picto_html5 = '<font color="ORANGE"><i class="fab fa-html5"></i></font>';
$picto_css3 = '<i class="fab fa-css3-alt"></i>';
$picto_awesome = '<i class="fab fa-fort-awesome-alt"></i>';
$picto_safari = '<i class="far fa-compass"></i>';
$picto_chrome = '<font color="#01EF78"><i class="fab fa-chrome"></i></font>';
$picto_edge = '<font color="CORNFLOWERBLUE"><i class="fab fa-edge"></i></font>';
$picto_firefox = '<i class="fab fa-firefox"></i>';
$picto_android = '<font color="LIME"><i class="fab fa-android"></i></font>';
//** Pictos pour les barres modale **//
$picto_amazon_orange = '<font color="ORANGE"><i class="fab fa-amazon"></i></font>';
$picto_amazon_white = '<i class="fab fa-amazon"></i>';
$picto_apple_silver = '<font color="SILVER"><i class="fab fa-apple"></i></font>';
$picto_apple_white = '<i class="fab fa-apple"></i>';
$picto_Billboard = '<i class="fas fa-bold"></i>';
$picto_deezer = '<font color="ORANGE"><i class="fas fa-align-left" data-fa-transform="rotate-270"></i></font>';
$picto_ebay = '<font color="YELLOW"><i class="fas fa-shopping-bag"></i></font>';
$picto_ebay_red = '<font color="TOMATO"><i class="fas fa-shopping-bag"></i></font>';
$picto_facebook = '<font color="#4267B2"><i class="fab fa-facebook-square"></i></font>';
$picto_google_play = '<font color="#01EF78"><i class="fab fa-google-play"></i></font>';
$picto_google_play_white = '<font color="WHITE"><i class="fab fa-google-play"></i></font>';
$picto_google_plus = '<i class="fab fa-google-plus-square"></i>';
$picto_instagram = '<i class="fab fa-instagram"></i>';
$picto_myspace = '<i class="fas fa-users fa-fw" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>';
$picto_napster = '<i class="fab fa-napster"></i>';
$picto_soundcloud_orange = '<font color="ORANGE"><i class="fab fa-soundcloud"></i></font>';
$picto_soundcloud_white = '<i class="fab fa-soundcloud"></i>';
$picto_spotify = '<i class="fab fa-spotify"></i>';
$picto_twitter = '<font color="#1DA1F2"><i class="fab fa-twitter-square"></i></font>';
$picto_vevo = '<i class="fab fa-vuejs"></i>';
$picto_website = '<font color="LIME"><i class="fas fa-external-link-alt"></i></font>';
$picto_website_white = '<i class="fas fa-external-link-alt"></i>';
$picto_wikipedia = '<i class="fab fa-wikipedia-w"></i>';
$picto_youtube_red = '<font color="TOMATO"><i class="fab fa-youtube"></i></font>';
$picto_youtube_whith = '<font color="WHITE"><i class="fab fa-youtube"></i></font>';

//** Pictos divers **//
$picto_Discography_white = '<span class="fa-layers fa-fw" style="background:MistyRose"><i class="fas fa-certificate"></i><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">Dis</span></span>';
$picto_headphones_white = '<i class="fas fa-headphones"></i>';
$picto_play_white = '<i class="fas fa-play"></i>';
$picto_Volume_off_white = '<i class="fas fa-volume-off"></i>';
$picto_Volume_Down_white = '<i class="fas fa-volume-down"></i>';
$picto_Volume_Up_white = '<i class="fas fa-volume-up"></i>';
$picto_caret_Up_white = '<i class="far fa-caret-square-up"></i>';
$picto_caret_Down_white = '<i class="far fa-caret-square-down"></i>';

$Flag_SVG_FR =''.$FOLDER_IMAGES_02.'Flag_FR.svg'; // AUTOMATIQUE plus le nom de l'image SVG du drapeau FR
$Flag_SVG_UK =''.$FOLDER_IMAGES_02.'Flag_UK.svg'; // AUTOMATIQUE plus le nom de l'image SVG du drapeau UK

$FILELOGORMS = ''.$FOLDER_IMG.'Vinyl-full-RMS.png'; // AUTOMATIQUE plus le nom de l'image du logo
$FILELOGOHUMANS = ''.$FOLDER_IMG.'humanstxt-transparent-color.png'; // AUTOMATIQUE plus le nom de l'image du logo humans.txt
$FILELOGOTFEASR_big = ''.$FOLDER_IMG.'TFEASR-Logo-big.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR big
$FILELOGOTFEASR = ''.$FOLDER_IMG.'TFEASR-Logo.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR
$FILELOGOFOX = ''.$FOLDER_IMG.'The-Fox.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR Fox
$FILELOGOSR1 = ''.$FOLDER_IMG.'sr1.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR R1
$FILELOGOSR2 = ''.$FOLDER_IMG.'sr2.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR R2
$FILELOGOSR3 = ''.$FOLDER_IMG.'sr3.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR R3
$FILELOGOSR4 = ''.$FOLDER_IMG.'sr4.png'; // AUTOMATIQUE plus le nom de l'image du logo TFEASR R4
$FILEDEFAUTCOVERS = ''.$FOLDER_BDD_COVERS.'Nocovers.png'; // The default album art image, will be used if failed to get from Your File covers
$FILE_Star_white = ''.$FOLDER_IMG.'Star_white.png'; // The default TAG art image, will be used to creat file image tag
$FILE_CSS_FAW = ''.$assets_folder_css.'fontawesome-all.min.css'; // AUTOMATIQUE Fichier CSS pour FONT Awesome icons
$FILE_CSS_audioplayer = ''.$FOLDER_CSS.'audioplayer.css'; // AUTOMATIQUE Fichier CSS pour FONT Awesome icons
$FILE_JS_JQUERY = ''.$FOLDER_JS.'jquery-3.1.1.min.js'; // AUTOMATIQUE Fichier JS pour JQUERY
$FILE_JS_audioplayer = ''.$FOLDER_JS.'audioplayer.js'; // AUTOMATIQUE Fichier JS pour HTML5 AUDIO PLAYER
$FILE_Bdd_Songs = ''.$FOLDER_bdd_songs.'_BDD-Songs-Nfo-PHP_Var.txt'; // AUTOMATIQUE Fichier crer par UTILISATEUR avec MP3TAG
$FILE_BIOGRAPHY = ''.$FOLDER_bdd_biographie.'__BIOTMP_'.$BROWSE_LANG.'.txt'; // AUTOMATIQUE Fichier txt pour capture HTML des biographies Lastfm
$FILE_BIOTAGS = ''.$FOLDER_bdd_biotags.'__BIOTAGTMP_'.$BROWSE_LANG.'.txt'; // AUTOMATIQUE Fichier txt pour capture HTML des Tags Lastfm

//
// | ----- Variables Gestion des Fichiers pour les playlists ----- |
$dir = $FOLDER_BDD_PLAYED; // Emplacement du dossier pour lister les fichiers TXT
$dir_old = $FOLDER_bdd_covers_OLD; // Emplacement du dossier pour lister les fichiers archive TXT
$filelog = "_DAYPROG_.txt"; // Enter the name of the daily programming file (.txt) //
$filelogtmp = "filedaytmp.txt"; // Enter the name of the daily programming file (.txt) //
$singleplayed = ''.$FOLDER_BDD_PLAYED.'runsingle.txt'; // Your file title onair, with the leading "/"
$defautcovers = ''.$FOLDER_BDD_COVERS.'nocovers.png'; // The default album art image, will be used if failed to get from Your File covers
$txttype = ".txt";
$filetype = $today.$txttype;
$folderfiletype = $FOLDER_BDD_PLAYED.$filetype;
$fileday = $FOLDER_BDD_PLAYED.$filelog; // Way Day titles distributed file
$filedaytmp = $FOLDER_BDD_PLAYED.$filelogtmp; // Way Day titles distributed file
$nocurrent = '<span class="pictoerror"><i class="fa fa-bomb" aria-hidden="true"></i></span><br>Off air… Come back later :) <span class="boutondiv" id="bouton_texte" onclick="javascript:show_hide(\'whatstime\');"><i class="fa fa-clock-o" aria-hidden="true"></i></span>&nbsp;'; // If no stream available, handle the error
$chr13 = "\r\n";
$firstsingle = "00:00:00 => RMS Rock Music Station - The First Radio Rock |";
$newday = $firstsingle.$chr13;
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