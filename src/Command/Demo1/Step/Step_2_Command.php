<?php

namespace App\Command\Demo1\Step;

use Inwebo\QueueCommand\QueueCommand;

class Step_2_Command extends QueueCommand
{
    protected static $defaultName = 'demo:1:step_2';
}