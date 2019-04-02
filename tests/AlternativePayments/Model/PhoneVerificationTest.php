<?php

namespace Tests;

use AlternativePayments\Model\PhoneVerification;
use PHPUnit_Framework_TestCase;
use DateTime;

class PhoneVerificationTest extends PHPUnit_Framework_TestCase {
    
    private $testPhoneVerification;
    
    private $testId;
    private $testPin;
    private $testToken;
    private $testCreateDate;
    private $testUpdateDate;  
    
    private function SetTestValues(){
        $this->testId = "testcodevalue12345";
        $this->testPin = "123";
        $this->testToken = "sometoken1234567890";
        $this->testCreateDate = new DateTime('2014-01-01 00:00:00');
        $this->testUpdateDate = new DateTime('2014-01-01 00:00:00');
    }
    
    private function InitTests(){
        $this->testPhoneVerification = new PhoneVerification();
        $this->testPhoneVerification->setId($this->testId);
        $this->testPhoneVerification->setPin($this->testPin);
        $this->testPhoneVerification->setToken($this->testToken);
        $this->testPhoneVerification->setCreated($this->testCreateDate);    
        $this->testPhoneVerification->setUpdated($this->testUpdateDate);    
    }
    
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testId() {        
        $this->assertTrue($this->testPhoneVerification->getId() == $this->testId);
    }
    
    public function testPhone() {
        $this->assertTrue($this->testPhoneVerification->getPin() == $this->testPin);
    }
    
    public function testToken() {
        $this->assertTrue($this->testPhoneVerification->getToken() == $this->testToken);
    }
    
    public function testCreated() {
        $this->assertTrue($this->testPhoneVerification->getCreated() == $this->testCreateDate);
    }
    
    public function testUpdated() {
        $this->assertTrue($this->testPhoneVerification->getUpdated() == $this->testUpdateDate);
    }  
}
