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
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        'phpdoc_summary' => false,
        'header_comment' => [
            'header' => <<<EOT
      _____       _           _
     / ____|     | |         | |
    | (___  _ __ | | ___   __| | ___
     \___ \| '_ \| |/ _ \ / _` |/ _ \
     ____) | |_) | | (_) | (_| |  __/
    |_____/| .__/|_|\___/ \__,_|\___|
           | |
           |_|

    Your next UX virion. <3 DiamondStrider1
    EOT,
            'location' => 'after_open',
        ]
    ]);
