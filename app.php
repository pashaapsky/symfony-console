<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use App\Command\questCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new questCommand());

$application->run();