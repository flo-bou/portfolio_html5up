<?php
require 'SetVar.php'; 
// En-tete de la page HTML5
echo '<!DOCTYPE html>';
// Langue du site / caractère utilisés / titre du site
echo '<html lang="en-US" prefix="og: http://ogp.me/ns#">';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '<title>RMS | View Variables</title>';
echo '<link rel="shortcut icon" href="'.$FILEFAVICON.'">';
echo '<link rel="stylesheet" type="text/css" href="'.$FILE_CSS_FAW.'">';
?>
<style>
.img_valign_mid { vertical-align: middle; }
title1 { font-weight: bold; font-variant: small-caps; background-color: black; color: yellow;}
tmark { background-color: yellow; color: black;}
mark { background-color: yellow; color: red; }
</style>
<?php 
echo '</head><body>';
echo '<center><h1><title1>Fichier de configuration des variables PHP</title1></h1></center>'; // Titre 

echo'<div>';

echo '<title1>|-- Nom de ce fichier de configuration PHP --|</title1><br>'; // intertitre 1
echo '| <b>$TFEASR_namefile</b> | <FONT color="red">'.$TFEASR_namefile.'</font><br>';
echo '<FONT color="green">|--------------------- ---------------------|</font><br>';

echo '<title1>|-- Informations : WWW Name Site And WEB --|</title1><br>'; // intertitre 2

echo '<font color="green"><b> ------- Informations : WWW Name Site And WEB ------- </b></font><br>';
echo '| <b>$WEB_canonical</b> | <FONT color="red"><a href="'.$WEB_canonical.'" onclick="window.open(this.href);return false">'.$WEB_canonical.'</a></font><br>';
echo '| <b>$WEB_canonical_Short</b> | <FONT color="red">'.$WEB_canonical_Short.'</font><br>';

echo '| <b>$WEB_Shop</b> | <FONT color="red">'.$WEB_Shop.'</font><br>';
echo '| <b>$WEB_Shop_Short</b> | <FONT color="red">'.$WEB_Shop_Short.'</font><br>';
// echo '| <b>$URL_FORM_DEV = $WEB_canonical</b> | <FONT color="red">'.$URL_FORM_DEV = $WEB_canonical.'</font><br>';
echo '| <b>$URL_FORM_DEV</b> | <FONT color="red">'.$URL_FORM_DEV.'</font><br>';
echo '| <b>$URL_FORM_FR</b> | <FONT color="red">'.$URL_FORM_FR.'</font><br>';
echo '| <b>$URL_FORM_EN</b> | <FONT color="red">'.$URL_FORM_EN.'</font><br>';
echo '| <b>$URL_FORM_EN</b> | <FONT color="red">'.$URL_FORM_DE.'</font><br>';

echo '| <b>$TITLE_index</b> | <FONT color="red">'.$TITLE_index.'</font><br>';
echo '| <b>$TITLE_description</b> | <FONT color="red">'.$TITLE_description.'</font><br>';
echo '| <b>$TITLE_author</b> | <FONT color="red">'.$TITLE_author.'</font><br>';
echo '| <b>$TITLE_news_keywords</b> | <FONT color="red">'.$TITLE_news_keywords.'</font><br>';
echo '| <b>$WEB_humans</b> | <FONT color="red">'.$WEB_humans.'</font><br>';
echo '| <b>$Client_Web</b> | <FONT color="red">'.$Client_Web.'</font><br>';

