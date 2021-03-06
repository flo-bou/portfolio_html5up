<?php 
// include 'Head.php';
ob_start ("ob_gzhandler");
require 'SetVar.php';
//** En-tete de la page HTML5 **//
echo '<!DOCTYPE html>';
//** Langue du site / caractère utilisés / titre du site **//
echo '<html lang="'.$HTML_LANG.'" xmlns:og="http://ogp.me/ns#">';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '<title>'.$TITLE_index.'</title>'; // 70c max
//** Meta http-equiv **//
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
//** Meta Name Mobile Specifics Android and Other system **//
// echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />'; // ancien
echo '<meta name="viewport" content="width=device-width, maximum-scale=2.0, initial-scale=1.0, user-scalable=yes" />';
echo '<!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->';
echo '<meta name="HandheldFriendly" content="True" />';
echo '<meta name="MobileOptimized" content="320" />';
echo '<meta name="mobile-web-app-capable" content="yes" />';
echo '<meta name="format-detection" content="telephone=yes" />'; // Convertir les numéros de téléphone en liens pour mobiles Yes ou No
echo '<meta name="mobile-agent" content="format=html5; url=index.php" />';
//** Meta Name Mobile Specifics APPLE **//
echo '<meta name="apple-mobile-web-app-capable" content="yes" />';
echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />';
echo '<meta name="apple-touch-fullscreen" content="yes" />';
//** Meta Name Robots and Spyder **//
echo '<meta name="robots" content="noodp" />';
//** Shortcut Icon Desktop **//
echo '<link rel="shortcut icon" href="'.$FILE_FAVICON.'" />';
echo '<link rel="icon" href="'.$FILE_FAVICON.'" />';
//** Shortcut Icon APPLE (mettre les images à la racine du site !) **//
echo '<link rel="apple-touch-icon" sizes="58x58" href="images/icon/touch-icon-iphone.png" />';
echo '<link rel="apple-touch-icon" sizes="152x152" href="images/icon/touch-icon-ipad.png" />';
echo '<link rel="apple-touch-icon" sizes="180x180" href="images/icon/touch-icon-iphone-retina.png" />';
echo '<link rel="apple-touch-icon" sizes="167x167" href="images/icon/touch-icon-ipad-retina.png" />';
//** Optimised SEO pour Google **//
echo '<meta name="description" content="'.$TITLE_description.'" />';  // 200c max
echo '<meta name="author" content="'.$TITLE_author.'" />';
echo '<meta name="designer" content="'.$TITLE_author.'" />';
echo '<meta name="web_author" content="'.$TITLE_author.'" />';
echo '<meta name="keywords" content="'.$TITLE_news_keywords.'" />'; // Supporter par les moteurs de recherche, SAUF GOOGLE !
echo '<meta name="news_keywords" content="'.$TITLE_news_keywords.'" />'; // GOOGLE UNIQUEMENT !
echo '<link type="text/plain" rel="author" href="'.$WEB_humans.'" />';
echo '<link rel="canonical" href="'.$WEB_canonical.'" />';
echo '<link rel="shortlink" href="'.$WEB_canonical.'" />';
//** Open Graph pour Facebook **//
echo '<meta property="og:locale" content="fr_FR" />';
// echo '<meta property="og:type" content="" />';
echo '<meta property="og:title" content="'.$TITLE_index.'" />';
echo '<meta property="og:description" content="'.$TITLE_description.'" />';
echo '<meta property="og:url" content="'.$WEB_canonical.'" />';
echo '<meta property="og:site_name" content="'.$TITLE_index.'" />';
echo '<meta property="og:image" content="'.$FILE_OG_400x400.'" />';
echo '<meta property="og:image:width" content="400" />';
echo '<meta property="og:image:height" content="400" />';
//** Stylesheets **//
echo '<link rel="stylesheet" href="'.$TFEASR_css_main.'" />';
echo '<noscript><link rel="stylesheet" type="text/css" href="'.$TFEASR_css_noscript.'"></noscript>';
echo '</head>';
//** DEBUT du corps HTML5
echo '<body class="is-preload">';
echo '<nav class="langue">';
echo '<a>'.$Nav_Lang.'</a>&nbsp;&nbsp;';
echo '<ul class="langue">'; // un <nav>?
echo '<li><a href="?lang=fr">français</a>&nbsp;&nbsp;</li>';
echo '<li><a href="?lang=en">english</a>&nbsp;&nbsp;</li>';
echo '<li><a href="?lang=de">deutsch</a>&nbsp;&nbsp;</li>';
echo '</ul>';
echo '</nav>';
// echo '<a href="?lang=en">Fr</a>';
// Astral by HTML5 UP
// Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
?>

    <!-- Wrapper-->
    <div id="wrapper">
        <!-- Nav -->
        <nav id="nav">
            <?php include $FILE_MIN_NAV; ?>
        </nav>

        <!-- Main -->
        <main id="main">
            <!-- home -->
            <article id="home" class="panel intro">
                <?php include $FILE_MIN_HOME; ?>
            </article>
            <!-- work -->
            <article id="work" class="panel">
                <?php include $FILE_MIN_WORK; ?>
            </article>
            <!-- techno -->
            <article id="techno" class="panel">
                <?php include $FILE_MIN_TECHNO; ?>
            </article>
            <!-- contact -->
            <article id="contact" class="panel">
                <?php include $FILE_MIN_CONTACT; ?>
            </article>
        </main>

        <!-- Footer -->
        <footer id="footer">
            <?php include $FILE_MIN_FOOTER; ?>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>