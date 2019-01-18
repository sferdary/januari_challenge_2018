<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */


?>
<form method="post" action="">
    <div class="form-group">
        <?php
        if (isset($_GET['reCaptcha_success'])) {
            if (($_GET['reCaptcha_success']) == "true") { ?>
                <div style="color: green;">Bedankt voor uw reactie!</div>
            <?php } else if (($_GET['reCaptcha_success']) == "false") { ?>
                <div style="color: red;">Captcha failed, please try again!</div>
            <?php }
        } ?>
        <input type="text" name="name" class="form-control" id="name" placeholder="Naam" required>
    </div>
    <div class="form-group">
        <textarea type="text" name="comment" class="form-control"
                  id="comment" placeholder="Bericht" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="terms_conditions" class="checkbox-inline">
            <input type="checkbox" name="terms_conditions" id="terms_conditions" required>
            Ik heb de algemene voorwaarden gelezen en verklaar hierbij dat ik akkoord ga.
        </label>
    </div>
    <div class="form-group">
        <div class="g-recaptcha" data-size="compact" data-sitekey="<?php echo PUBLIC_KEY; ?>"></div>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
        <div class="empty-sm"></div>
        <button type="submit" name="submit" class="btn btn-primary" id="submit">Verstuur</button>

    </div>
</form>