echo '<font color="green"><b> ------- FONCTION Gestion des Langues ------- </b></font><br>';
echo '| <b>$View_Serv_Http_Lang</b> | <FONT color="red">'.$View_Serv_Http_Lang.'</font><br>';
echo '| <b>$LANG_2c</b> | <FONT color="red">'.$LANG_2c.'</font><br>';
echo '| <b>$LANG_5c</b> | <FONT color="red">'.$LANG_5c.'</font><br>';
// echo '| <b>$LangByGet</b> | <FONT color="red">'.$LangByGet.'</font><br>';
echo '| <b>$LangByQuery</b> | <FONT color="red">'.$LangByQuery.'</font><br>';
// $BROWSE_LANG // non utilisé
// echo '| <b>$BROWSE_LANG_tmp</b> | <FONT color="red">'.$BROWSE_LANG_tmp.'</font><br>';
// echo '| <b>$FILE_LG</b> | <FONT color="red">'.$FILE_LG.'</font><br>';
echo '| <b>$FOLDER_bdd_language</b> | <FONT color="red">'.$FOLDER_bdd_language.'</font><br>';
echo '| <b>$FILE_language_en</b> | <FONT color="red">'.$FILE_language_en.'</font><br>';
echo '| <b>$FILE_language_fr</b> | <FONT color="red">'.$FILE_language_fr.'</font><br>';
echo '| <b>$FILE_language_de</b> | <FONT color="red">'.$FILE_language_de.'</font><br>';
echo '| <b>$action_Sendmail_Lang</b> | <FONT color="red">'.$action_Sendmail_Lang.'</font><br>';

echo '<font color="green"><b> ------- Menu de navigation dans les modals ------- </b></font><br>';
echo '| <b>$Root_Nav_Mod</b> | <FONT color="red">'.$Root_Nav_Mod.'</font><br>';

echo '<font color="green"><b> ----- Dossier des modules ----- </b></font><br>';
echo '<b> $FOLDER_MODULE</b> | <FONT color="red">'.$FOLDER_MODULE.'</font><br>';
//** Variables pour Fontawesome 5.0.1 (Pictos) ** description de chaque bloc pour les modales et pour la page index. //
echo '| <b>$fa5_master</b> | <FONT color="red">'.$fa5_master.'</font><br>';
echo '| <b>$fa5_css</b> | <FONT color="red">'.$fa5_css.'</font><br>';
echo '| <b>$fa5_js</b> | <FONT color="red">'.$fa5_js.'</font><br>';
echo '| <b>$fa5_less</b> | <FONT color="red">'.$fa5_less.'</font><br>';
echo '| <b>$fa5_scss</b> | <FONT color="red">'.$fa5_scss.'</font><br>';
echo '| <b>$fa5_webfonts</b> | <FONT color="red">'.$fa5_webfonts.'</font><br>';
echo '| <b>$fa5_master_css</b> | <FONT color="red">'.$fa5_master_css.'</font><br>';
echo '| <b>$fa5_master_js</b> | <FONT color="red">'.$fa5_master_js.'</font><br>';
echo '| <b>$fa5_master_less</b> | <FONT color="red">'.$fa5_master_less.'</font><br>';
echo '| <b>$fa5_master_scss</b> | <FONT color="red">'.$fa5_master_scss.'</font><br>';
echo '| <b>$fa5_master_webfonts</b> | <FONT color="red">'.$fa5_master_webfonts.'</font><br>';
//** Pictos Fontawesome 5.0.1 pour le site **// 
echo '| <b>$picto_album</b> | <FONT color="red">'.$picto_album.'</font><br>';
echo '| <b>$picto_album_white</b> | <FONT color="red">'.$picto_album_white.'</font><br>';
echo '| <b>$picto_album_master</b> | <FONT color="red">'.$picto_album_master.'</font><br>';
echo '| <b>$picto_artist</b> | <FONT color="red">'.$picto_artist.'</font><br>';
echo '| <b>$picto_artist_white</b> | <FONT color="red">'.$picto_artist_white.'</font><br>';
echo '| <b>$picto_song</b> | <FONT color="red">'.$picto_song.'</font><br>';
echo '| <b>$picto_discography</b> | <FONT color="red">'.$picto_discography.'</font><br>';
echo '| <b>$picto_award</b> | <FONT color="red">'.$picto_award.'</font><br>';
//$picto_pictos = '<font color="CORNSILK"><i class="fab fa-safari fa-spin fa-1x fa-fw"></i></font>';
echo '| <b>$picto_pictos</b> | <FONT color="red">'.$picto_pictos.'</font><br>';
echo '| <b>$picto_player</b> | <FONT color="red">'.$picto_player.'</font><br>';
echo '| <b>$picto_clock</b> | <FONT color="red">'.$picto_clock.'</font><br>';
echo '| <b>$picto_comment_dots</b> | <FONT color="red">'.$picto_comment_dots.'</font><br>';
echo '| <b>$picto_eclair</b> | <FONT color="red">'.$picto_eclair.'</font><br>';
echo '| <b>$picto_key</b> | <FONT color="red">'.$picto_key.'</font><br>';
echo '| <b>$picto_genre</b> | <FONT color="red">'.$picto_genre.'</font><br>';
echo '| <b>$picto_copyright</b> | <FONT color="red">'.$picto_copyright.'</font><br>';
echo '| <b>$picto_copyright_white</b> | <FONT color="red">'.$picto_copyright_white.'</font><br>';
echo '| <b>$picto_infos_circle_white</b> | <FONT color="red">'.$picto_infos_circle_white.'</font><br>';
echo '| <b>$picto_trademark_white</b> | <FONT color="red">'.$picto_trademark_white.'</font><br>';
echo '| <b>$picto_label</b> | <FONT color="red">'.$picto_label.'</font><br>';
echo '| <b>$picto_tracklisting</b> | <FONT color="red">'.$picto_tracklisting.'</font><br>';
echo '| <b>$picto_track</b> | <FONT color="red">'.$picto_track.'</font><br>';
echo '| <b>$picto_credit</b> | <FONT color="red">'.$picto_credit.'</font><br>';
echo '| <b>$picto_note</b> | <FONT color="red">'.$picto_note.'</font><br>';
echo '| <b>$picto_label_other</b> | <FONT color="red">'.$picto_label_other.'</font><br>';
echo '| <b>$picto_calandar_lime</b> | <FONT color="red">'.$picto_calandar_lime.'</font><br>';
echo '| <b>$picto_calandar_format</b> | <FONT color="red">'.$picto_calandar_format.'</font><br>';
echo '| <b>$picto_basket</b> | <FONT color="red">'.$picto_basket.'</font><br>';
echo '| <b>$picto_basket_cart</b> | <FONT color="red">'.$picto_basket_cart.'</font><br>';
echo '| <b>$picto_basket_cart_orange</b> | <FONT color="red">'.$picto_basket_cart_orange.'</font><br>';
echo '| <b>$picto_spinner</b> | <FONT color="red">'.$picto_spinner.'</font><br>';
echo '| <b>$picto_sitmap</b> | <FONT color="red">'.$picto_sitmap.'</font><br>';

