<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractBookletPrinter;

class ServiceHistoryBooklet extends AbstractBookletPrinter
{
    private $pages;

    public function __construct(int $pages = 12)
    {
        $this->pages = $pages;
    }

    protected function getPageCount() : int
    {
        return $this->pages;
    }

    protected function printFrontCover()
    {
        echo "Printing front cover for Service history booklet\n";
    }

    protected function printTableContents()
    {
        echo "Printing table of contents for Service history booklet\n";
    }

    protected function printPage(int $pageNumber)
    {
        echo sprintf("Printing page %d for Service history booklet\n", $pageNumber);
    }

    protected function printIndex()
    {
        echo "Printing index for Service history booklet\n";
    }

    protected function printBackCover()
    {
        echo "Printing back cover for Service history booklet\n";
    }
}
