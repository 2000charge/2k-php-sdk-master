<?php

namespace AlternativePayments\Helper;

class Helper
{
    /*
     * @return string - ip address
     */
    public static function getClientIp()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];

        } else {
             $ipaddress = 'UNKNOWN';
        }
        if ($ipaddress == ':::1' || $ipaddress == '::1' || $ipaddress == ':1' || $ipaddress == ':1') {
            $ipaddress = '127.0.0.1';
        }
        return $ipaddress;
    }
}
