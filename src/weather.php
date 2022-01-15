<?php
    require '../vendor/autoload.php';

    use GuzzleHttp\Client;
    use Dotenv\Dotenv;

    $client = new Client(['timeout'  => 2.0,]);

    $dotenv = Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->safeLoad();

    $response = $client->request('GET', 'http://ip-api.com/json/');
    $city = json_decode($response->getBody(), true);

    $base_uri = 'api.openweathermap.org/data/2.5/weather';
    $param = [
        'q' => $city['city'],
        'appid' => $_ENV['weatherToken'],
        'units' => 'metric'
    ];

    $response = $client->request('GET', $base_uri, ['query' => $param]);
    $weatherData = json_decode($response->getBody(), true);
?>