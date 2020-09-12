<?php
require __DIR__.'/vendor/autoload.php';

use App\Command\sayHelloCommand;
use App\Command\printStrCommand;
use App\Command\questCommand;

use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands
$application->add(new questCommand());
$application->add(new sayHelloCommand());
$application->add(new printStrCommand());

$application->run();