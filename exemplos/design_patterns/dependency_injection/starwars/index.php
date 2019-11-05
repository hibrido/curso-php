<?php

// Normalmente utilizando composer simplesmente requerimos o autoload.php
require __DIR__ . '/LightsaberInterface.php';
require __DIR__ . '/RedLightsaber.php';
require __DIR__ . '/BlueLightsaber.php';
require __DIR__ . '/Jedi.php';

$redLightsaber = new RedLightsaber;
$blueLightsaber = new BlueLightsaber;

$redJedi = new Jedi($redLightsaber);
echo $redJedi->attack();

echo PHP_EOL;

$blueJedi = new Jedi($blueLightsaber);
echo $blueJedi->attack();