echo '<font color="green"><b> ----- Pictos pour le titre (Page INDEX Haut)  ----- </b></font><br>';
echo '| <b>$picto_m</b> | <FONT color="red">'.$picto_m.'</font><br>';
echo '| <b>$picto_o</b> | <FONT color="red">'.$picto_o.'</font><br>';

echo '<font color="green"><b> ----- Pictos pour le pied de page (Page INDEX Bas)  ----- </b></font><br>';
echo '| <b>$picto_html5</b> | <FONT color="red">'.$picto_html5.'</font><br>';
echo '| <b>$picto_css3</b> | <FONT color="red">'.$picto_css3.'</font><br>';
echo '| <b>$picto_awesome</b> | <FONT color="red">'.$picto_awesome.'</font><br>';
echo '| <b>$picto_safari</b> | <FONT color="red">'.$picto_safari.'</font><br>';
echo '| <b>$picto_chrome</b> | <FONT color="red">'.$picto_chrome.'</font><br>';
echo '| <b>$picto_edge</b> | <FONT color="red">'.$picto_edge.'</font><br>';
echo '| <b>$picto_firefox</b> | <FONT color="red">'.$picto_firefox.'</font><br>';
echo '| <b>$picto_android</b> | <FONT color="red">'.$picto_android.'</font><br>';

