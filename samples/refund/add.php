<?php

use \AlternativePayments\Model\ReturnReason;

$obj = new \AlternativePayments\Model\Refund();
$obj->setReason(ReturnReason::UNSATISFIED_CUSTOMER);
$res = \AlternativePayments\Refund :: post($obj, "trn_1cfa454");

var_dump($res);
