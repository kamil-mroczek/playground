<?php

namespace App\Common\Application\Handler;

use App\Common\Application\Command\CommandInterface;

interface CommandHandlerInterface
{
    public function __invoke(CommandInterface $command);
}