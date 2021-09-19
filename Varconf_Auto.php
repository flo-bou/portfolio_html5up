<?php
require 'SetVar.php';
?>
<!-- // En-tete de la page HTML5 -->
<!DOCTYPE html>';
<!-- // Langue du site / caractère utilisés / titre du site -->
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
        <meta charset="utf-8">
        <title>JBS View Variables</title>;
        <link rel="stylesheet" type="text/css" href=<?= $assets_folder_css.'styleAdmin.css' ?>">
        <link rel="shortcut icon" href="<?= $FILEFAVICON ?>">
        <link rel="stylesheet" type="text/css" href="<?= $FILE_CSS_FAW ?>">
</head>

<body>
        <header>
                <h1>Fichier de configuration des variables PHP</h1>
        </header>
        <div>
                <section>
                        <h2> Nom de ce fichier de configuration PHP</h2>
                        <p><b><?= $SetVar_namefile ?></b><span class="admi_valVar"><?= $SetVar_namefile ?></span></p>
                </section>
<?php
// Nom du fichier à ouvrir
$fichier = file("SetVar.php");
$oulbieLigne = [];
foreach ($fichier as $line_num => $line) {

        require 'SetVar.php';
        if ($line_num > 15 && !in_array($line_num, $oulbieLigne)) {
                if (preg_match('/\* *\n^| -------------------/i', htmlspecialchars($line))) {
                        echo "</section><section>
                        <h2>" . $fichier[$line_num + 1] . "</h2>\n";
                        //$line_num = $line_num+4;
                        $oulbieLigne = [$line_num + 2, $line_num + 3, $line_num + 4];
                        continue;
                }

                if (preg_match('/^\$.* *= *.*$/i', htmlspecialchars($line))) {

                        $nomVariable = preg_split(
                                '/^(\$.*) *= *[^<]/i',
                                htmlspecialchars($line),
                                -1,
                                PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY
                        )[0];

                        //$tmp =  "${$nomVariable}";
                        echo '<p><b>' . $nomVariable . "</b><span class=admi_valVar>";
                        echo $nomVariable.'</p>'.$URLWEBRADIO;
                }

                /*
echo "Ligne #<b>{$line_num}</b> : " . $line .
"<br />\n";*/
        }
}
?>
                </div>
        </body>
</html>