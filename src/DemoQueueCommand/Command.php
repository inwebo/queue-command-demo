<?php

namespace App\DemoQueueCommand;

use Inwebo\QueueCommand\QueueIteratorCommand;

class Command extends QueueIteratorCommand
{
    protected static $defaultName = 'demo:queue';
}