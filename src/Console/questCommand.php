<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;
use Symfony\Component\Console\Question\ChoiceQuestion;

class questCommand extends Command
{
    protected static $defaultName = 'app:quest';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Ask user info then print it out')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('Ask user info and print it')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $name = $helper->ask($input, $output, new Question('Enter your name: '));

        $age = $helper->ask($input, $output, new Question('Enter your age: '));

        $gender = $helper->ask($input, $output, new ChoiceQuestion(
            'Your gender: ',
            array('m', 'w'),
            0
        ));

        $output->write('Hello, ' . $name . ' Your age ' . $age . ' Your gender: ' . $gender);

        return Command::SUCCESS;
    }

}