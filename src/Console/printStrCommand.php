<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class printStrCommand extends Command
{
    protected static $defaultName = 'app:print-str';

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Print string N times.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command print string N times')
        ;
    }

    public function __construct(String $s, int $times = 2)
    {
        parent::__construct();

        for ($i = 0; $i < $times; $i++) {
            echo $s . PHP_EOL;
        }
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        return Command::SUCCESS;
    }
}