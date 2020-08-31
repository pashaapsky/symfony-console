<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use App\Command\sayHelloCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new sayHelloCommand('me'));

$application->run();