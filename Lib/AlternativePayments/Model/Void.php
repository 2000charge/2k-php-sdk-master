<?php

namespace AlternativePayments\Model;

class Void extends Element
{

    /*
     * @var integer
     */
    protected $amount;

    /*
     * @var string
     */
    protected $currency;

    /*
     * @var string
     */
    protected $token;

    /*
     * @var string
     */
    protected $reason;

    /*
     * @retrun integer
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /*
     * @param integer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /*
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /*
     * @param string
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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

    /*
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /*
     * @param string
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }
}
