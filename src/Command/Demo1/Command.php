<?php

namespace App\Command\Demo1;

use App\Command\Demo1\Step\Step_1_Command;
use App\Command\Demo1\Step\Step_2_Command;
use Inwebo\QueueCommand\QueueIteratorCommand;

class Command extends QueueIteratorCommand
{
    protected static $defaultName        = 'demo:01';
    protected static $defaultDescription = 'How to use a QueueCommand ?';

    public function configureQueue(): void
    {
        $this->enqueue(Step_1_Command::getDefaultName());
        $this->enqueue(Step_2_Command::getDefaultName());

        parent::configureQueue();
    }
}