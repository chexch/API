<?php

    $api_url = 'https://chexch.com/api'; // The URL for API requests
    $api_key = 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'; // Your API key on https://chexch.com/api


    // All available for e-currency exchange
    
    $currencies = RequestAPI($api_url, array(
        'type' => 'currencies', // API method
        'key' => $api_key,
        'format' => 'json',     // Format receive data (xml or json). If not specified, the default json
        'lang' => 'en'          // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
    ));
    
    print($currencies);
    
    
    // List of currencies that you can obtain when you exchange any currency
    
    $available_currencies_from = RequestAPI($api_url, array(
        'type' => 'available_currencies', // API method
        'from' => 'PRUSD',                // The currency you give
        'key' => $api_key,
        'format' => 'xml',                // Format receive data (xml or json). If not specified, the default json
        'lang' => 'en'                    // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
    ));
    
    print($available_currencies_from);
    
    
    // List of currencies that can be given to obtain any currency
    
    $available_currencies_to = RequestAPI($api_url, array(
        'type' => 'available_currencies', // API method
        'to' => 'OKRUB',                  // The currency you will receive
        'key' => $api_key,
        'format' => 'json',               // Format receive data (xml or json). If not specified, the default json
        'lang' => 'ru'                    // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
    ));
    
    print($available_currencies_to);
    
    
    // All exchange rates (e.g. PRUSD at OKRUB)
    
    $rates = RequestAPI($api_url, array(
        'type' => 'rates', // API method
        'from' => 'PRUSD', // The currency you give
        'to' => 'OKRUB',   // The currency you will receive
        'key' => $api_key,
        'format' => 'xml', // Format receive data (xml or json). If not specified, the default json
        'lang' => 'ru'     // Language retrieve data, "ru" - Russian, "en" - English, "ch" - Chinese
    ));
    
    print($rates);

    
    function RequestAPI($api_url, $request){

        $useragent = 'Mozilla/5.0 (Windows NT 6.1; rv:12.0) Gecko/20100101 Firefox/12.0';
        $data = array();
        
        foreach ($request as $key => $value)
        {
            $data[] = urlencode($key) . '=' . urlencode($value);
        }
        
        $data = implode('&', $data);
        
        $connect = curl_init();
        curl_setopt($connect, CURLOPT_URL, $api_url);
        curl_setopt($connect, CURLOPT_HEADER, 0);
        curl_setopt($connect, CURLOPT_POST, true);
        curl_setopt($connect, CURLOPT_POSTFIELDS, $data);
        curl_setopt($connect, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($connect, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($connect, CURLOPT_USERAGENT, $useragent);
        curl_setopt($connect, CURLOPT_RETURNTRANSFER, 1);
        
        $response = curl_exec($connect);
        curl_close($connect);
        
        return $response;
    }
?>