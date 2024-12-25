<?php

define("WEBSITE_NAME", "laravel Website");


echo "<h1>PHP Info:</h1>";
phpinfo();


echo "<h1>Server Details:</h1>";
echo "Website Name: " . WEBSITE_NAME . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server Address: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>";
echo "Filename: " . basename($_SERVER['SCRIPT_FILENAME']) . "<br>";
echo "File Path: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";


$brotherAge = 10;

echo "<h1>Brother's Status:</h1>";

switch (true) {
    case ($brotherAge < 5):
        echo "Stay at home";
        break;
    case ($brotherAge == 5):
        echo "Go to Kindergarden";
        break;
    case ($brotherAge >= 6 && $brotherAge <= 12):
        echo "Go to grade: " . ($brotherAge - 5);
        break;
    default:
        echo "No status available.";
        break;
}
?>
