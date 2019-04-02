<?php

$obj = new \AlternativePayments\Model\Void();
$obj->setReason(\AlternativePayments\Model\ReturnReason::UNSATISFIED_CUSTOMER);
$res = \AlternativePayments\Void :: post($obj, "trn_nonprofitpen1");

var_dump($res);