echo '<font color="green"><b> ----- Pictos pour les barres modale  ----- </b></font><br>';
echo '<b> $picto_amazon_orange</b> | <FONT color="red">'.$picto_amazon_orange.'</font><br>';
echo '<b> $picto_amazon_white</b> | <FONT color="red">'.$picto_amazon_white.'</font><br>';
echo '<b> $picto_apple_silver</b> | <FONT color="red">'.$picto_apple_silver.'</font><br>';
echo '<b> $picto_apple_white</b> | <FONT color="red">'.$picto_apple_white.'</font><br>';
echo '<b> $picto_Billboard</b> | <FONT color="red">'.$picto_Billboard.'</font><br>';
echo '<b> $picto_deezer</b> | <FONT color="red">'.$picto_deezer.'</font><br>';
echo '<b> $picto_ebay</b> | <FONT color="red">'.$picto_ebay.'</font><br>';
echo '<b> $picto_ebay_red</b> | <FONT color="red">'.$picto_ebay_red.'</font><br>';
echo '<b> $picto_facebook</b> | <FONT color="red">'.$picto_facebook.'</font><br>';
echo '<b> $picto_google_play</b> | <FONT color="red">'.$picto_google_play.'</font><br>';
echo '<b> $picto_google_play_white</b> | <FONT color="red">'.$picto_google_play_white.'</font><br>';
echo '<b> $picto_google_plus</b> | <FONT color="red">'.$picto_google_plus.'</font><br>';
echo '<b> $picto_instagram</b> | <FONT color="red">'.$picto_instagram.'</font><br>';
echo '<b> $picto_myspace</b> | <FONT color="red">'.$picto_myspace.'</font><br>';
echo '<b> $picto_napster</b> | <FONT color="red">'.$picto_napster.'</font><br>';
echo '<b> $picto_soundcloud_orange</b> | <FONT color="red">'.$picto_soundcloud_orange.'</font><br>';
echo '<b> $picto_soundcloud_white</b> | <FONT color="red">'.$picto_soundcloud_white.'</font><br>';
echo '<b> $picto_spotify</b> | <FONT color="red">'.$picto_spotify.'</font><br>';
echo '<b> $picto_twitter</b> | <FONT color="red">'.$picto_twitter.'</font><br>';
echo '<b> $picto_vevo</b> | <FONT color="red">'.$picto_vevo.'</font><br>';
echo '<b> $picto_website</b> | <FONT color="red">'.$picto_website.'</font><br>';
echo '<b> $picto_website_white</b> | <FONT color="red">'.$picto_website_white.'</font><br>';
echo '<b> $picto_wikipedia</b> | <FONT color="red">'.$picto_wikipedia.'</font><br>';
echo '<b> $picto_youtube_red</b> | <FONT color="red">'.$picto_youtube_red.'</font><br>';
echo '<b> $picto_youtube_whith</b> | <FONT color="red">'.$picto_youtube_whith.'</font><br>';

echo '<font color="green"><b> ----- Pictos divers  ----- </b></font><br>';
echo '<b> $picto_Discography_white</b> | <FONT color="red">'.$picto_Discography_white.'</font><br>';
echo '<b> $picto_headphones_white</b> | <FONT color="red">'.$picto_headphones_white.'</font><br>';
echo '<b> $picto_play_white</b> | <FONT color="red">'.$picto_play_white.'</font><br>';
echo '<b> $picto_Volume_off_white</b> | <FONT color="red">'.$picto_Volume_off_white.'</font><br>';
echo '<b> $picto_Volume_Down_white</b> | <FONT color="red">'.$picto_Volume_Down_white.'</font><br>';
echo '<b> $picto_Volume_Up_white</b> | <FONT color="red">'.$picto_Volume_Up_white.'</font><br>';
echo '<b> $picto_caret_Up_white</b> | <FONT color="red">'.$picto_caret_Up_white.'</font><br>';
echo '<b> $picto_caret_Down_white</b> | <FONT color="red">'.$picto_caret_Down_white.'</font><br>';

echo '<font color="green"><b> ------- Variables des dossiers : TFEASR ------- </b></font><br>';
echo '<b> $assets_folder</b> | <FONT color="red">'.$assets_folder.'</font><br>';
echo '<b> $assets_folder_css</b> | <FONT color="red">'.$assets_folder_css.'</font><br>';
echo '<b> $assets_folder_fonts</b> | <FONT color="red">'.$assets_folder_fonts.'</font><br>';
echo '<b> $assets_folder_js</b> | <FONT color="red">'.$assets_folder_js.'</font><br>';
echo '<b> $assets_folder_sass</b> | <FONT color="red">'.$assets_folder_sass.'</font><br>';

