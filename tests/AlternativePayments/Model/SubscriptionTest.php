<?php

namespace Tests;

error_reporting(E_ALL ^ E_STRICT);

use AlternativePayments\Model\Subscription;
use PHPUnit_Framework_TestCase;
use DateTime;

class SubscriptionTest extends PHPUnit_Framework_TestCase {
    
    private $testSubscription;
    
    private $testId;    
    private $planId;
    private $customerId;
    private $paymentId;   
    private $testCreated;
    private $testUpdated;
        
    private function SetTestValues(){
        $this->testId = "testcodevalue12345";        
        $this->planId = "testplanid12345";
        $this->customerId = "testcustomerid12345";
        $this->paymentId = "testpaymentid12345";
        $this->testCreated = new DateTime('2014-01-01 00:00:00');
        $this->testUpdated = new DateTime('2014-01-01 00:00:00');      
    }
    
    private function InitTests(){        
        $this->testSubscription = new Subscription();
        $this->testSubscription->setId($this->testId);
        $this->testSubscription->setCreated($this->testCreated);
        $this->testSubscription->setUpdated($this->testUpdated);        
        $this->testSubscription->setPlanId($this->planId);
        $this->testSubscription->setCustomerId($this->customerId);
        $this->testSubscription->setPaymentId($this->paymentId);
    }
    
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testCode() {        
        $this->assertTrue($this->testSubscription->getId() == $this->testId);
    }
    
    public function testCreatedDate() {
            $this->assertTrue($this->testSubscription->getCreated() == $this->testCreated);
    }
    
    public function testUpdatedDate() {
        $this->assertTrue($this->testSubscription->getUpdated() == $this->testUpdated);
    }
    
    public function testPlanId(){
        $this->assertTrue($this->testSubscription->getPlanId() == $this->planId);
    }
    
    public function testCustomerId(){
        $this->assertTrue($this->testSubscription->getCustomerId() == $this->customerId);
    }
    
    public function testPaymentId(){
        $this->assertTrue($this->testSubscription->getPaymentId() == $this->paymentId);
    }
}