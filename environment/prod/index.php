<?php
require_once 'config\prod-config.php';
require_once '..\..\common\config\common-config.php';
require_once '..\..\..\vendor\rk\autoloader.php';
$config = array_merge($common,$environment);
$app = new rk\App($config);
$app->start();