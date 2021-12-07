<?php

namespace App\Common\Infrastructure\Processor;

use App\Common\Application\Command\CommandInterface;

interface CommandProcessorInterface
{
    /**
     * @param CommandInterface $command
     * @return void
     */
    public function handle(CommandInterface $command): void;
}