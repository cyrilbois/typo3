<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 CMS Install Tool',
    'description' => 'The Install Tool is used for installation, upgrade, system administration and setup tasks.',
    'category' => 'module',
    'state' => 'stable',
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'author_company' => '',
    'version' => '12.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.3.0',
            'extbase' => '12.3.0',
            'fluid' => '12.3.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
