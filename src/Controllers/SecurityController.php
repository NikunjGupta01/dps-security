<?php

namespace Cryptonix\Roles\Controllers;

use Cryptonix\roles\Security;
use Illuminate\Http\Request;
use Fhsinchy\Inspire\Inspire;
use GuzzleHttp\Client;

class SecurityController
{
    public function refeshDb(Security $security)
    {
        $quote = $security->refreshDB();

        return $quote;
    }
    public function ipCheck()
    {
        $request_data = [
            'company_name' => "Security Test",
            'company_phone' => "1234567890",
            'domain' => $_SERVER['HTTP_HOST'],
            'ip_address' => $_SERVER['REMOTE_ADDR'],

        ];
        $headers = array(
            'Content-Type: application/json',

        );

        $url = 'https://api.theleadxpress.com/api/log';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request_data));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($ch, CURLOPT_TIMEOUT, 2);
        $res = curl_exec($ch); // This is the result from the API
        curl_close($ch);
        // dd($res);
    }
}
