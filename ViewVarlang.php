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
echo '<center><h1><title1>Fichier de configuration des variables de langue française</title1></h1></center>'; // Titre 
echo'<div>';
echo '<title1>|-- Nom des variables du fichier de langue française--|</title1><br>'; // intertitre 1
/*
* TOUTES les lignes ne commencent pas par // seront prises en compte par le SERVEUR !
* fr_lang.txt l'encodage est au format UTF-8 sans BOM (utilisez Notepad++ pour éditer ce fichier !)
* Note pour les traducteurs : N'ajoutez pas de lignes, ne modifiez pas le nom des variables, ne modifiez pas l'ordre des lignes
*/
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- Module de liens vers la racine _Root_Nav_Mod ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<b> $M_intro</b> | <FONT color="red">'.$M_intro.'</font><br>';
echo '<b> $M_intro_AT</b> | <FONT color="red">'.$M_intro_AT.'</font><br>';
echo '<b> $M_02</b> | <FONT color="red">'.$M_02.'</font><br>';
echo '<b> $M_02_AT</b> | <FONT color="red">'.$M_02_AT.'</font><br>';
echo '<b> $M_03</b> | <FONT color="red">'.$M_03.'</font><br>';
echo '<b> $M_03_AT</b> | <FONT color="red">'.$M_03_AT.'</font><br>';
echo '<b> $M_04</b> | <FONT color="red">'.$M_04.'</font><br>';
echo '<b> $M_04_AT</b> | <FONT color="red">'.$M_04_AT.'</font><br>';
echo '<b> $M_05</b> | <FONT color="red">'.$M_05.'</font><br>';
echo '<b> $M_05_AT</b> | <FONT color="red">'.$M_05_AT.'</font><br>';
echo '<b> $M_06</b> | <FONT color="red">'.$M_06.'</font><br>';
echo '<b> $M_06_AT</b> | <FONT color="red">'.$M_06_AT.'</font><br>';
echo '<b> $M_tem_AT</b> | <FONT color="red">'.$M_tem_AT.'</font><br>';
echo '<b> $M_creds</b> | <FONT color="red">'.$M_creds.'</font><br>';

echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- PAGE DE NAVIGATION min-nav ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<b> $Mod_Nav_Home</b> | <FONT color="red">'.$Mod_Nav_Home.'</font><br>';
echo '<b> $Mod_Nav_Work</b> | <FONT color="red">'.$Mod_Nav_Work.'</font><br>';
echo '<b> $Mod_Nav_Techno</b> | <FONT color="red">'.$Mod_Nav_Techno.'</font><br>';
echo '<b> $Mod_Nav_Contact</b> | <FONT color="red">'.$Mod_Nav_Contact.'</font><br>';
echo '<b> $Mod_Nav_Git</b> | <FONT color="red">'.$Mod_Nav_Git.'</font><br>';
echo '<b> $Mod_Nav_Teleg</b> | <FONT color="red">'.$Mod_Nav_Teleg.'</font><br>';

echo '<b> $Nav_Lang</b> | <FONT color="red">'.$Nav_Lang.'</font><br>';

/*
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- PAGE D INTRO min-home ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
*/

echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- PAGE DE TRAVAUX min-work ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<b> $Mod_Work_txt</b> | <FONT color="red">'.$Mod_Work_txt.'</font><br>';
echo '<b> $Mod_Work_title</b> | <FONT color="red">'.$Mod_Work_title.'</font><br>';

echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- PAGE DE TECHNOLOGIE min-techno ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<b> $Mod_Techno_txt</b> | <FONT color="red">'.$Mod_Techno_txt.'</font><br>';
echo '<b> $Mod_Techno_title</b> | <FONT color="red">'.$Mod_Techno_title.'</font><br>';

echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- PAGE DE FORMULAIRE min-contact ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<b> $Mod_Contact_info</b> | <FONT color="red">'.$Mod_Contact_info.'</font><br>';
echo '<b> $Mod_Contact_req</b> | <FONT color="red">'.$Mod_Contact_req.'</font><br>';
echo '<b> $Mod_Contact_req</b> | <FONT color="red">'.$Mod_Contact_star.'</font><br>';
echo '<font color="green"><b> ----- Labels du formulaire ----- </b></font><br>';
echo '<b> $Form_00_Civility</b> | <FONT color="red">'.$Form_00_Civility.'</font><br>';
echo '<b> $Form_01_Name</b> | <FONT color="red">'.$Form_01_Name.'</font><br>';
echo '<b> $Form_02_First_Name</b> | <FONT color="red">'.$Form_02_First_Name.'</font><br>';
echo '<b> $Form_03_Email</b> | <FONT color="red">'.$Form_03_Email.'</font><br>';
echo '<b> $Form_04_Phone</b> | <FONT color="red">'.$Form_04_Phone.'</font><br>';
echo '<b> $Form_05_Company</b> | <FONT color="red">'.$Form_05_Company.'</font><br>';
echo '<b> $Form_06_Category</b> | <FONT color="red">'.$Form_06_Category.'</font><br>';
echo '<b> $Form_07_Robot</b> | <FONT color="red">'.$Form_07_Robot.'</font><br>';
echo '<b> $Form_07_Captcha</b> | <FONT color="red">'.$Form_07_Captcha.'</font><br>';
echo '<b> $Form_08_Button_Send</b> | <FONT color="red">'.$Form_08_Button_Send.'</font><br>';
echo '<b> $Form_09_Button_Reset</b> | <FONT color="red">'.$Form_09_Button_Reset.'</font><br>';

