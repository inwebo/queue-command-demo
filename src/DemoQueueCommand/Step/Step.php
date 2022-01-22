<?php

namespace App\DemoQueueCommand\Step;

use Inwebo\QueueCommand\QueueCommand;

class Step extends QueueCommand
{
    protected static $defaultName = 'demo:queue:step_1';
}