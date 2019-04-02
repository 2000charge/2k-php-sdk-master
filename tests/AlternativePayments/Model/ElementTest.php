<?php

namespace Tests;

use AlternativePayments\Model\Element;
use PHPUnit_Framework_TestCase;
use DateTime;

class ElementWrapper extends Element {
    
}

class ElementTest extends PHPUnit_Framework_TestCase {
    
    private $testEl;
    
    private $testId;
    private $testDate;
    
    
    private function SetTestValues(){
        $this->testId = "testcodevalue12345";
        $this->testDate = new DateTime('2024-01-01 00:00:00');
    }
    
    private function InitTests(){
        $this->testEl = new \Tests\ElementWrapper();
        $this->testEl->setId($this->testId);
        $this->testEl->setCreated($this->testDate);
        $this->testEl->setUpdated($this->testDate);        
    }
    
    public function SetUp(){        
        $this->SetTestValues();  
        $this->InitTests();
    }
    
    public function testCode() {        
        $this->assertTrue($this->testEl->getId() == $this->testId);
    }
    
    public function testCreated(){
        $this->assertTrue($this->testEl->getCreated() == $this->testDate);
    }
    
    public function testUpdated(){
        $this->assertTrue($this->testEl->getUpdated() == $this->testDate);
    }    
    
}
