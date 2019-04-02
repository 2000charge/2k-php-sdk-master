<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("john.doe@example.com");
$customer->setCountry("CZ");
$customer->setFirstName("John");
$customer->setLastName("Doe");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("TrustPay");
$payment->setHolder("John Doe");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(3500);
$transaction->setCurrency("EUR");
$transaction->setIPAddress("127.0.0.1");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://2000charge.com/message/success.html");
$redirectUrls->setCancelUrl("http://2000charge.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);