<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weather Dev</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
    <body>
        <?php
// index.php

// 1. LADDA LOGIK
require 'env_loader.php';
require 'src/api.php'; 

// 2. HÄMTA DATA
$city = $_GET['city'] ?? 'Halmstad';
$data = getWeatherData($city); 

$favoriteCities = ['Halmstad', 'Budapest', 'Miami'];
$multiData = [];
foreach ($favoriteCities as $fav) {
    $multiData[] = getWeatherData($fav);
}

$page = $_GET['page'] ?? 'home';

// 3. RENDER (Här ritar vi ut sidan)
// header.php innehåller <!DOCTYPE>, <html>, <head> och <body>
include 'views/layout/header.php'; 

echo "<main>";
    switch($page) {
        case 'api_model':
            include 'views/api_model_view.php';
            break;
        case 'home':
        default:
            include 'views/home_view.php';
            break;
    }
echo "</main>";

// footer.php innehåller </body> och </html>
include 'views/layout/footer.php'; 
?>
    </body>
</html>