echo '<font color="green"><b> ------- Fichier CSS pour le fonctionnement TFEASR ------- </b></font><br>';
echo '<b> $file_css_main</b> | <FONT color="red">'.$file_css_main.'</font><br>';
echo '<b> $TFEASR_css_main</b> | <FONT color="red">'.$TFEASR_css_main.'</font><br>';
echo '<b> $file_css_ie9</b> | <FONT color="red">'.$file_css_ie9.'</font><br>';
echo '<b> $TFEASR_css_ie9</b> | <FONT color="red">'.$TFEASR_css_ie9.'</font><br>';
echo '<b> $file_css_noscript</b> | <FONT color="red">'.$file_css_noscript.'</font><br>';
echo '<b> $TFEASR_css_noscript</b> | <FONT color="red">'.$TFEASR_css_noscript.'</font><br>';

echo '<font color="green"><b> ------- Fichiers JS pour le fonctionnement TFEASR ------- </b></font><br>';
echo '<b> $file_js_jquery</b> | <FONT color="red">'.$file_js_jquery.'</font><br>';
echo '<b> $TFEASR_js_jquery</b> | <FONT color="red">'.$TFEASR_js_jquery.'</font><br>';
echo '<b> $file_js_skel</b> | <FONT color="red">'.$file_js_skel.'</font><br>';
echo '<b> $TFEASR_js_skel</b> | <FONT color="red">'.$TFEASR_js_skel.'</font><br>';
echo '<b> $file_js_util</b> | <FONT color="red">'.$file_js_util.'</font><br>';
echo '<b> $TFEASR_js_util</b> | <FONT color="red">'.$TFEASR_js_util.'</font><br>';
echo '<b> $file_js_main</b> | <FONT color="red">'.$file_js_main.'</font><br>';
echo '<b> $TFEASR_js_main</b> | <FONT color="red">'.$TFEASR_js_main.'</font><br>';
echo '<b> $file_js_oXHR</b> | <FONT color="red">'.$file_js_oXHR.'</font><br>';
echo '<b> $TFEASR_js_oXHR</b> | <FONT color="red">'.$TFEASR_js_oXHR.'</font><br>';

echo '<font color="green"><b> ------- Variables des Dossiers de BASE utilises par le site ------- </b></font><br>';
echo '<b> $FOLDER_BDD_DISCOGS_ARTISTE</b> | <FONT color="red">'.$FOLDER_BDD_DISCOGS_ARTISTE.'</font><br>';
echo '<b> $FOLDER_BDD_DISCOGS_DISCO</b> | <FONT color="red">'.$FOLDER_BDD_DISCOGS_DISCO.'</font><br>';
echo '<b> $FOLDER_BDD_DISCOGS_RELEASE</b> | <FONT color="red">'.$FOLDER_BDD_DISCOGS_RELEASE.'</font><br>';
echo '<b> $FOLDER_BDD_COVERS</b> | <FONT color="red">'.$FOLDER_BDD_COVERS.'</font><br>';
echo '<b> $FOLDER_bdd_covers_OLD</b> | <FONT color="red">'.$FOLDER_bdd_covers_OLD.'</font><br>';
echo '<b> $FOLDER_BDD_PLAYED</b> | <FONT color="red">'.$FOLDER_BDD_PLAYED.'</font><br>';
echo '<b> $FOLDER_bdd_played_BAC_LIST</b> | <FONT color="red">'.$FOLDER_bdd_played_BAC_LIST.'</font><br>';
echo '<b> $FOLDER_bdd_biographie</b> | <FONT color="red">'.$FOLDER_bdd_biographie.'</font><br>';
echo '<b> $FOLDER_bdd_bio_images</b> | <FONT color="red">'.$FOLDER_bdd_bio_images.'</font><br>';
echo '<b> $FOLDER_bdd_songs</b> | <FONT color="red">'.$FOLDER_bdd_songs.'</font><br>';
echo '<b> $FOLDER_bdd_biotags</b> | <FONT color="red">'.$FOLDER_bdd_biotags.'</font><br>';
echo '<b> $FOLDER_bdd_biotags_images</b> | <FONT color="red">'.$FOLDER_bdd_biotags_images.'</font><br>';
echo '<b> $FOLDER_CSS</b> | <FONT color="red">'.$FOLDER_CSS.'</font><br>';
echo '<b> $FOLDER_FONTS</b> | <FONT color="red">'.$FOLDER_FONTS.'</font><br>';
echo '<b> $FOLDER_ICECAST</b> | <FONT color="red">'.$FOLDER_ICECAST.'</font><br>';
echo '<b> $FOLDER_IMG</b> | <FONT color="red">'.$FOLDER_IMG.'</font><br>';
echo '<b> $FOLDER_IMAGES</b> | <FONT color="red">'.$FOLDER_IMAGES.'</font><br>';
echo '<b> $FOLDER_IMAGES_02</b> | <FONT color="red">'.$FOLDER_IMAGES_02.'</font><br>';
echo '<b> $FOLDER_SVGFLAGS</b> | <FONT color="red">'.$FOLDER_SVGFLAGS.'</font><br>';
echo '<b> $FOLDER_JS</b> | <FONT color="red">'.$FOLDER_JS.'</font><br>';
echo '<b> $FOLDER_LESS</b> | <FONT color="red">'.$FOLDER_LESS.'</font><br>';
echo '<b> $FOLDER_SCSS</b> | <FONT color="red">'.$FOLDER_SCSS.'</font><br>';

