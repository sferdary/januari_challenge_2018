<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */

include_once '../../../includes/model/Recaptcha_v2.php';

class Recaptcha_validation extends ReCaptcha_v2
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
}