<?php
// inclus dans plein de pages (via la variable $FILE_language_fr définie dans SetVar)via l'inclusion dqns SetVar
/*
* TOUTES les lignes ne commencent pas par // seront prises en compte par le SERVEUR !
* fr_lang.txt l'encodage est au format UTF-8 sans BOM (utilisez Notepad++ pour éditer ce fichier !)
* Note pour les traducteurs : N'ajoutez pas de lignes, ne modifiez pas le nom des variables, ne modifiez pas l'ordre des lignes
*/
// ----------------------------------------------------
// PAGE DE NAVIGATION min-nav
// ----------------------------------------------------
$Mod_Nav_Home = "Accueil";
$Mod_Nav_Work = "Travaux";
$Mod_Nav_Techno = "Technologie";
$Mod_Nav_Contact = "Contact";
$Mod_Nav_Git = "Github";
$Mod_Nav_Teleg = "Telegram";
$Nav_Lang = "Langue";
// ----------------------------------------------------
// HOME PAGE
// ----------------------------------------------------
$Home_next_AT = "D&eacute;crouvrez mon travail.";
$Home_ic_AT = "Image de Florent Boutonnet.";
// ----------------------------------------------------
// PAGE DE TRAVAUX min-work
// ----------------------------------------------------
$Mod_Work_txt = 'Mod_fr_Work.txt'; // ON UTILISE LE CHEMIN COMME A PARTIR NON DE CE FICHIER fr_Lang MAIS A PARTIR DU FICHIER QUI l'include
$Mod_Work_title = "Travaux";
// ----------------------------------------------------
// PAGE DE TECHNOLOGIE min-techno
// ----------------------------------------------------
$Mod_Techno_txt = 'Mod_fr_Techno.txt';
$Mod_Techno_title = "Technologie";
// ----------------------------------------------------
// PAGE DE FORMULAIRE min-contact
// ----------------------------------------------------
//** Infos sur le formulaire
$Mod_Contact_info = "Ce formulaire de contact ne stocke aucune information sur ce serveur. Retrouvez toutes les informations légales de ce site sur la page <a href=\"../#about\" alt=\"À propos\" title=\"À propos\">à propos</a>.";
$Mod_Contact_req = "Les champs avec astérisque &#40;&#42;&#41; doivent être renseignés.";
$Mod_Contact_star = "<span title=\"$Mod_Contact_req\">&nbsp;&#42</span>";
//** Labels du formulaire
$Form_00_Civility = "Civilit&eacute;";
$Form_01_Name = "Nom";
$Form_02_First_Name = "Pr&eacute;nom";
$Form_03_Email = "Courriel";
$Form_04_Phone = "T&eacute;l&eacute;phone";
$Form_05_Company = "Soci&eacute;t&eacute;";
$Form_06_Category = "Sujet";
$Form_07_Robot = "Je ne suis pas un robot";
$Form_07_Captcha = "V&eacute;rification du captcha";
$Form_08_Button_Send = "Envoyer le message";
$Form_09_Button_Reset = "R&eacute;initialiser";
//** Txt dans la catégorie
// Options du menu déroulant "choisir un thème"
$Cat_00_Txt = "Choisissez un th&egrave;me";
$Cat_01_Txt = "&Agrave; propos du site internet";
$Cat_02_Txt = "Recevoir le CV de Florent Boutonnet";
// $Cat_02_Txt = "&Agrave; propos d'un membre";
$Cat_03_Txt = "Comment devenir membre";
$Cat_04_Txt = "Pas de sujet de message choisi";
//** Txt dans la civilité
$Civ_01_Txt = "M.";
$Civ_02_Txt = "Mme";
//** Txt par défaut dans les champs "placeholder" (PH)
$PH_Name = "Dupont";
$PH_First_Name = "Jean";
$PH_First_Name_F = "Marie";
$PH_Email = "jeandupont@exemple.com";
$PH_Email_F = "mariedupont@exemple.com";
$PH_Phone = "+xx x xx xx xx xx";
$PH_Company = "Nom de votre soci&eacute;t&eacute;";
$PH_Category ="Sujet du message";
$PH_Message = "Bonjour, ...";
//** Message pour le compteur de caractère en javascript
$Msg_00_Counter = "mot(s)";
$Msg_01_Counter = "caract&egrave;re(s) restant(s)";
// ----------------------------------------------------
//** Txt pour le formatage de la réponse du mail (Formulaire de contact)
$Civ_00_Txt = "Cher ";
$Civ_03_Txt = "Ch&egrave;re ";
//** Champ de réponse pour le Bonjour
$Msg_Hello = "Bonjour";
//** Champ de réponse pour la société
$Post_Soc = "Vous &ecirc;tes un représentant de ";
$Post_Soc_N = "Vous n&apos;avez pas renseign&eacute; de soci&eacute;t&eacute;.";
//** Champ de réponse pour le téléphone
$Post_Phone = "Votre num&eacute;ro de t&eacute;l&eacute;phone est le ";
$Post_Phone_N = "Vous n&apos;avez pas renseign&eacute; de num&eacute;ro de t&eacute;l&eacute;phone.";
//** Champ de réponse pour le mail
$Post_EMail = "Votre adresse de courriel est ";
//** Champ de réponse pour le Sujet du message
$Post_Subjet_Msg = "Votre message a pour sujet : ";
//** Champ de réponse pour le message bien envoyé
$Msg_Send_Ok = "Votre message a bien &eacute;t&eacute; envoy&eacute;.";
//** Champ de réponse pour la prise en compte du message
$Msg_00_Good = "Nous allons apporter une r&eacute;ponse rapide &agrave; votre demande.";
$Msg_01_Good = "Nous vous remercions de l&apos;int&eacute;r&ecirc;t que vous nous portez.";
$Msg_02_Good = "Bien cordialement, l&apos;administrateur du School Of Web.";
//** Champ de réponse pour erreur SMTP
$Msg_00_Bad = "Une erreur s&apos;est produite. Le message n&apos;a pas pu &ecirc;tre envoy&eacute; correctement.<br>Nous avons &eacute;t&eacute; alert&eacute;s de ce dysfonctionnement, et nous mettons tout en &oelig;uvre pour r&eacute;parer au plus vite.<br>Nous sommes d&eacute;sol&eacute;s de ce contretemps. R&eacute;essayez plus tard !<br>Bien cordialement, l&apos;administrateur de School Of Web.";
//** Champ de réponse réception du message en BAL
$Msg_00_Msgto = "Message de ";
$Msg_01_Your_Msg = "Votre message : ";
// ----------------------------------------------------
// Module de liens vers la racine dans min-footer
// ----------------------------------------------------
// version avec AT pour les descriptions en alt et title
// version sans AT est celle qui apparait
$M_intro = "Intro";
$M_intro_AT = "Introduction";
$M_02 = "Membres";
$M_02_AT = "Les Membres";
$M_03 = "&Agrave; propos";
$M_03_AT = "&Agrave; propos";
$M_04 = "Contact"; // apparait en haut de la page contact A CHANGER
$M_04_AT = "Contacter Florent B";
$M_05 = "Boutique";
$M_05_AT = "La boutique School Of Web";
$M_06 = "Plan du site";
$M_06_AT = "Le Plan du site";
$M_tem_AT = "Lien vers le site html5up";
$M_creds ="Crédits";
$M_creds_AT ="Crédits complets du site";
// $folder_module_tmp = '/Florent_B/module/'; // ne marche pas
?>