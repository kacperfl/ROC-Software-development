<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://coronavirus.m.pipedream.net/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);

// Controleer of er een fout is opgetreden bij het uitvoeren van de cURL-aanvraag
if ($response === false) {
    die('Er is een fout opgetreden: ' . curl_error($curl));
}

// Decodeer de JSON-respons naar een PHP-array
$data = json_decode($response, true);

// Controleer of de JSON-decodering is gelukt
if ($data === null) {
    die('Fout bij het decoderen van JSON: ' . json_last_error_msg());
}

if (isset($data['countries'])) {
    $landenGevallen = $data['countries'];

    $desiredCountry = 'Netherlands';

    if (isset($landenGevallen[$desiredCountry])) {
        $aantalGevallenLand = $landenGevallen[$desiredCountry];
        echo 'Aantal gevallen in ' . $desiredCountry . ': ' . $aantalGevallenLand;
    } else {
        echo 'Geen gegevens beschikbaar voor het opgegeven land.';
    }
} else {
    echo 'Geen gegevens over landen beschikbaar.';
}

?>
