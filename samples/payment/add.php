<?php

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("DE7170130700813633XXXX");
$res = \AlternativePayments\Request :: post("Payment", $payment);

var_dump($res);