echo '<font color="green"><b> ------- Variables des Fichiers utilises par le site ------- </b></font><br>';
echo '<b> $FILELOGOSSVG</b> | <FONT color="red">'.$FILELOGOSSVG.'</font><br>';
// $FILEFAVICON = ''.$FOLDER_IMG.'RMS-FavIco.ico'; // AUTOMATIQUE plus le nom de l'image du FAVICON
echo '<b> $FILEFAVICON</b> | <FONT color="red">'.$FILEFAVICON.'</font><br>';
echo '<b> $FILE_FAVICON</b> | <FONT color="red">'.$FILE_FAVICON.'</font><br>';
echo '<b> $FILE_OG_400x400</b> | <FONT color="red">'.$FILE_OG_400x400.'</font><br>';
echo '<b> $Flag_SVG_FR</b> | <FONT color="red">'.$Flag_SVG_FR.'</font><br>';
echo '<b> $Flag_SVG_UK</b> | <FONT color="red">'.$Flag_SVG_UK.'</font><br>';
echo '<b> $FILELOGORMS</b> | <FONT color="red">'.$FILELOGORMS.'</font><br>';
echo '<b> $FILELOGOHUMANS</b> | <FONT color="red">'.$FILELOGOHUMANS.'</font><br>';
echo '<b> $FILELOGOTFEASR_big</b> | <FONT color="red">'.$FILELOGOTFEASR_big.'</font><br>';
echo '<b> $FILELOGOTFEASR</b> | <FONT color="red">'.$FILELOGOTFEASR.'</font><br>';
echo '<b> $FILELOGOFOX</b> | <FONT color="red">'.$FILELOGOFOX.'</font><br>';
echo '<b> $FILELOGOSR1</b> | <FONT color="red">'.$FILELOGOSR1.'</font><br>';
echo '<b> $FILELOGOSR2</b> | <FONT color="red">'.$FILELOGOSR2.'</font><br>';
echo '<b> $FILELOGOSR3</b> | <FONT color="red">'.$FILELOGOSR3.'</font><br>';
echo '<b> $FILELOGOSR4</b> | <FONT color="red">'.$FILELOGOSR4.'</font><br>';
echo '<b> $FILEDEFAUTCOVERS</b> | <FONT color="red">'.$FILEDEFAUTCOVERS.'</font><br>';
echo '<b> $FILE_Star_white</b> | <FONT color="red">'.$FILE_Star_white.'</font><br>';
echo '<b> $FILE_CSS_FAW</b> | <FONT color="red">'.$FILE_CSS_FAW.'</font><br>';
echo '<b> $FILE_CSS_audioplayer</b> | <FONT color="red">'.$FILE_CSS_audioplayer.'</font><br>';
echo '<b> $FILE_JS_JQUERY</b> | <FONT color="red">'.$FILE_JS_JQUERY.'</font><br>';
echo '<b> $FILE_JS_audioplayer</b> | <FONT color="red">'.$FILE_JS_audioplayer.'</font><br>';
echo '<b> $FILE_Bdd_Songs</b> | <FONT color="red">'.$FILE_Bdd_Songs.'</font><br>';
echo '<b> $FILE_BIOGRAPHY</b> | <FONT color="red">'.$FILE_BIOGRAPHY.'</font><br>';
echo '<b> $FILE_BIOTAGS</b> | <FONT color="red">'.$FILE_BIOTAGS.'</font><br>';

