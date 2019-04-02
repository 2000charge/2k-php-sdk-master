<?php

namespace Tests;

error_reporting(E_ALL ^ E_STRICT);

use AlternativePayments\Model\Transaction;
use PHPUnit_Framework_TestCase;

class TransactionTest extends PHPUnit_Framework_TestCase {
    
    private $testTransaction;
    
    private $testId;
    private $testCustomer; 
    private $testPayment; 
    private $testAmount; 
    private $testCurrency; 
    private $testToken;     
    private $testPhoneVerification;
    private $testMerchantPassThruData;
    private $testDescription;
    
    private function SetTestValues(){
        $this->testId = "testcodevalue12345";        
        $this->testCustomer = "Some test customer"; 
        $this->testPayment = "Some test payment"; 
        $this->testAmount = "10000"; 
        $this->testCurrency = "EUR"; 
        $this->testToken = "sometesttoken123";
        $this->testPhoneVerification = "test phone verification";
        $this->testMerchantPassThruData = "test merchant pass-thru data";
        $this->testDescription = "test description";
    }
    
    private function InitTests(){           
        $this->testTransaction = new Transaction();
        $this->testTransaction->setId($this->testId);
        $this->testTransaction->setCustomer($this->testCustomer); 
        $this->testTransaction->setPayment($this->testPayment); 
        $this->testTransaction->setAmount($this->testAmount); 
        $this->testTransaction->setCurrency($this->testCurrency); 
        $this->testTransaction->setToken($this->testToken);        
        $this->testTransaction->setPhoneVerification($this->testPhoneVerification);
        $this->testTransaction->setMerchantPassThruData($this->testMerchantPassThruData);
        $this->testTransaction->setDescription($this->testDescription);
    }
    
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testCode() {        
        $this->assertTrue($this->testTransaction->getId() == $this->testId);
    }
    
    public function testCustomer() {
        $this->assertTrue($this->testTransaction->getCustomer() == $this->testCustomer);
    }  
    
    public function testPayment() {
        $this->assertTrue($this->testTransaction->getPayment() == $this->testPayment);
    }
    
    public function testAmount() {
        $this->assertTrue($this->testTransaction->getAmount() == $this->testAmount);
    }
    
    public function testCurrency() {
        $this->assertTrue($this->testTransaction->getCurrency() == $this->testCurrency);
    }
    
    public function testToken() {
        $this->assertTrue($this->testTransaction->getToken() == $this->testToken);
    }
    
    public function testPhoneVerification() {
        $this->assertTrue($this->testTransaction->getPhoneVerification() == $this->testPhoneVerification);
    } 
    
    public function testMerchantPassthruData() {
        $this->assertTrue($this->testTransaction->getMerchantPassThruData() == $this->testMerchantPassThruData);
    } 
    
    public function testDescription() {
        $this->assertTrue($this->testTransaction->getDescription() == $this->testDescription);
    } 
}
