<?php

namespace Didando8a\Patterns\Entity;

use Didando8a\Patterns\Abstracts\AbstractBookletPrinter;

class SaloonBooklet extends AbstractBookletPrinter
{
    private $pages;

    public function __construct(int $pages = 100)
    {
        $this->pages = $pages;
    }

    protected function getPageCount() : int
    {
        return $this->pages;
    }

    protected function printFrontCover()
    {
        echo "Printing front cover for Saloon car booklet\n";
    }

    protected function printTableContents()
    {
        echo "Printing table of contents for Saloon booklet\n";
    }

    protected function printPage(int $pageNumber)
    {
        echo sprintf("Printing page %d for Saloon car booklet\n", $pageNumber);
    }

    protected function printIndex()
    {
        echo "Printing index for Saloon car booklet\n";
    }

    protected function printBackCover()
    {
        echo "Printing back cover for Saloon car booklet\n";
    }
}
