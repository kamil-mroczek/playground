<?php

namespace App\CurrencyExchange\Application\Handler;

use App\Common\Application\Command\CommandInterface;
use App\Common\Application\Handler\AbstractHandler;
use App\Common\Application\Handler\CommandHandlerInterface;

class GetQuote extends AbstractHandler implements CommandHandlerInterface
{

    public function __invoke(CommandInterface $command)
    {
        // TODO: Implement __invoke() method.
    }
}