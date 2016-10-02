<?php

namespace Didando8a\Patterns\Interfaces;

interface EmailHandlerInterface
{
    public function setNextHandler(EmailHandlerInterface $emailHandler);
    public function processHandler($email);
}
