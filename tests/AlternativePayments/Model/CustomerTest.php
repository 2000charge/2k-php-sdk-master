<?php

namespace Tests;

use AlternativePayments\Model\Customer;
use PHPUnit_Framework_TestCase;
use DateTime;

class CustomerTest extends PHPUnit_Framework_TestCase {
    
    private $testCustomer;    
    
    private $testId;
    private $testFirstName;
    private $testLastName;
    private $testEmail;
    private $testAddress;
    private $testCity;
    private $testZip;
    private $testCountry;
    private $testState;
    private $testPhone;    
    private $testCreateDate;
    private $testUpdateDate;
    
    private function SetTestValues(){        
        $this->testId = "testcodevalue12345";        
        $this->testFirstName = "Test First Name";
        $this->testLastName = "Test Last Name";
        $this->testEmail = "test@email.com";
        $this->testAddress = "Some Test Address";
        $this->testCity = "Test City";
        $this->testZip = "12345";
        $this->testCountry = "Test Country";
        $this->testState = "Test State";
        $this->testPhone = "1234567890";
        $this->testCreateDate = new DateTime('2024-01-01 00:00:00');
        $this->testUpdateDate = new DateTime('2024-01-01 00:00:00');
    }
    
    private function InitTests(){        
        $this->testCustomer = new Customer();
        $this->testCustomer->setId($this->testId);        
        $this->testCustomer->setFirstName($this->testFirstName);
        $this->testCustomer->setLastName($this->testLastName);
        $this->testCustomer->setEmail($this->testEmail);
        $this->testCustomer->setAddress($this->testAddress);
        $this->testCustomer->setCity($this->testCity);
        $this->testCustomer->setZip($this->testZip);
        $this->testCustomer->setCountry($this->testCountry);
        $this->testCustomer->setState($this->testState);
        $this->testCustomer->setPhone($this->testPhone);
        $this->testCustomer->setCreated($this->testCreateDate);
        $this->testCustomer->setUpdated($this->testUpdateDate);
    }
        
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testId() {        
        $this->assertTrue($this->testCustomer->getId() == $this->testId);
    }
    
    public function testFirstName() {
        $this->assertTrue($this->testCustomer->getFirstName() == $this->testFirstName);
    }
    
    public function testLastName() {
        $this->assertTrue($this->testCustomer->getLastName() ==  $this->testLastName);
    }
    
    public function testEmail() {
        $this->assertTrue($this->testCustomer->getEmail() == $this->testEmail);
    }
    
    public function testAddress() {
        $this->assertTrue($this->testCustomer->getAddress() == $this->testAddress);
    }
    
    public function testCity() {
        $this->assertTrue($this->testCustomer->getCity() == $this->testCity );
    }
    
    public function testZip() {
        $this->assertTrue($this->testCustomer->getZip() == $this->testZip);
    }
    
    public function testCountry() {
        $this->assertTrue($this->testCustomer->getCountry() == $this->testCountry);
    }
    
    public function setState() {
        $this->assertTrue($this->testCustomer->getState() == $this->testState);
    }
    
    public function setPhone() {
        $this->assertTrue($this->testCustomer->getPhone() == $this->testPhone);
    }
    
    public function testCreated() {
        $this->assertTrue($this->testCustomer->getCreated() == $this->testCreateDate);
    }
    
    public function testUpdated() {
        $this->assertTrue($this->testCustomer->getUpdated() == $this->testUpdateDate);
    }
}
