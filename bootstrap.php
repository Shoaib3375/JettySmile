<?php

require_once __DIR__ . '/vendor/autoload.php';

use MyLife\Services\Jetty;

$jetty = new Jetty([
    'trust' => true,
    'loveLevel' => 100,
    'smile' => 'pure'
]);

echo $jetty->smile() . "\n";
echo "Loyalty Level: " . $jetty->getLoyaltyLevel() . "\n";
