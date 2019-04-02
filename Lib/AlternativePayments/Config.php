<?php

namespace AlternativePayments;

class Config
{
    private static $apiKey;
    
    public static function getApiKey()
    {
        return self::$apiKey;
    }
    
    public static function setApiKey($apiKey)
    {
        self::$apiKey = $apiKey;
    }
    
    private static $apiUrl = 'https://api.2000charge.com/api';
    
    public static function getApiUrl()
    {
        return self::$apiUrl;
    }

    public static function setApiUrl($apiUrl)
    {
        self::$apiUrl = $apiUrl;
    }
}
