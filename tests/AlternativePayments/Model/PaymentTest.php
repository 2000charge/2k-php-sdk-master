<?php

namespace Tests;

use AlternativePayments\Model\Payment;
use PHPUnit_Framework_TestCase;
use DateTime;

class PaymentTest extends PHPUnit_Framework_TestCase {
    
    private $testPayment;
    
    private $testId;
    private $testToken;
    private $testCustomerCode;
    private $testPaymentOption;
    private $testHolder;
    private $testIBAN;
    private $testBIC;    
    private $testCreateDate;
    private $testUpdateDate;
    
    private function SetTestValues()
    {
        $this->testId = "testcodevalue12345";
        $this->testToken = "sometoken1234567890";
        $this->testCustomerCode = "somecustomercode1234567890";
        $this->testPaymentOption = "Test Payment Options";
        $this->testHolder = "SOMEHOLDER123";
        $this->testIBAN = "SOMEIBAN123456789";
        $this->testBIC = "SOMEBIC123";    
        $this->testCreateDate = new DateTime('2014-01-01 00:00:00');       
        $this->testUpdateDate = new DateTime('2014-01-01 00:00:00');       
    }
    
    private function InitTests(){
        $this->testPayment = new Payment();
        $this->testPayment->setId($this->testId);
        $this->testPayment->setToken($this->testToken);
        $this->testPayment->setCustomerCode($this->testCustomerCode);
        $this->testPayment->setPaymentOption($this->testPaymentOption);
        $this->testPayment->setHolder($this->testHolder);
        $this->testPayment->setIBAN($this->testIBAN);
        $this->testPayment->setBIC($this->testBIC);
        $this->testPayment->setCreated($this->testCreateDate);
        $this->testPayment->setUpdated($this->testUpdateDate);      
    }
    
    public function SetUp(){
        
        $this->SetTestValues();  
        $this->InitTests();  
    }
    
    public function testId() {        
        $this->assertTrue($this->testPayment->getId() == $this->testId);
    }    
  
    public function testToken() {
        $this->assertTrue($this->testPayment->getToken() == $this->testToken);
    }
    
    public function testCustomerCode() {
        $this->assertTrue($this->testPayment->getCustomerCode() == $this->testCustomerCode );
    }
    
    public function testPaymentOption() {
        $this->assertTrue($this->testPayment->getPaymentOption() == $this->testPaymentOption);
    }
    
    public function testHolder() {
        $this->assertTrue($this->testPayment->getHolder() == $this->testHolder);
    }
    
    public function testIBAN() {
        $this->assertTrue($this->testPayment->getIBAN() == $this->testIBAN);
    }
    
    public function testBIC() {
        $this->assertTrue($this->testPayment->getBIC() == $this->testBIC);
    }
    
    public function testCreated() {
        $this->assertTrue($this->testPayment->getCreated() == $this->testCreateDate);
    }
    
    public function testUpdated() {
        $this->assertTrue($this->testPayment->getUpdated() == $this->testUpdateDate);
    }
}
