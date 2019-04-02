<?php

namespace AlternativePayments;

class Transaction
{
    const RESOURCE = 'transactions';
    
    public static function getAll()
    {
        $service = new Request;
        return $service->getAll(self::RESOURCE);
    }

    public static function get($code)
    {
        $service = new Request;
        return $service->get(self::RESOURCE, $code);
    }

    public static function post($data)
    {
        $service = new Request;
        return $service->post(self::RESOURCE, $data);
    }
}
