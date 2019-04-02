<?php

namespace Tests;

use AlternativePayments\Model\Void;
use \AlternativePayments\Model\ReturnReason;
use PHPUnit_Framework_TestCase;

class VoidTransactionTest extends PHPUnit_Framework_TestCase {
    
    private $testVoidTransaction;        
    
    private $testId;    
    private $testAmount; 
    private $testCurrency; 
    private $testToken;
    private $testReason;
    
    private function SetTestValues(){
        $this->testId = "testcodevalue12345";
        $this->testAmount = "10000"; 
        $this->testCurrency = "EUR"; 
        $this->testToken = "sometesttoken123";                
    }
    
    private function InitTests(){          
        $this->testVoidTransaction = new Void();
        $this->testVoidTransaction->setId($this->testId);
        $this->testVoidTransaction->setAmount($this->testAmount); 
        $this->testVoidTransaction->setCurrency($this->testCurrency); 
        $this->testVoidTransaction->setToken($this->testToken);         
    }
    
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testId() {        
        $this->assertTrue($this->testVoidTransaction->getId() == $this->testId);
    }
 
    public function testAmount() {
        $this->assertTrue($this->testVoidTransaction->getAmount() == $this->testAmount);
    }
    
    public function testCurrency() {
        $this->assertTrue($this->testVoidTransaction->getCurrency() == $this->testCurrency);
    }
    
    public function testToken() {
        $this->assertTrue($this->testVoidTransaction->getToken() == $this->testToken);
    }
 
    public function testReason(){
        $this->testVoidTransaction->setReason(ReturnReason::CHARGEBACK_AVOIDANCE);
        $this->assertTrue($this->testVoidTransaction->getReason() == "CHARGEBACK_AVOIDANCE");
        
        $this->testVoidTransaction->setReason(ReturnReason::END_USER_ERROR);
        $this->assertTrue($this->testVoidTransaction->getReason() == "END_USER_ERROR");
        
        $this->testVoidTransaction->setReason(ReturnReason::FRAUD);
        $this->assertTrue($this->testVoidTransaction->getReason() == "FRAUD");
        
        $this->testVoidTransaction->setReason(ReturnReason::INVALID_TRANSACTION);
        $this->assertTrue($this->testVoidTransaction->getReason() == "INVALID_TRANSACTION");
        
        $this->testVoidTransaction->setReason(ReturnReason::UNSATISFIED_CUSTOMER);
        $this->assertTrue($this->testVoidTransaction->getReason() == "UNSATISFIED_CUSTOMER");
    } 
}