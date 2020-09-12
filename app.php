<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use App\Command\printStrCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new printStrCommand());

$application->run();