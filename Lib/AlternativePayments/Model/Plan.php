<?php

namespace AlternativePayments\Model;

class Plan extends Element
{

    /*
     * @var string
     */
    protected $merchantIdentification;

    /*
     * @var integer
     */
    protected $amount;

    /*
     * @var string
     */
    protected $currency;

    /*
     * @var integer
     */
    protected $period;

    /*
     * @var integer
     */
    protected $interval;

    /*
     * @var integer
     */
    protected $recurTimes;

    /*
     * @var integer
     */
    protected $trialDays;

    /*
     * @var integer
     */
    protected $discountAmount;

    /*
     * @var integer
     */
    protected $discountRecurTimes;

    /*
     * @var string
     */
    protected $name;

    /*
     * @var string
     */
    protected $description;


    /*
     * @return string
     */
    public function getMerchantIdentification()
    {
        return $this->merchantIdentification;
    }
    /*
     * @param string
     */
    public function setMerchantIdentification($merchantIdentification)
    {
        $this->merchantIdentification = $merchantIdentification;
    }

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
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /*
     * @return integer
     */
    public function getPeriod()
    {
        return $this->period;
    }
    /*
     * @param integer
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /*
     * @return integer
     */
    public function getInterval()
    {
        return $this->interval;
    }
    /*
     * @param integer
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
    }

    /*
     * @return integer
     */
    public function getRecurTimes()
    {
        return $this->recurTimes;
    }
    /*
     * @param integer
     */
    public function setRecurTimes($recurTimes)
    {
        $this->recurTimes = $recurTimes;
    }

    /*
     * @return integer
     */
    public function getTrialDays()
    {
        return $this->trialDays;
    }
    /*
     * @param integer
     */
    public function setTrialDays($trialDays)
    {
        $this->trialDays = $trialDays;
    }

    /*
     * @return integer
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }
    /*
     * @param integer
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
    }

    /*
     * @return integer
     */
    public function getDiscountRecurTimes()
    {
        return $this->discountRecurTimes;
    }
    /*
     * @param integer
     */
    public function setDiscountRecurTimes($discountRecurTimes)
    {
        $this->discountRecurTimes = $discountRecurTimes;
    }

    /*
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /*
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /*
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /*
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
