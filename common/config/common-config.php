<?php
$common = [
    'env' => 'dev',
    'app_dir' => 'app',
    'name' => 'Red Knot Framework',
    'defaults' => [
        'router' => [
            'class' => 'Router',
            'path' => 'rk\\core\\',
        ],
        'controller' => [
            'class' => 'SiteController',
            'path' => 'controller\\',
        ],
        'site404' => [
            'class' => 'Site404Controller',
            'path' => 'controller\\'],
    ],
];
