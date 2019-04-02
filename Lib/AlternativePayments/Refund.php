<?php

namespace AlternativePayments;

class Refund
{
    const RESOURCE = 'transactions';
    
    const ACTION = 'refunds';
    
    public static function getAll($parentCode)
    {
        $newCtrl = self::RESOURCE."/".$parentCode."/".self::ACTION;
        $service = new Request;
        return $service->getAll($newCtrl);
    }

    public static function get($code)
    {
        $service = new Request;
        return $service->get(self::RESOURCE, $code);
    }

    public static function post($data, $parentCode)
    {
        $newCtrl = self::RESOURCE."/".$parentCode."/".self::ACTION;
        $service = new Request;
        return $service->post($newCtrl, $data);
    }
}
