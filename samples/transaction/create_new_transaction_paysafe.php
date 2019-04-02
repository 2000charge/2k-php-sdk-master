<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setFirstName("John");
$customer->setLastName("Doe");
$customer->setEmail("john@doe.com");
$customer->setCountry("DE");


$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("PaySafe");
$payment->setHolder("John Doe");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(1000);
$transaction->setCurrency("EUR");
$transaction->setIPAddress("127.0.0.1");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://2000charge.com/message/success.html");
$redirectUrls->setCancelUrl("http://2000charge.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
