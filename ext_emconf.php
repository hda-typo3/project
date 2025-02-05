<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Design Projects',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Michael Lang',
    'author_email' => 'michael.lang@h-da.de',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '12.0.03',
    'autoload' => [
        'psr-4' => [
            'Hda\\Project\\' => 'Classes',
        ],
    ],
    'constraints' => [
        'depends' => [
            'typo3' => '11.4'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