echo '<font color="green"><b> ------- Variables Gestion des Heures et des Dates ------- </b></font><br>';
echo '<b> $hours</b> | <FONT color="red">'.$hours.'</font><br>';
echo '<b> $hour</b> | <FONT color="red">'.$hour.'</font><br>';
echo '<b> $minutes</b> | <FONT color="red">'.$minutes.'</font><br>';
echo '<b> $seconds</b> | <FONT color="red">'.$seconds.'</font><br>';
echo '<b> $separat</b> | <FONT color="red">'.$separat.'</font><br>';
echo '<b> $allhm</b> | <FONT color="red">'.$allhm.'</font><br>';
echo '<b> $allhms</b> | <FONT color="red">'.$allhms.'</font><br>';
echo '<b> $allhmss</b> | <FONT color="red">'.$allhmss.'</font><br>';
// $today = date("d-m-Y"); 
echo '<b> $today</b> | <FONT color="red">'.$today.'</font><br>';
echo '<b> $Day</b> | <FONT color="red">'.$Day.'</font><br>';
echo '<b> $Month</b> | <FONT color="red">'.$Month.'</font><br>';
echo '<b> $Year</b> | <FONT color="red">'.$Year.'</font><br>';

echo '<font color="green"><b> ------- Variables Gestion des Fichiers pour les playlists ------- </b></font><br>';
echo '<b> $dir</b> | <FONT color="red">'.$dir.'</font><br>';
echo '<b> $dir_old</b> | <FONT color="red">'.$dir_old.'</font><br>';
echo '<b> $filelog</b> | <FONT color="red">'.$filelog.'</font><br>';
echo '<b> $filelogtmp</b> | <FONT color="red">'.$filelogtmp.'</font><br>';
echo '<b> $singleplayed</b> | <FONT color="red">'.$singleplayed.'</font><br>';
echo '<b> $defautcovers</b> | <FONT color="red">'.$defautcovers.'</font><br>';
echo '<b> $txttype</b> | <FONT color="red">'.$txttype.'</font><br>';
echo '<b> $filetype</b> | <FONT color="red">'.$filetype.'</font><br>';
echo '<b> $folderfiletype</b> | <FONT color="red">'.$folderfiletype.'</font><br>';
echo '<b> $fileday</b> | <FONT color="red">'.$fileday.'</font><br>';
echo '<b> $filedaytmp</b> | <FONT color="red">'.$filedaytmp.'</font><br>';
echo '<b> $nocurrent</b> | <FONT color="red">'.$nocurrent.'</font><br>';
echo '<b> $chr13</b> | <FONT color="red">'.$chr13.'</font><br>';
echo '<b> $firstsingle</b> | <FONT color="red">'.$firstsingle.'</font><br>';
echo '<b> $newday</b> | <FONT color="red">'.$newday.'</font><br>';

echo '<font color="green"><b> ------- Variable pour le compteur de caractère ------- </b></font><br>';
echo '<b> $Counter</b> | <FONT color="red">'.$Counter.'</font><br>';

echo '<FONT color="green">|--------------------- ---------------------|</font><br>';

echo '</div>';
echo '</body>';