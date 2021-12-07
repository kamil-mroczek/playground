<?php

namespace App\CurrencyExchange\Application\Handler;

use App\Common\Application\Command\CommandInterface;
use App\Common\Application\Handler\AbstractHandler;
use App\Common\Application\Handler\CommandHandlerInterface;
use App\CurrencyExchange\Infrastructure\Repository\Quotes;

class GetAllQuotes extends AbstractHandler implements CommandHandlerInterface
{

    public function __invoke(CommandInterface $command)
    {
        $repository = new Quotes();

        $result = $repository->getAllQuotes();
    }
}