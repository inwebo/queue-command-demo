<?php

namespace App\Command\Demo1\Step;

use Inwebo\QueueCommand\QueueCommand;

class StepCommand extends QueueCommand
{
    protected static $defaultName = 'demo:1:step_1';
}