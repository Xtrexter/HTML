<?php


function convertCurrency($amount, $fromCurrency, $toCurrency) {


    $exchangeRates = [

        'USD' => 1.0, 

        'EUR' => 37,44,

        'GBP' => 0.75,

        'TRY' => 8.5,

    ];

    if (!array_key_exists($fromCurrency, $exchangeRates) || !array_key_exists($toCurrency, $exchangeRates)) {

        throw new Exception("Geçersiz para birimi.");

    }


   

    $amountInUSD = $amount / $exchangeRates[$fromCurrency]; 

    $convertedAmount = $amountInUSD * $exchangeRates[$toCurrency]; 


    return $convertedAmount;

}




try {

    $amount = 100; 

    $fromCurrency = 'EUR'; 

    $toCurrency = 'TRY'; 


    $convertedAmount = convertCurrency($amount, $fromCurrency, $toCurrency);

    echo "$amount $fromCurrency = $convertedAmount $toCurrency";

} catch (Exception $e) {

    echo 'Hata: ' . $e->getMessage();

}


?>