<?php

namespace Tests;

use AlternativePayments\Model\Plan;
use PHPUnit_Framework_TestCase;

class PlanTest extends PHPUnit_Framework_TestCase {
    
    private $testPlan;
    
    private $testId;
    private $testMerchantIdentification;
    private $testAmount;
    private $testCurrency;
    private $testPeriod;
    private $testInterval;   
    private $testRecurTimes;   
    private $testTrialDays;   
    private $testDiscountAmount;   
    private $testDiscountRecurTimes;
        
    public function SetTestValues(){      
        $this->testId = "testcodevalue12345";
        $this->testMerchantIdentification = "Some Merchant Identification";
        $this->testAmount = "3000";
        $this->testCurrency = "$";
        $this->testPeriod = "100";
        $this->testInterval = "123";   
        $this->testRecurTimes = "1";   
        $this->testTrialDays = "30";   
        $this->testDiscountAmount = "1000";   
        $this->testDiscountRecurTimes = "3";
    }
    
    private function InitTests(){
        $this->testPlan = new Plan();
        $this->testPlan->setId($this->testId);
        $this->testPlan->setMerchantIdentification($this->testMerchantIdentification);
        $this->testPlan->setAmount($this->testAmount);
        $this->testPlan->setCurrency($this->testCurrency);
        $this->testPlan->setPeriod($this->testPeriod);
        $this->testPlan->setInterval($this->testInterval);   
        $this->testPlan->setRecurTimes($this->testRecurTimes);   
        $this->testPlan->setTrialDays($this->testTrialDays);   
        $this->testPlan->setDiscountAmount($this->testDiscountAmount);   
        $this->testPlan->setDiscountRecurTimes($this->testDiscountRecurTimes);
    }


    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testId() {        
        $this->assertTrue($this->testPlan->getId() == $this->testId);
    }
    
    public function testMerchantIdentification() {
        $this->assertTrue($this->testPlan->getMerchantIdentification() == $this->testMerchantIdentification);
    }
    
    public function testAmount() {
        $this->assertTrue($this->testPlan->getAmount() == $this->testAmount);
    }
    
    public function testCurrency() {
        $this->assertTrue($this->testPlan->getCurrency() == $this->testCurrency);
    }
    
    public function testPeriod() {
        $this->assertTrue($this->testPlan->getPeriod() == $this->testPeriod);
    }
    
    public function testInterval() {
        $this->assertTrue($this->testPlan->getInterval() == $this->testInterval);
    }
    
    public function testRecurTimes() {
        $this->assertTrue($this->testPlan->getRecurTimes() == $this->testRecurTimes);
    }
    
    public function testTrialDays() {
        $this->assertTrue($this->testPlan->getTrialDays() == $this->testTrialDays);
    }
    
    public function testDiscountAmount() {
        $this->assertTrue($this->testPlan->getDiscountAmount() == $this->testDiscountAmount);
    }
    
    public function testDiscountRecurTimes() {
        $this->assertTrue($this->testPlan->getDiscountRecurTimes() == $this->testDiscountRecurTimes);
    }
}