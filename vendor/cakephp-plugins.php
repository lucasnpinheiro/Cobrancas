<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Bootstrap3' => $baseDir . '/vendor/holt59/cakephp3-bootstrap3-helpers/',
        'Search' => $baseDir . '/vendor/friendsofcake/search/',
        'Utils' => $baseDir . '/vendor/cakemanager/cakephp-utils/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',

    ]
];
