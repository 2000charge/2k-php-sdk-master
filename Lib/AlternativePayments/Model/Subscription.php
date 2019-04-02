<?php

namespace AlternativePayments\Model;

class Subscription extends Element
{

    /*
     * @var string
     */
    protected $planId;

    /*
     * @var string
     */
    protected $customerId;

    /*
     * @var string
     */
    protected $paymentId;

    /*
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }
    /*
     * @param string
     */
    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }

    /*
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
    /*
     * @param string
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /*
     * @retrun string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }
    /*
     * @param string
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }
}
