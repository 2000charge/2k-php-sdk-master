<?php

namespace AlternativePayments;

class Void
{
    const RESOURCE = 'transactions';
    
    const ACTION = 'voids';
    
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
