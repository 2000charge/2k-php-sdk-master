<?php

$plan = new \AlternativePayments\Model\Plan();
$plan->setMerchantIdentification("VIP");
$plan->setInterval(5);
$plan->setPeriod("Day");
$plan->setAmount(445);
$plan->setCurrency("EUR");
$plan->setName("Test plan");
$plan->setDescription("Test Plan");
$res = \AlternativePayments\Plan :: post($plan);

var_dump($res);