<?php

namespace Marcosh\Chocorest;

// set the parent dir as working directory
chdir(dirname(__DIR__));

include 'vendor/autoload.php';

$app = App::init()->run();
