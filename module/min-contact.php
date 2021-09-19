<!-- <a href="https://telegram.me/Florent_B" class="icon brands fa-telegram" target="blank"><span name="navig"><?= $Mod_Nav_Teleg; ?></span></a> // icone variante  : telegram-plane -->
<!-- Contact -->
<header>
    <h2 class="major"><span title="<?= $M_04_AT; ?>"><?= $M_04; ?></span></h2>
    <!-- <span class="image main"><img src="<?= $FOLDER_IMAGES_02; ?>pic04.jpg" alt="<?= $M_04_AT; ?>" title="<?= $M_04_AT; ?>" /></span> -->
</header>
<br>
<form method="POST" action=<?= $action_Sendmail_Lang; ?>>
    <!-- script de Dewi ICI METTRE LE BON NOM DE VARIABLE _Sendmail.php#contact -->
    <input id="Sendmail" name="Sendmail" type="hidden" value="Sendmail">
    <!-- //** DEBUT du DIV de l'ensemble des champs du formulaire -->
    <div class="row">

        <div class="col-6 col-12-medium">
            <label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $Form_01_Name.$Mod_Contact_star; ?></label>
            <!-- /* REQUIRED */ -->
            <input type="text" name="name" id="name" placeholder="<?= $PH_Name; ?>" required="required" />
        </div>

        <div class="col-6 col-12-medium">
            <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $Form_03_Email.$Mod_Contact_star; ?></label>
            <!-- /* REQUIRED */ -->
            <input type="text" name="email" id="email" placeholder="<?= $PH_Email; ?>" required="required" />
        </div>

        <div class="col-12"> <!-- /* REQUIRED */ -->
            <label
                for="category">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $Form_06_Category.$Mod_Contact_star; ?></label>
            <input type="text" name="category" id="category" placeholder="<?= $PH_Category; ?>" />
        </div>

        <div class="col-12">
            <label for="message">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message</label>
            <textarea name="message" id="message" rows="4" placeholder="<?= $PH_Message; ?>"
                required="required"></textarea>
        </div>

        <div class="col-6 col-12-medium">
            <label for="captcha">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $Form_07_Captcha.$Mod_Contact_star; ?></label>
            <!-- /* REQUIRED */ -->
            <input type="text" name="captcha" id="captcha" maxlength="6" required="required">
        </div>

        <div class="col-6 col-12-medium">
            <br>
            <img src="_Captcha.php" class="imagecap" title="Entrer the caracters seen in this captcha image"
                alt="Captcha image">
        </div>

        <!-- //** FIN du DIV de l'ensemble des champs du formulaire -->
    </div>

    <br>
    <center>
        <ul class="actions">
            <p><?= $Mod_Contact_req; ?></p>
            <li><input type="submit" value="<?= $Form_08_Button_Send; ?>" /></li>
            <li><input type="reset" value="<?= $Form_09_Button_Reset; ?>" /></li>
        </ul>
    </center>
</form>
<p><span class="enligne"><?= $Mod_Contact_info; ?></span></p>
<!-- /*
if(input[id="female"] == "female"){
    $PH_First_Name = $PH_First_Name_F;
    $PH_Email = $PH_Email_F;
}
*/ -->