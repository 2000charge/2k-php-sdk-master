<?php

namespace AlternativePayments\Model;

class Transaction extends Element
{

    /*
     * @var \AlternativePayments\Model\Customer
     */
    protected $customer;

    /*
     * @var \AlternativePayments\Model\Payment
     */
    protected $payment;

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
     * @var \AlternativePayments\Model\PhoneVerification
     */
    protected $phoneVerification;

    /*
     * @var string
     */
    protected $merchantPassThruData;
	
	/*
     * @var string
     */
    protected $merchantTransactionId;
	
    /*
     * @var string
     */
    protected $description;

    /*
     * @var string
     */
    protected $ipAddress;
    
    /**
     * @var \AlternativePayments\Model\RedirectUrls
     */
    protected $redirectUrls;
    
    /*
     * @var boolean
     */
    protected $isRecurring;
    
    /*
     * @var string
     */
    protected $initialTransactionId;
    
     /*
     * @return \AlternativePayments\Model\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    
    /*
     * @param \AlternativePayments\Model\Customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
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
     * @return \AlternativePayments\Model\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }
    
    /*
     * @param \AlternativePayments\Model\Payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /*
     * return integer
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
     * @retrun \AlternativePayments\Model\PhoneVerification
     */
    public function getPhoneVerification()
    {
        return $this->phoneVerification;
    }
    /*
     * @param \AlternativePayments\Model\PhoneVerification
     */
    public function setPhoneVerification($phoneVerification)
    {
        $this->phoneVerification = $phoneVerification;
    }

    /*
     * @param string
     */
    public function setMerchantPassThruData($merchantPassThruData)
    {
        $this->merchantPassThruData = $merchantPassThruData;
    }
    /*
     * @return string
     */
    public function getMerchantPassThruData()
    {
        return $this->merchantPassThruData;
    }
	
	/*
     * @param string
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }
    /*
     * @return string
     */
    public function getMerchantTransactionId()
    {
        return $this->merchantTransactionId;
    }
	
    /*
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    /*
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }
    
    /*
     * @return \AlternativePayments\Model\RedirectUrls
     */
    public function getRedirectUrls()
    {
        return $this->redirectUrls;
    }

    /*
     * @return \AlternativePayments\Model\RedirectUrls
     */
    public function setRedirectUrls(RedirectUrls $redirectUrls)
    {
        $this->redirectUrls = $redirectUrls;
    }
    
    /*
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->isRecurring;
    }
    
    /*
     * @return string
     */
    public function getInitialTransactionId()
    {
        return $this->initialTransactionId;
    }
    
    /*
     * @param string
     */
    public function setIsRecurring($isRecurring)
    {
        $this->isRecurring = $isRecurring;
    }
    
    /*
     * @param string
     */
    public function setInitialTransactionId($initialTransactionId)
    {
        $this->initialTransactionId = $initialTransactionId;
    }


}
