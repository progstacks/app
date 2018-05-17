<?php
require_once 'config\dev-config.php';
require_once '..\..\common\config\common-config.php';

$config = array_merge($common,$environment);
$app = new rk\App($config);