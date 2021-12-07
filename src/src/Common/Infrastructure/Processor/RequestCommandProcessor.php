<?php

namespace App\Common\Infrastructure\Processor;

use App\Common\Application\Command\CommandInterface;
use App\Common\Application\Exception\CommandHandlerNotFound;

final class RequestCommandProcessor implements CommandProcessorInterface
{
    /**
     * @var array
     */
    private array $handlers = [];

    /**
     * @param string $command
     * @param callable $handler
     * @return void
     */
    public function register(string $command, callable $handler): void
    {
        $this->handlers[$command] = $handler;
    }

    /**
     * @param CommandInterface $command
     * @return void
     * @throws CommandHandlerNotFound
     */
    public function handle(CommandInterface $command): void
    {
        $commandClass = \get_class($command);
        if (!empty($this->handlers[$commandClass]) && is_callable($this->handlers[$commandClass])) {
            call_user_func($this->handlers[$commandClass], $command);
        } else {
            throw new CommandHandlerNotFound();
        }
    }
}