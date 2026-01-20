<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  ?>

  <?php
  $apiKey = "";
  $city = "Halmstad";
  $url = "http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city";

  // Hämta data som en JSON-sträng
  $response = file_get_contents($url);

  // Omvandla JSON-strängen till en PHP-array
  $data = json_decode($response, true);

  // Visa en specifik del av datan, t.ex. temperaturen
  echo "Just nu är det " . $data['current']['temp_c'] . " grader i " . $data['location']['name'];
  ?>
  
</body>
</html>