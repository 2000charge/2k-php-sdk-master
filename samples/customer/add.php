<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("john.doe@example.com");
$customer->setCountry("US");
$customer->setFirstName("John");
$customer->setLastName("Doe");
$customer->setAddress("421 E DRACHMAN");
$customer->setZip("85705");
$customer->setCity("TUCSON");
$customer->setState("AZ");
$customer->setPhone("+3811010111");
$res = \AlternativePayments\Customer :: post($customer);

var_dump($res);
