<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

include_once '../../includes/model/Recaptcha_v2.php';

class Recaptcha_public_key extends ReCaptcha_v2
{
    public function setPublicKey(){
        $key_public = $this->getReCaptchaV2();
        $public_key = $key_public['public_key'];
        return $public_key;
    }
}