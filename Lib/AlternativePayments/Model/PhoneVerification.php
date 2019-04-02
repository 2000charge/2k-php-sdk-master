<?php

namespace AlternativePayments\Model;

class PhoneVerification extends Element
{

    /*
     * @var string
     */
    protected $pin;

    /*
     * @var string
     */
    protected $token;

    /*
     * @return string
     */
    public function getPin()
    {
        return $this->pin;
    }
    /*
     * @param string
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }

    /*
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    /*
     * @param string
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}
