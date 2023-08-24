<?php
require '../vendor/autoload.php';

//Sorting package with command: composer require --sort-packages symfony/dotenv
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/test.env');

echo "<pre>";
dump($_ENV);
echo "</pre>";

