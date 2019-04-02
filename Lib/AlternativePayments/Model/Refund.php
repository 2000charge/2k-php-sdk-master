<?php

namespace AlternativePayments\Model;

class Refund extends Element
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
    protected $reason;

    /*
     * @var string
     */
    protected $originalTransactionCode;

    /*
     * @var string
     */
    protected $created;

    /*
     * @var string
     */
    protected $requestIp;

    /*
     * @return integer
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
    public function setCurrency($currnecy)
    {
        $this->currency = $currnecy;
    }

    /*
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /*
     * @return string
     */
    public function getOriginalTransactionCode()
    {
        return $this->originalTransactionCode;
    }
    /*
     * @param string
     */
    public function setOriginalTransactionCode($originalTransactionCode)
    {
        $this->originalTransactionCode = $originalTransactionCode;
    }

    /*
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }
    /*
     * @param string
     */
    public function setCretaed($created)
    {
        $this->created = $created;
    }

    /*
     * @return string
     */
    public function getRequestIp()
    {
        return $this->requestIp;
    }
    /*
     * @param string
     */
    public function setRequestIp($requestIp)
    {
        $this->requestIp = $requestIp;
    }
}
