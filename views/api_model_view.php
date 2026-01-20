<section>
  <!-- <div> printar ut datan jag kan ta ut från weather api för easy access -->
    <?php
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    ?>    
</section>

    <!-- /weather-app
          ├── /src
          │   ├── api.php       // Logiken för att prata med WeatherAPI
          │   └── functions.php   // Hjälpfunktioner (t.ex. formatera datum)
          ├── /public
          │   ├── css/          // Dina stilmallar
          │   └── index.php     // Vyn som användaren ser
          ├── config.php        // Här sparar vi din API-nyckel (utanför publik åtkomst)
          └── .gitignore        // För att inte råka ladda upp din nyckel till GitHub  -->
