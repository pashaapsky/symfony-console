<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
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
            ->setHelp('This command print $string N $times')
            ->addArgument('string', InputArgument::REQUIRED, 'string to print')
            ->addOption('times', '-t', InputOption::VALUE_REQUIRED, 'times to print $string', 2)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        for ($i = 0; $i < $input->getOption('times'); $i++) {
            $output->writeln($input->getArgument('string'));
        }

        return Command::SUCCESS;
    }
}