<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 */
class ReCaptcha_v2
{
    protected $public_key = '6LcatYoUAAAAAK47ulG7PSQb35KlwU0BDCaxWXSz';
    protected $secret_key = '6LcatYoUAAAAAIPVLY5esDWx6Mc2lcENnnPj-3y5';

    protected function getReCaptchaV2()
    {
        $public_key = $this->public_key;
        $secret_key = $this->secret_key;
        $result = array
        (
            'public_key' => $public_key,
            'secret_key' => $secret_key
        );
        return $result;
    }
}