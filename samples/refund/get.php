<?php

$res = \AlternativePayments\Refund :: get("trn_d70bcef", "trn_nonprofitpen1"); //class name, refund transaction id, parent transaction id

var_dump($res);