echo '<font color="green"><b> ----- Txt dans la catégorie ----- </b></font><br>';
echo '<b> $Cat_00_Txt</b> | <FONT color="red">'.$Cat_00_Txt.'</font><br>';
echo '<b> $Cat_01_Txt</b> | <FONT color="red">'.$Cat_01_Txt.'</font><br>';
echo '<b> $Cat_02_Txt</b> | <FONT color="red">'.$Cat_02_Txt.'</font><br>';
echo '<b> $Cat_03_Txt</b> | <FONT color="red">'.$Cat_03_Txt.'</font><br>';
echo '<b> $Cat_04_Txt</b> | <FONT color="red">'.$Cat_04_Txt.'</font><br>';

echo '<font color="green"><b> ----- Txt dans la civilité ----- </b></font><br>';
echo '<b> $Civ_00_Txt</b> | <FONT color="red">'.$Civ_00_Txt.'</font><br>';
echo '<b> $Civ_01_Txt</b> | <FONT color="red">'.$Civ_01_Txt.'</font><br>';
echo '<b> $Civ_02_Txt</b> | <FONT color="red">'.$Civ_02_Txt.'</font><br>';
echo '<b> $Civ_03_Txt</b> | <FONT color="red">'.$Civ_03_Txt.'</font><br>';

echo '<font color="green"><b> ----- Txt par défaut dans les champs "placeholder" ----- </b></font><br>';
echo '<b> $PH_Name</b> | <FONT color="red">'.$PH_Name.'</font><br>';
echo '<b> $PH_First_Name</b> | <FONT color="red">'.$PH_First_Name.'</font><br>';
echo '<b> $PH_Email</b> | <FONT color="red">'.$PH_Email.'</font><br>';
echo '<b> $PH_Phone</b> | <FONT color="red">'.$PH_Phone.'</font><br>';
echo '<b> $PH_Company</b> | <FONT color="red">'.$PH_Company.'</font><br>';
echo '<b> $PH_Message</b> | <FONT color="red">'.$PH_Message.'</font><br>';

echo '<font color="green"><b> ----- Message pour le compteur de caractère en javascript ----- </b></font><br>';
echo '<b> $Msg_00_Counter</b> | <FONT color="red">'.$Msg_00_Counter.'</font><br>';
echo '<b> $Msg_01_Counter</b> | <FONT color="red">'.$Msg_01_Counter.'</font><br>';

echo '<font color="green"><b> ----- Txt pour le formatage de la réponse du mail (Formulaire de contact) ----- </b></font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour le Bonjour ----- </b></font><br>';
echo '<b> $Msg_Hello</b> | <FONT color="red">'.$Msg_Hello.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour la société ----- </b></font><br>';
echo '<b> $Post_Soc</b> | <FONT color="red">'.$Post_Soc.'</font><br>';
echo '<b> $Post_Soc_N</b> | <FONT color="red">'.$Post_Soc_N.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour le téléphone ----- </b></font><br>';
echo '<b> $Post_Phone</b> | <FONT color="red">'.$Post_Phone.'</font><br>';
echo '<b> $Post_Phone_N</b> | <FONT color="red">'.$Post_Phone_N.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour le mail ----- </b></font><br>';
echo '<b> $Post_EMail</b> | <FONT color="red">'.$Post_EMail.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour le Sujet du message ----- </b></font><br>';
echo '<b> $Post_Subjet_Msg</b> | <FONT color="red">'.$Post_Subjet_Msg.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour le message bien envoyé ----- </b></font><br>';
echo '<b> $Msg_Send_Ok</b> | <FONT color="red">'.$Msg_Send_Ok.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour la prise en compte du message ----- </b></font><br>';
echo '<b> $Msg_00_Good</b> | <FONT color="red">'.$Msg_00_Good.'</font><br>';
echo '<b> $Msg_01_Good</b> | <FONT color="red">'.$Msg_01_Good.'</font><br>';
echo '<b> $Msg_02_Good</b> | <FONT color="red">'.$Msg_02_Good.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse pour erreur SMTP ----- </b></font><br>';
echo '<b> $Msg_00_Bad</b> | <FONT color="red">'.$Msg_00_Bad.'</font><br>';

echo '<font color="green"><b> ----- Champ de réponse réception du message en BAL ----- </b></font><br>';
echo '<b> $Msg_00_Msgto</b> | <FONT color="red">'.$Msg_00_Msgto.'</font><br>';
echo '<b> $Msg_01_Your_Msg</b> | <FONT color="red">'.$Msg_01_Your_Msg.'</font><br>';

echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<font color="green"><b> ----- Liens externes divers pour le site ----- </b></font><br>';
echo '<font color="green"><b> ---------------------------------------------- </b></font><br>';
echo '<b> $Link_00_Wipd_RWD</b> | <FONT color="red">'.$Link_00_Wipd_RWD.'</font><br>';
echo '<b> $Link_01_Wipd_B64</b> | <FONT color="red">'.$Link_01_Wipd_B64.'</font><br>';
echo '<b> $Link_02_FFD</b> | <FONT color="red">'.$Link_02_FFD.'</font><br>';
echo '<b> $Link_03_Uwamp</b> | <FONT color="red">'.$Link_03_Uwamp.'</font><br>';
echo '<b> $Link_04_FileZilla</b> | <FONT color="red">'.$Link_04_FileZilla.'</font><br>';
echo '<b> $Link_05_Isograd</b> | <FONT color="red">'.$Link_05_Isograd.'</font><br>';
echo '<b> $Link_06_Webex</b> | <FONT color="red">'.$Link_06_Webex.'</font><br>';
echo '<b> $Link_07_Spreadshirt</b> | <FONT color="red">'.$Link_07_Spreadshirt.'</font><br>';
echo '<b> $Link_08_Ovh</b> | <FONT color="red">'.$Link_08_Ovh.'</font><br>';

echo '</div>';
echo '</body>';
?>