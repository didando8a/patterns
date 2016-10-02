<?php

namespace Didando8a\Patterns\Interfaces;

interface Command
{
    public function execute();
    public function undo();
}
