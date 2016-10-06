<?php

namespace Didando8a\Patterns\Interfaces;

interface ClockSetupInterface
{
    public function previousValue() : self ;
    public function nextValue() : self ;
    public function selectValue() : self ;
    public function getInstructions();
    public function getSelectedValue();

}
