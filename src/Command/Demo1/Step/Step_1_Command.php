<?php

namespace App\Command\Demo1\Step;

use Inwebo\QueueCommand\QueueCommand;

class Step_1_Command extends QueueCommand
{
    protected static $defaultName = 'demo:1:step_1';
}