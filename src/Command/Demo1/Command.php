<?php

namespace App\Command\Demo1;

use Inwebo\QueueCommand\QueueIteratorCommand;

class Command extends QueueIteratorCommand
{
    protected static $defaultName = 'demo:1';
}