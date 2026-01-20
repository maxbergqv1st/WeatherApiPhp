<?php
// src/api.php

function getWeatherData($city) {
    $apiKey = getenv('API_KEY');
    
    // Vi lägger till en enkel felhantering om API-nyckeln saknas
    if (!$apiKey) {
        return ['error' => 'API-nyckel saknas i .env'];
    }

    $apiUrl = "http://api.weatherapi.com/v1/current.json?key=$apiKey&q=" . urlencode($city);
    
    // Hämta data
    $response = @file_get_contents($apiUrl);
    
    if ($response === FALSE) {
        return ['error' => 'Kunde inte hämta data från WeatherAPI'];
    }

    return json_decode($response, true);
}