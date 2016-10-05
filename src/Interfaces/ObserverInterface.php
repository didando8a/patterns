<?php

namespace Didando8a\Patterns\Interfaces;

use Didando8a\Patterns\Abstracts\AbstractObservable;

interface ObserverInterface
{
    public function update(AbstractObservable $observable) : self;
}
