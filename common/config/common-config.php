<?php
$common=[
    'env'=>'dev',
    'name'=>'Red Knot Framework',
    'defaults'=>[
        'router'=>['class'=>'rk\\core\\Router'],
        'controller'=>['class'=>'common\\controller\\SiteController'],
        'site404'=>['class'=>'common\\controller\\Site404Controller']
    ]
];