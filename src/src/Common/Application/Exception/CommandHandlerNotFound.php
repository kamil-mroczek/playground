<?php

namespace App\Common\Application\Exception;

class CommandHandlerNotFound extends \Exception
{
    protected $message = 'Command handler not found';
}