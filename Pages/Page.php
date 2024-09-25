<?php
namespace Pages;
use Pages\PageInterface;

class Page implements PageInterface
{
    private $page;
    public function __construct(PageInterface $page)
    {
        $this->page = $page;
    }

    public function render()
    {
        $this->page->render();
    }


}