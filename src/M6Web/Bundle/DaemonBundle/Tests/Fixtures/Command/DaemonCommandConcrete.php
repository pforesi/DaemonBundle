<?php

namespace M6Web\Bundle\DaemonBundle\Tests\Fixtures\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use M6Web\Bundle\DaemonBundle\Command\DaemonCommand;

class DaemonCommandConcrete extends DaemonCommand
{
    protected function configure(): void
    {
        $this
            ->setName('test:daemontest')
             ->setDescription('command for unit test');
    }

    protected function execute(InputInterface $input, OutputInterface $output): void
    {
    }
}
