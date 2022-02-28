<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

return (new Config)
    ->setFinder($finder)
    ->setRiskyAllowed(true)
    ->setRules([
        "@PhpCsFixer" => true,
        "@PhpCsFixer:risky" => true,
    ]);
