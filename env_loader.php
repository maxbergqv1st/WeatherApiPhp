<?php
// env_loader.php

function loadEnv($path) {
    if (!file_exists($path)) return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Dela upp raden vid '='
        list($name, $value) = explode('=', $line, 2);
        
        // Spara värdet så att getenv() kan hitta det
        putenv(trim($name) . "=" . trim($value));
    }
}

// Kör funktionen direkt
loadEnv(__DIR__ . '/.env');