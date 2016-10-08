<?php

namespace Didando8a\Patterns\Abstracts;

abstract class AbstractBookletPrinter
{
    protected abstract function  getPageCount() : int;

    protected abstract function printFrontCover();

    protected abstract function printTableContents();

    protected abstract function printPage(int $pageNumber);

    protected abstract function printIndex();

    protected abstract function printBackCover();

    public final function printBooklet()
    {
        $this->printFrontCover();
        $this->printTableContents();

        for ($i = 1; $i <= $this->getPageCount(); $i++) {
            $this->printPage($i);
        }

        $this->printIndex();
        $this->printBackCover();
    }
}
