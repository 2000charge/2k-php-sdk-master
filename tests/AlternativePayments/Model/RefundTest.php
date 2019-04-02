<?php

namespace Tests;

use AlternativePayments\Model\Refund;
use \AlternativePayments\Model\ReturnReason;
use PHPUnit_Framework_TestCase;
use DateTime;

class RefundTest extends PHPUnit_Framework_TestCase {
    
    private $testRefund;
    
    private $testId;
    private $testAmount;
    private $testCurrency;
    private $testReason;
    private $testOriginalTransactionCode;
    private $testCreateDate;
    
    private function SetTestValues(){
        $this->testId = "testcodevalue12345";
        $this->testAmount = "3000";
        $this->testCurrency = "$";
        $this->testReason = "Some Test Reason";
        $this->testOriginalTransactionCode = "sometestoriginaltransactioncode123";
        $this->testCreateDate = new DateTime('2014-01-01 00:00:00');
    }
        
    private function InitTests(){       
        $this->testRefund = new Refund();
        $this->testRefund->setId($this->testId);
        $this->testRefund->setAmount($this->testAmount);
        $this->testRefund->setCurrency($this->testCurrency);
        $this->testRefund->setOriginalTransactionCode($this->testOriginalTransactionCode);
        $this->testRefund->setCretaed($this->testCreateDate);
    }
    
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testId() {        
        $this->assertTrue($this->testRefund->getId() == $this->testId);
    }
    
    public function testAmount() {
        $this->assertTrue($this->testRefund->getAmount() == $this->testAmount);
    }
    
    public function testCurrency() {
        $this->assertTrue($this->testRefund->getCurrency() == $this->testCurrency);
    }
    
    public function testOriginalTransactionCode() {
        $this->assertTrue($this->testRefund->getOriginalTransactionCode() == $this->testOriginalTransactionCode);
    } 
    
    public function testCreated() {
        $this->assertTrue($this->testRefund->getCreated() == $this->testCreateDate);
    }
    
    public function testReason(){
        $this->testRefund->setReason(ReturnReason::CHARGEBACK_AVOIDANCE);
        $this->assertTrue($this->testRefund->getReason() == "CHARGEBACK_AVOIDANCE");
        
        $this->testRefund->setReason(ReturnReason::END_USER_ERROR);
        $this->assertTrue($this->testRefund->getReason() == "END_USER_ERROR");
        
        $this->testRefund->setReason(ReturnReason::FRAUD);
        $this->assertTrue($this->testRefund->getReason() == "FRAUD");
        
        $this->testRefund->setReason(ReturnReason::INVALID_TRANSACTION);
        $this->assertTrue($this->testRefund->getReason() == "INVALID_TRANSACTION");
        
        $this->testRefund->setReason(ReturnReason::UNSATISFIED_CUSTOMER);
        $this->assertTrue($this->testRefund->getReason() == "UNSATISFIED_CUSTOMER");
    } 
    
}