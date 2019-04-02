<?php

$subscription = new \AlternativePayments\Model\Subscription();
$subscription->setPlanId("pln_e8e9e6b");
$subscription->setCustomerId("cus_bfa4a7b9d7e740ccb");
$subscription->setPaymentId("pay_5aca3bf14a8e4b728");
$res = \AlternativePayments\Subscription :: post($subscription);

var_dump($res);
