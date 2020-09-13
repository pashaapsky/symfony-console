<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class sayHelloCommand extends Command
{
    protected static $defaultName = 'app:say-hello';

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('First command.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command print hello to $name')
            ->addArgument('name', InputArgument::REQUIRED, 'Hello to?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello ' . $input->getArgument('name'));

        return Command::SUCCESS;
    }
}