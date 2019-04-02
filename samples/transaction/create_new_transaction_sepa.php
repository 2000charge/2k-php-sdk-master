<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setFirstName("John");
$customer->setLastName("Doe");
$customer->setEmail("john@doe.com");
$customer->setCountry("DE");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("DEST1000200030004000500");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setDescription("test sepa php sdk");
$transaction->setMerchantPassThruData("test_sepa_123");
$transaction->setMerchantTransactionId("tr1123321");
$transaction->setIPAddress("127.0.0.1");

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
