<?php

namespace AlternativePayments\Model;

class Payment extends Element
{

    /*
     * @var string
     */
    protected $token;

    /*
     * @var string
     */
    protected $customerCode;

    /*
     * @var string
     */
    protected $paymentOption;

    /*
     * @var string
     */
    protected $holder;

    /*
     * @var string
     */
    protected $IBAN;

    /*
     * @var string
     */
    protected $BIC;
    
    /*
     * @var string
     */
    protected $creditCardNumber;
    
    /*
     * @var string
     */
    protected $expirationMonth;
    
    /*
     * @var string
     */
    protected $expirationYear;
    
    /*
     * @var string
     */
    protected $cVV2;
    
    /*
     * @var string
     */
    protected $documentId;
    
    /*
     * @var string
     */
    protected $bankCode;
    
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
    public function getCustomerCode()
    {
        return $this->customerCode;
    }
    
    /*
     * @param string
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;
    }
    
    /*
     * @return string
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }
    /*
     * @param string
     */
    public function setPaymentOption($paymentOption)
    {
        $this->paymentOption = $paymentOption;
    }
    /*
     * @return string
     */
    public function getHolder()
    {
        return $this->holder;
    }
    /*
     * @param string
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
    }
    /*
     * @return string
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }
    /*
     * @param string
     */
    public function setIBAN($IBAN)
    {
        $this->IBAN = $IBAN;
    }

    /*
     * @return string
     */
    public function getBIC()
    {
        return $this->BIC;
    }
    
    /*
     * @param string
     */
    public function setBIC($BIC)
    {
        $this->BIC = $BIC;
    }
    
    /*
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }
    
    /*
     * @return string
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }
    
    /*
     * @return string
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }
    
    /*
     * @return string
     */
    public function getCVV2()
    {
        return $this->cVV2;
    }
    
    /*
     * @param string
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }
    
    /*
     * @param string
     */
    public function setExpirationMonth($expirationMonth)
    {
        $this->expirationMonth = $expirationMonth;
    }
    
    /*
     * @param string
     */
    public function setExpirationYear($expirationYear)
    {
        $this->expirationYear = $expirationYear;
    }
    
    /*
     * @param string
     */
    public function setCVV2($cVV2)
    {
        $this->cVV2 = $cVV2;
    }
    
    /*
     * @return string
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }
    
    /*
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }
    
    /*
     * @param string
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;
    }
    
    /*
     * @param string
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }
}
