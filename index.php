<?php

require __DIR__ . '/vendor/autoload.php';

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('phpInfo\\', __DIR__);

use phpInfo\printInfo;
echo printInfo::info();