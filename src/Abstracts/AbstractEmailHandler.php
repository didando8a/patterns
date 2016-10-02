<?php

namespace Didando8a\Patterns\Abstracts;

use Didando8a\Patterns\Entity\GeneralEnquiriesEmailHandler;
use Didando8a\Patterns\Entity\ManagerEmailHandler;
use Didando8a\Patterns\Entity\SalesEmailHandler;
use Didando8a\Patterns\Entity\ServiceEmailHandler;
use Didando8a\Patterns\Entity\SpamEmailHandler;
use Didando8a\Patterns\Interfaces\EmailHandlerInterface;

abstract class AbstractEmailHandler implements EmailHandlerInterface
{
    /** @var EmailHandlerInterface $nextHandler */
    private $nextHandler;

    public function setNextHandler(EmailHandlerInterface $emailHandler)
    {
        $this->nextHandler = $emailHandler;

        return $this;
    }

    public function processHandler($email)
    {
        $handleHere = false;
        $matchingWords = $this->matchingwords();

        if (count($matchingWords) === 0) {
            $handleHere = true;
        } else {
            foreach ($matchingWords as $word) {
                if (strpos($email, $word) !== false) {
                    $handleHere = true;

                    break;
                }
            }
        }

        if ($handleHere) {
            $result = $this->handleHere($email);
        } else {
            $result = $this->nextHandler->processHandler($email);
        }

        return $result;
    }

    public static function handle($email)
    {
        $spam = new SpamEmailHandler();
        $sales = new SalesEmailHandler();
        $service = new ServiceEmailHandler();
        $manager = new ManagerEmailHandler();
        $general = new GeneralEnquiriesEmailHandler();

        $spam->setNextHandler($sales);
        $sales->setNextHandler($service);
        $service->setNextHandler($manager);
        $manager->setNextHandler($general);

        return $spam->processHandler($email);
    }

    protected abstract function matchingWords();
    protected abstract function handleHere();
}
