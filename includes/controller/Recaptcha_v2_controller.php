<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
include_once '../../includes/model/Recaptcha_v2.php';

class Recaptcha_v2_controller extends ReCaptcha_v2
{
    public function setCaptcha_v2($g_response)
    {
        $key_secret = $this->getReCaptchaV2();
        $secret_key = $key_secret['secret_key'];

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        define('SECRET_KEY', $secret_key);
        define('RESPONSE', $g_response);
        define('SERVER', $_SERVER['REMOTE_ADDR']);
        $request = $url . "?secret=" . SECRET_KEY . "&response=" . RESPONSE . "&remoteip=" . SERVER;
        $getResponse = file_get_contents($request);
        $response = json_decode($getResponse);

        return $response;
    }

    public function setPublicKey(){
        $key_public = $this->getReCaptchaV2();
        $public_key = $key_public['public_key'];
        return $public_key;
    }
}